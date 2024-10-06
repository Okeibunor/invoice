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
            $themeColor = $_POST['theme-color'];
            $currency = $_POST['currency'];
            $orderNumber = $_POST['order-number'];
            $orderDate = $_POST['order-date'];
            $dueDate = $_POST['delivery-date'];
            $companyName = $_POST['company-name'];
            $companyAddress = $_POST['company-location'];
            $customerName = $_POST['customer-name'];
            $customerAddress = $_POST['customer-location'];
            $itemNames = $_POST['item-name'];
            $itemCurrency = $_POST['currency'];
            $itemUnitCosts = $_POST['item-unit-cost'];
            $itemQuantities = $_POST['item-quantity'];
            $itemAmounts = $_POST['item-price'];
            $notes = $_POST['notes'];
            $paymentInfo = $_POST['payment-info'];
            $terms = $_POST['terms'];


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

            $logo = (new UploadApi())->upload($_FILES['company-image']['tmp_name'], [
                'folder' => 'invoice-generator',
            ]);

            $companyLogo = $logo['secure_url'];

            $invoice = new InvoicePrinter('A4', $currency, 'en');
            /* Header Settings */
            $invoice->setLogo($companyLogo);
            $invoice->setColor($themeColor);
            $invoice->setType('Invoice');
            $invoice->setReference($orderNumber);
            $invoice->setDate(date('M dS, Y', strtotime($orderDate)));
            $invoice->setDue(date('M dS, Y', strtotime($dueDate)));
            $invoice->setFrom([$companyName, $companyAddress]);
            $invoice->setTo([$customerName, $customerAddress]);

            // Initialize total amount
            $totalAmount = 0;

            /* Adding Items in table */
            // Loop through each item and add it to the invoice
            for ($i = 0; $i < count($itemNames); $i++) {
                $itemName = $itemNames[$i];
                $itemQuantity = $itemQuantities[$i];
                $itemUnitCost = $itemUnitCosts[$i];
                $itemAmount = $itemAmounts[$i];

                // Add each item to the invoice
                $invoice->addItem($itemName, '', $itemQuantity, 0, $itemUnitCost, 0, $itemAmount);

                // Accumulate the total amount
                $totalAmount += $itemAmount;
            }

            /* Set totals alignment */
            $invoice->setTotalsAlignment('horizontal');
            /* Add totals */
            $invoice->addTotal('Total', $totalAmount);
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

            return redirect(current_url(), 'Invoice generated successfully');
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }
}
