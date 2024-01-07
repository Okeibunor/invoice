<?php

namespace App\Controllers;

error_reporting(E_ALL);
ini_set('display_errors', '1');

use Cloudinary\Configuration\Configuration;
use Cloudinary\Api\Upload\UploadApi;
use Konekt\PdfInvoice\InvoicePrinter;

class Home extends BaseController
{
    public function index(): string
    {
        try {
            return view('index');
        } catch (\Exception $e) {
            log_message('error', $e->getMessage());
            return 'An error occurred: ' . $e->getMessage();
        }
    }


    public function generateInvoice()
    {
        try {
            // Sanitize form data
            $themeColor = filter_input(INPUT_POST, 'theme-color', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $currency = filter_input(INPUT_POST, 'currency', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $orderNumber = filter_input(INPUT_POST, 'order-number', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $orderDate = filter_input(INPUT_POST, 'order-date', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $dueDate = filter_input(INPUT_POST, 'delivery-date', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $companyName = filter_input(INPUT_POST, 'company-name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $companyAddress = filter_input(INPUT_POST, 'company-location', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $customerName = filter_input(INPUT_POST, 'customer-name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $customerAddress = filter_input(INPUT_POST, 'customer-location', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $itemDescription = filter_input(INPUT_POST, 'item-name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $unitCost = filter_input(INPUT_POST, 'item-unit-cost', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
            $quantity = filter_input(INPUT_POST, 'item-quantity', FILTER_SANITIZE_NUMBER_INT);
            $amount = filter_input(INPUT_POST, 'item-price', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
            $notes = filter_input(INPUT_POST, 'notes', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $paymentInfo = filter_input(INPUT_POST, 'payment-info', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $terms = filter_input(INPUT_POST, 'terms', FILTER_SANITIZE_FULL_SPECIAL_CHARS);


            Configuration::instance([
                'cloud' => [
                    'cloud_name' => $_ENV['CLOUDINARY_CLOUD_NAME'],
                    'api_key' => $_ENV['CLOUDINARY_API_KEY'],
                    'api_secret' => $_ENV['CLOUDINARY_API_SECRET']
                ],
                'url' => [
                    'secure' => true
                ]
            ]);

            $logo = (new UploadApi())->upload($_FILES['company-image']['tmp_name']);

            $companyLogo = $logo['secure_url'];

            $invoice = new InvoicePrinter();
            /* Header Settings */
            $invoice->setLogo($companyLogo);
            $invoice->setColor($themeColor);
            $invoice->setType('Invoice');
            $invoice->setReference($orderNumber);
            $invoice->setDate(date('M dS, Y', strtotime($orderDate)));
            $invoice->setDue(date('M dS, Y', strtotime($dueDate)));
            $invoice->setFrom([$companyName, $companyAddress]);
            $invoice->setTo([$customerName, $customerAddress]);

            /* Adding Items in table */
            $invoice->addItem($itemDescription, '', $quantity, 0, $unitCost, 0, $amount);

            /* Set totals alignment */
            $invoice->setTotalsAlignment('horizontal');
            /* Add totals */
            $invoice->addTotal('Total', $amount);
            // Add other totals as needed

            /* Add title */
            $invoice->addTitle('Important Notice');
            /* Add Paragraph */
            $invoice->addParagraph($notes);
            /* Add title */
            $invoice->addTitle('Payment Information');
            $invoice->addParagraph($paymentInfo);

            /* Add title */
            $invoice->addTitle('Terms and Conditions');
            $invoice->addParagraph($terms);

            /* Set footer note */
            $invoice->setFooternote('Powered by temmy.net');
            /* Render */
            $invoice->render('Invoice.pdf', 'D');
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }
}
