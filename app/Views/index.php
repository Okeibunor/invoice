<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Free Invoice Generator - Create Invoices Online</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Generate professional invoices for free with our online invoice generator. Create, customize, and download invoices instantly.">
    <meta name="keywords" content="free invoice generator, online invoice tool, create invoices online, invoice template, customizable invoices, download invoices">
    <meta name="author" content="Temmy">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://invoice.temmy.net">
    <meta property="og:title" content="Free Invoice Generator - Temmy">
    <meta property="og:description" content="Generate professional invoices for free with our online invoice generator. Create, customize, and download invoices instantly.">
    <meta property="og:image" content="https://invoice.temmy.net/images/og-image.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://invoice.temmy.net">
    <meta property="twitter:title" content="Free Invoice Generator - Temmy">
    <meta property="twitter:description" content="Generate professional invoices for free with our online invoice generator. Create, customize, and download invoices instantly.">
    <meta property="twitter:image" content="https://invoice.temmy.net/images/twitter-image.jpg">

    <!-- Favicon -->
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <!-- STYLES -->

    <style {csp-style-nonce}>
        * {
            transition: background-color 300ms ease, color 300ms ease;
        }

        *:focus {
            background-color: rgba(221, 72, 20, .2);
            outline: none;
        }

        html,
        body {
            color: rgba(33, 37, 41, 1);
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
            font-size: 16px;
            margin: 0;
            padding: 0;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            text-rendering: optimizeLegibility;
        }

        header {
            background-color: rgba(247, 248, 249, 1);
            padding: .4rem 0 0;
        }

        .menu {
            padding: .4rem 2rem;
        }

        header ul {
            border-bottom: 1px solid rgba(242, 242, 242, 1);
            list-style-type: none;
            margin: 0;
            overflow: hidden;
            padding: 0;
            text-align: right;
        }

        header li {
            display: inline-block;
        }

        header li a {
            border-radius: 5px;
            color: rgba(0, 0, 0, .5);
            display: block;
            height: 44px;
            text-decoration: none;
        }

        header li.menu-item a {
            border-radius: 5px;
            margin: 5px 0;
            height: 38px;
            line-height: 36px;
            padding: .4rem .65rem;
            text-align: center;
        }

        header li.menu-item a:hover,
        header li.menu-item a:focus {
            background-color: rgba(221, 72, 20, .2);
            color: rgba(221, 72, 20, 1);
        }

        header .logo {
            float: left;
            padding: 1rem .5rem;
        }


        header .menu-toggle {
            display: none;
            float: right;
            font-size: 2rem;
            font-weight: bold;
        }

        header .menu-toggle button {
            background-color: rgba(221, 72, 20, .6);
            border: none;
            border-radius: 3px;
            color: rgba(255, 255, 255, 1);
            cursor: pointer;
            font: inherit;
            font-size: 1.3rem;
            height: 36px;
            padding: 0;
            margin: 11px 0;
            overflow: visible;
            width: 40px;
        }

        header .menu-toggle button:hover,
        header .menu-toggle button:focus {
            background-color: rgba(221, 72, 20, .8);
            color: rgba(255, 255, 255, .8);
        }

        header .heroe {
            margin: 0 auto;
            max-width: 1100px;
            padding: 1rem 1.75rem 1.75rem 1.75rem;
        }

        header .heroe h1 {
            font-size: 2.5rem;
            font-weight: 500;
        }

        header .heroe h2 {
            font-size: 1.5rem;
            font-weight: 300;
        }

        section {
            margin: 0 auto;
            max-width: 1100px;
            padding: 2.5rem 1.75rem 3.5rem 1.75rem;
        }

        section h1 {
            margin-bottom: 2.5rem;
        }

        section h2 {
            font-size: 120%;
            line-height: 2.5rem;
            padding-top: 1.5rem;
        }

        section pre {
            background-color: rgba(247, 248, 249, 1);
            border: 1px solid rgba(242, 242, 242, 1);
            display: block;
            font-size: .9rem;
            margin: 2rem 0;
            padding: 1rem 1.5rem;
            white-space: pre-wrap;
            word-break: break-all;
        }

        section code {
            display: block;
        }

        section a {
            color: rgba(221, 72, 20, 1);
        }

        section svg {
            margin-bottom: -5px;
            margin-right: 5px;
            width: 25px;
        }

        .further {
            background-color: rgba(247, 248, 249, 1);
            border-bottom: 1px solid rgba(242, 242, 242, 1);
            border-top: 1px solid rgba(242, 242, 242, 1);
        }

        .further h2:first-of-type {
            padding-top: 0;
        }

        footer {
            background-color: rgba(221, 72, 20, .8);
            text-align: center;
        }

        footer .environment {
            color: rgba(255, 255, 255, 1);
            padding: 2rem 1.75rem;
        }

        footer .copyrights {
            background-color: rgba(62, 62, 62, 1);
            color: rgba(200, 200, 200, 1);
            padding: .25rem 1.75rem;
        }

        @media (max-width: 629px) {
            header ul {
                padding: 0;
            }

            header .menu-toggle {
                padding: 0 1rem;
            }

            header .menu-item {
                background-color: rgba(244, 245, 246, 1);
                border-top: 1px solid rgba(242, 242, 242, 1);
                margin: 0 15px;
                width: calc(100% - 30px);
            }

            header .menu-toggle {
                display: block;
            }

            header .hidden {
                display: none;
            }

            header li.menu-item a {
                background-color: rgba(221, 72, 20, .1);
            }

            header li.menu-item a:hover,
            header li.menu-item a:focus {
                background-color: rgba(221, 72, 20, .7);
                color: rgba(255, 255, 255, .8);
            }
        }

        form {
            background-color: #fff;
            border-radius: 20px;
            padding: 20px;
        }

        .form-group {
            margin: 10px;
            padding: 10px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"],
        input[type="file"],
        select,
        textarea {
            padding: 15px;
            border-radius: 10px;
            border: .5px solid #ccc;
            width: 90%
        }

        input[type='file'] {
            height: 100px;
        }

        input[type="color"] {
            height: 40px;
            width: 40px;
            border: none;
            cursor: pointer;
        }

        button[type="submit"] {
            background-color: #f44336;
            color: #fff;
            padding: 20px 40px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 20px 30px;
        }

        button[type="submit"]:hover {
            background-color: #d32f2f;
        }


        .item-group {
            padding: 20px;
            margin: 30px;
            border-radius: 10px
        }

        .item-form-group {
            display: flex;
            gap: 1px;
            justify-content: space-between;
        }

        .item-form-group .main-group {
            flex-grow: 10;
            flex: 4 !important;
        }

        .item-form-group .form-group {
            flex: 1;
        }

        .add-item-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .add-item {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background-color: #f44336;
            color: #fff;
            cursor: pointer;
        }

        .remove-item {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 30px;
            height: 30px;
            color: #f44336;
            cursor: pointer;
        }

        .center {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .flex {
            display: flex;
            gap: 5px;
            width: 100%;
        }

        .link {
            text-decoration: none;
        }

        .link.light {
            color: #ccc;
        }

        .w-full {
            width: 100%;
        }

        .p-r {
            padding: 10px 15px;
        }

        .gap-r {
            gap: 20px;
        }

        .bg-gray {
            background-color: rgba(244, 245, 246, 1);
        }

        .form-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 95%;
            border-bottom: 1px dashed #ccc;
        }

        .color-group {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-right: 10px;
        }

        .title {
            font-size: 2rem;
            font-weight: 500;
            margin: 20px;
            padding: 10px 0;
            color: #ccc;
        }

        .subtitle {
            font-size: 1rem;
            font-weight: 550;
            margin: auto 20px;
            padding: 10px 0;
            color: #ccc;
        }

        .dotted-hr {
            border: none;
            border-top: 1px dashed #ccc;
            margin: 5px 30px;
        }

        .subheading {
            font-size: 1.1em !important;
            font-weight: 300;
            margin: 15px auto;
        }

        .shadow-sm {
            box-shadow: 0 0 5px rgba(0, 0, 0, .07);
        }
    </style>
</head>

<body>

    <!-- HEADER: MENU + HEROE SECTION -->
    <header>

        <div class="menu">
            <ul>
                <li class="logo">
                    <a href="https://temmy.net" target="_blank">Invoive Generator</a>
                </li>
                <li class="menu-toggle">
                    <button onclick="toggleMenu();">&#9776;</button>
                </li>
                <li class="menu-item hidden"><a href="#">Home</a></li>
                <li class="menu-item hidden"><a href="https://temmy.net" target="_blank">Vist Temmy</a>
                </li>
            </ul>
        </div>

        <div class="heroe">
            <h1>Invoice Generator</h1>
            <h2 class="subheading">Generate professional invoices for free with our online free invoice generator. Create, customize, and download invoices instantly.</h2>
            <form class="shadow-sm" action="generate-invoice" method="POST" enctype="multipart/form-data">
                <div class="form-header">
                    <div class="title">INVOICE</div>
                    <div class="color-group">
                        <div class="subtitle">Select Theme Color:</div>
                        <input type="color" name="theme-color">
                    </div>
                </div>

                <!-- Timestamps -->
                <div class="flex w-full gap-r">
                    <div class="w-full">

                        <!-- Company Logo -->
                        <div class="w-full  form-group">
                            <label for="company-image">Add Company Logo</label>
                            <input type="file" id="company-image" name="company-image" accept="image/*">
                        </div>
                        <!-- Currency Information -->
                        <div class=" form-group p-r">
                            <label for="currency">Currency</label>
                            <select class="w-full" id="currency" name="currency">
                                <option value="USD" selected="selected" label="US dollar">USD</option>
                                <option value="EUR" label="Euro">EUR</option>
                                <option value="JPY" label="Japanese yen">JPY</option>
                                <option value="GBP" label="Pound sterling">GBP</option>
                                <option disabled>──────────</option>
                                <option value="AED" label="United Arab Emirates dirham">AED</option>
                                <option value="AFN" label="Afghan afghani">AFN</option>
                                <option value="ALL" label="Albanian lek">ALL</option>
                                <option value="AMD" label="Armenian dram">AMD</option>
                                <option value="ANG" label="Netherlands Antillean guilder">ANG</option>
                                <option value="AOA" label="Angolan kwanza">AOA</option>
                                <option value="ARS" label="Argentine peso">ARS</option>
                                <option value="AUD" label="Australian dollar">AUD</option>
                                <option value="AWG" label="Aruban florin">AWG</option>
                                <option value="AZN" label="Azerbaijani manat">AZN</option>
                                <option value="BAM" label="Bosnia and Herzegovina convertible mark">BAM</option>
                                <option value="BBD" label="Barbadian dollar">BBD</option>
                                <option value="BDT" label="Bangladeshi taka">BDT</option>
                                <option value="BGN" label="Bulgarian lev">BGN</option>
                                <option value="BHD" label="Bahraini dinar">BHD</option>
                                <option value="BIF" label="Burundian franc">BIF</option>
                                <option value="BMD" label="Bermudian dollar">BMD</option>
                                <option value="BND" label="Brunei dollar">BND</option>
                                <option value="BOB" label="Bolivian boliviano">BOB</option>
                                <option value="BRL" label="Brazilian real">BRL</option>
                                <option value="BSD" label="Bahamian dollar">BSD</option>
                                <option value="BTN" label="Bhutanese ngultrum">BTN</option>
                                <option value="BWP" label="Botswana pula">BWP</option>
                                <option value="BYN" label="Belarusian ruble">BYN</option>
                                <option value="BZD" label="Belize dollar">BZD</option>
                                <option value="CAD" label="Canadian dollar">CAD</option>
                                <option value="CDF" label="Congolese franc">CDF</option>
                                <option value="CHF" label="Swiss franc">CHF</option>
                                <option value="CLP" label="Chilean peso">CLP</option>
                                <option value="CNY" label="Chinese yuan">CNY</option>
                                <option value="COP" label="Colombian peso">COP</option>
                                <option value="CRC" label="Costa Rican colón">CRC</option>
                                <option value="CUC" label="Cuban convertible peso">CUC</option>
                                <option value="CUP" label="Cuban peso">CUP</option>
                                <option value="CVE" label="Cape Verdean escudo">CVE</option>
                                <option value="CZK" label="Czech koruna">CZK</option>
                                <option value="DJF" label="Djiboutian franc">DJF</option>
                                <option value="DKK" label="Danish krone">DKK</option>
                                <option value="DOP" label="Dominican peso">DOP</option>
                                <option value="DZD" label="Algerian dinar">DZD</option>
                                <option value="EGP" label="Egyptian pound">EGP</option>
                                <option value="ERN" label="Eritrean nakfa">ERN</option>
                                <option value="ETB" label="Ethiopian birr">ETB</option>
                                <option value="EUR" label="EURO">EUR</option>
                                <option value="FJD" label="Fijian dollar">FJD</option>
                                <option value="FKP" label="Falkland Islands pound">FKP</option>
                                <option value="GBP" label="British pound">GBP</option>
                                <option value="GEL" label="Georgian lari">GEL</option>
                                <option value="GGP" label="Guernsey pound">GGP</option>
                                <option value="GHS" label="Ghanaian cedi">GHS</option>
                                <option value="GIP" label="Gibraltar pound">GIP</option>
                                <option value="GMD" label="Gambian dalasi">GMD</option>
                                <option value="GNF" label="Guinean franc">GNF</option>
                                <option value="GTQ" label="Guatemalan quetzal">GTQ</option>
                                <option value="GYD" label="Guyanese dollar">GYD</option>
                                <option value="HKD" label="Hong Kong dollar">HKD</option>
                                <option value="HNL" label="Honduran lempira">HNL</option>
                                <option value="HRK" label="Croatian kuna">HRK</option>
                                <option value="HTG" label="Haitian gourde">HTG</option>
                                <option value="HUF" label="Hungarian forint">HUF</option>
                                <option value="IDR" label="Indonesian rupiah">IDR</option>
                                <option value="ILS" label="Israeli new shekel">ILS</option>
                                <option value="IMP" label="Manx pound">IMP</option>
                                <option value="INR" label="Indian rupee">INR</option>
                                <option value="IQD" label="Iraqi dinar">IQD</option>
                                <option value="IRR" label="Iranian rial">IRR</option>
                                <option value="ISK" label="Icelandic króna">ISK</option>
                                <option value="JEP" label="Jersey pound">JEP</option>
                                <option value="JMD" label="Jamaican dollar">JMD</option>
                                <option value="JOD" label="Jordanian dinar">JOD</option>
                                <option value="JPY" label="Japanese yen">JPY</option>
                                <option value="KES" label="Kenyan shilling">KES</option>
                                <option value="KGS" label="Kyrgyzstani som">KGS</option>
                                <option value="KHR" label="Cambodian riel">KHR</option>
                                <option value="KID" label="Kiribati dollar">KID</option>
                                <option value="KMF" label="Comorian franc">KMF</option>
                                <option value="KPW" label="North Korean won">KPW</option>
                                <option value="KRW" label="South Korean won">KRW</option>
                                <option value="KWD" label="Kuwaiti dinar">KWD</option>
                                <option value="KYD" label="Cayman Islands dollar">KYD</option>
                                <option value="KZT" label="Kazakhstani tenge">KZT</option>
                                <option value="LAK" label="Lao kip">LAK</option>
                                <option value="LBP" label="Lebanese pound">LBP</option>
                                <option value="LKR" label="Sri Lankan rupee">LKR</option>
                                <option value="LRD" label="Liberian dollar">LRD</option>
                                <option value="LSL" label="Lesotho loti">LSL</option>
                                <option value="LYD" label="Libyan dinar">LYD</option>
                                <option value="MAD" label="Moroccan dirham">MAD</option>
                                <option value="MDL" label="Moldovan leu">MDL</option>
                                <option value="MGA" label="Malagasy ariary">MGA</option>
                                <option value="MKD" label="Macedonian denar">MKD</option>
                                <option value="MMK" label="Burmese kyat">MMK</option>
                                <option value="MNT" label="Mongolian tögrög">MNT</option>
                                <option value="MOP" label="Macanese pataca">MOP</option>
                                <option value="MRU" label="Mauritanian ouguiya">MRU</option>
                                <option value="MUR" label="Mauritian rupee">MUR</option>
                                <option value="MVR" label="Maldivian rufiyaa">MVR</option>
                                <option value="MWK" label="Malawian kwacha">MWK</option>
                                <option value="MXN" label="Mexican peso">MXN</option>
                                <option value="MYR" label="Malaysian ringgit">MYR</option>
                                <option value="MZN" label="Mozambican metical">MZN</option>
                                <option value="NAD" label="Namibian dollar">NAD</option>
                                <option value="NGN" label="Nigerian naira">NGN</option>
                                <option value="NIO" label="Nicaraguan córdoba">NIO</option>
                                <option value="NOK" label="Norwegian krone">NOK</option>
                                <option value="NPR" label="Nepalese rupee">NPR</option>
                                <option value="NZD" label="New Zealand dollar">NZD</option>
                                <option value="OMR" label="Omani rial">OMR</option>
                                <option value="PAB" label="Panamanian balboa">PAB</option>
                                <option value="PEN" label="Peruvian sol">PEN</option>
                                <option value="PGK" label="Papua New Guinean kina">PGK</option>
                                <option value="PHP" label="Philippine peso">PHP</option>
                                <option value="PKR" label="Pakistani rupee">PKR</option>
                                <option value="PLN" label="Polish złoty">PLN</option>
                                <option value="PRB" label="Transnistrian ruble">PRB</option>
                                <option value="PYG" label="Paraguayan guaraní">PYG</option>
                                <option value="QAR" label="Qatari riyal">QAR</option>
                                <option value="RON" label="Romanian leu">RON</option>
                                <option value="RSD" label="Serbian dinar">RSD</option>
                                <option value="RUB" label="Russian ruble">RUB</option>
                                <option value="RWF" label="Rwandan franc">RWF</option>
                                <option value="SAR" label="Saudi riyal">SAR</option>
                                <option value="SEK" label="Swedish krona">SEK</option>
                                <option value="SGD" label="Singapore dollar">SGD</option>
                                <option value="SHP" label="Saint Helena pound">SHP</option>
                                <option value="SLL" label="Sierra Leonean leone">SLL</option>
                                <option value="SLS" label="Somaliland shilling">SLS</option>
                                <option value="SOS" label="Somali shilling">SOS</option>
                                <option value="SRD" label="Surinamese dollar">SRD</option>
                                <option value="SSP" label="South Sudanese pound">SSP</option>
                                <option value="STN" label="São Tomé and Príncipe dobra">STN</option>
                                <option value="SYP" label="Syrian pound">SYP</option>
                                <option value="SZL" label="Swazi lilangeni">SZL</option>
                                <option value="THB" label="Thai baht">THB</option>
                                <option value="TJS" label="Tajikistani somoni">TJS</option>
                                <option value="TMT" label="Turkmenistan manat">TMT</option>
                                <option value="TND" label="Tunisian dinar">TND</option>
                                <option value="TOP" label="Tongan paʻanga">TOP</option>
                                <option value="TRY" label="Turkish lira">TRY</option>
                                <option value="TTD" label="Trinidad and Tobago dollar">TTD</option>
                                <option value="TVD" label="Tuvaluan dollar">TVD</option>
                                <option value="TWD" label="New Taiwan dollar">TWD</option>
                                <option value="TZS" label="Tanzanian shilling">TZS</option>
                                <option value="UAH" label="Ukrainian hryvnia">UAH</option>
                                <option value="UGX" label="Ugandan shilling">UGX</option>
                                <option value="USD" label="United States dollar">USD</option>
                                <option value="UYU" label="Uruguayan peso">UYU</option>
                                <option value="UZS" label="Uzbekistani soʻm">UZS</option>
                                <option value="VES" label="Venezuelan bolívar soberano">VES</option>
                                <option value="VND" label="Vietnamese đồng">VND</option>
                                <option value="VUV" label="Vanuatu vatu">VUV</option>
                                <option value="WST" label="Samoan tālā">WST</option>
                                <option value="XAF" label="Central African CFA franc">XAF</option>
                                <option value="XCD" label="Eastern Caribbean dollar">XCD</option>
                                <option value="XOF" label="West African CFA franc">XOF</option>
                                <option value="XPF" label="CFP franc">XPF</option>
                                <option value="ZAR" label="South African rand">ZAR</option>
                                <option value="ZMW" label="Zambian kwacha">ZMW</option>
                                <option value="ZWB" label="Zimbabwean bonds">ZWB</option>
                            </select>
                        </div>
                    </div>

                    <div class="w-full p-r light">
                        <!-- Order Information -->
                        <div class="form-group">
                            <label for="order-number">Order Number</label>
                            <input type="text" id="order-number" name="order-number" required>
                        </div>

                        <!-- Order Date -->
                        <div class=" form-group">
                            <label for="order-date">Order Date</label>
                            <input type="date" id="order-date" name="order-date" required>
                        </div>
                        <!-- Due Date -->
                        <div class=" form-group">
                            <label for="delivery-date">Due Date</label>
                            <input class="w-full" type="date" id="delivery-date" name="delivery-date" required>
                        </div>
                    </div>
                </div>

                <div class="dotted-hr"></div>

                <div class="flex">
                    <div class="w-full p-r">
                        <p class="subtitle">BILL FROM</p>
                        <!-- Company Information -->
                        <div class="form-group">
                            <label for="company-name">Company Name</label>
                            <input type="text" id="company-name" name="company-name" required>
                        </div>

                        <div class="form-group">
                            <label for="company-location">Company Address</label>
                            <textarea type="textarea" id="company-location" name="company-location" rows="5" required></textarea>
                        </div>
                    </div>
                    <div class="w-full p-r">
                        <p class="subtitle">BILL TO</p>
                        <!-- Customer Information -->
                        <div class="form-group">
                            <label for="customer-name">Customer Name</label>
                            <input type="text" id="customer-name" name="customer-name" required>
                        </div>

                        <div class="form-group">
                            <label for="customer-location">Customer Address</label>
                            <textarea type="textarea" id="customer-location" name="customer-location" rows="5" required></textarea>
                        </div>
                    </div>
                </div>

                <div class="dotted-hr"></div>
                <div class="p-r">
                    <p class="subtitle">ITEMS</p>

                </div>
                <!-- Item Information -->
                <div class="item-group bg-gray">
                    <div class="item-form-group">
                        <div class="form-group main-group">
                            <label for="item-name">Item description</label>
                            <input type="text" id="item-name" name="item-name" required>
                        </div>
                        <div class="form-group">
                            <label for="item-unit-cost">Unit Cost</label>
                            <input type="number" id="item-unit-cost" name="item-unit-cost" required>
                        </div>
                        <div class="form-group">
                            <label for="item-quantity"> Quantity</label>
                            <input type="number" id="item-quantity" name="item-quantity" required>
                        </div>

                        <div class="form-group">
                            <label style="text-wrap: nowrap;" for="item-price">Amount</label>
                            <input type="number" id="item-price" name="item-price" required>
                        </div>

                        <div class="form-group center">
                            <svg class="remove-item" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="circle-svg">
                                <circle cx="12" cy="12" r="10" fill="none" stroke="currentColor" stroke-width="1" />
                                <line x1="8" y1="8" x2="16" y2="16" stroke="currentColor" stroke-width="2" />
                                <line x1="8" y1="16" x2="16" y2="8" stroke="currentColor" stroke-width="2" />
                            </svg>
                        </div>
                    </div>

                    <div class="add-item-container">
                        <div class="add-item" id="add-item-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="circle-svg">
                                <circle cx="12" cy="12" r="10" />
                                <line x1="12" y1="8" x2="12" y2="16" />
                                <line x1="8" y1="12" x2="16" y2="12" />
                            </svg>
                        </div>
                    </div>

                </div>


                <div class="form-group">
                    <label for="notes">Notes</label>
                    <textarea id="notes" name="notes" placeholder="Enter any additional notes"></textarea>
                </div>

                <!-- Add payment information field group -->
                <div class="form-group">
                    <label for="payment-info">Payment Information</label>
                    <textarea type="text" id="payment-info" name="payment-info" placeholder="Enter payment details"></textarea>
                </div>

                <!-- Add terms and conditions field with placeholder -->
                <div class="form-group">
                    <label for="terms">Terms and Conditions</label>
                    <textarea rows="4" id="terms" name="terms" placeholder="Enter terms and conditions"></textarea>
                </div>

                <button type="submit">Generate Invoice</button>
            </form>

        </div>

    </header>


    <!-- CONTENT -->
    <div class="further">

        <section>
            <h2>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <rect x="32" y="96" width="64" height="368" rx="16" ry="16" style="fill:none;stroke:#000;stroke-linejoin:round;stroke-width:32px" />
                    <line x1="112" y1="224" x2="240" y2="224" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                    <line x1="112" y1="400" x2="240" y2="400" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                    <rect x="112" y="160" width="128" height="304" rx="16" ry="16" style="fill:none;stroke:#000;stroke-linejoin:round;stroke-width:32px" />
                    <rect x="256" y="48" width="96" height="416" rx="16" ry="16" style="fill:none;stroke:#000;stroke-linejoin:round;stroke-width:32px" />
                    <path d="M422.46,96.11l-40.4,4.25c-11.12,1.17-19.18,11.57-17.93,23.1l34.92,321.59c1.26,11.53,11.37,20,22.49,18.84l40.4-4.25c11.12-1.17,19.18-11.57,17.93-23.1L445,115C443.69,103.42,433.58,94.94,422.46,96.11Z" style="fill:none;stroke:#000;stroke-linejoin:round;stroke-width:32px" />
                </svg>

                Generate Invoice for Free
            </h2>

            <p>Create professional invoices for free with our easy-to-use free invoice generator. Customize and download invoices .</p>

            <h2>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M431,320.6c-1-3.6,1.2-8.6,3.3-12.2a33.68,33.68,0,0,1,2.1-3.1A162,162,0,0,0,464,215c.3-92.2-77.5-167-173.7-167C206.4,48,136.4,105.1,120,180.9a160.7,160.7,0,0,0-3.7,34.2c0,92.3,74.8,169.1,171,169.1,15.3,0,35.9-4.6,47.2-7.7s22.5-7.2,25.4-8.3a26.44,26.44,0,0,1,9.3-1.7,26,26,0,0,1,10.1,2L436,388.6a13.52,13.52,0,0,0,3.9,1,8,8,0,0,0,8-8,12.85,12.85,0,0,0-.5-2.7Z" style="fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px" />
                    <path d="M66.46,232a146.23,146.23,0,0,0,6.39,152.67c2.31,3.49,3.61,6.19,3.21,8s-11.93,61.87-11.93,61.87a8,8,0,0,0,2.71,7.68A8.17,8.17,0,0,0,72,464a7.26,7.26,0,0,0,2.91-.6l56.21-22a15.7,15.7,0,0,1,12,.2c18.94,7.38,39.88,12,60.83,12A159.21,159.21,0,0,0,284,432.11" style="fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px" />
                </svg>

                Community Support
            </h2>

            <p>Join our community to discuss tips, share experiences, and get support. Visit our <a href="https://www.temmy.net" target="_blank">Forum</a> or <a href="https://chat.whatsapp.com/IiGQj9cnWioFqY8ovQWXbC" target="_blank">Chat on whatsapp</a>.</p>

            <h2>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <line x1="176" y1="48" x2="336" y2="48" style="fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px" />
                    <line x1="118" y1="304" x2="394" y2="304" style="fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px" />
                    <path d="M208,48v93.48a64.09,64.09,0,0,1-9.88,34.18L73.21,373.49C48.4,412.78,76.63,464,123.08,464H388.92c46.45,0,74.68-51.22,49.87-90.51L313.87,175.66A64.09,64.09,0,0,1,304,141.48V48" style="fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px" />
                </svg>
                Contribute to Development
            </h2>

            <p>Be part of our project! Contribute to the codebase and documentation to help us improve. Visit our parent company<a href="https://www.temmy.net" target="_blank"> Temmy Network</a> and contact us.</p>

        </section>

    </div>

    <!-- FOOTER: DEBUG INFO + COPYRIGHTS -->

    <footer>
        <div class="environment">
            <p>Free Invoice generator took {elapsed_time} seconds to load ✨✨✨</p>
        </div>

        <div class="copyrights">

            <p>&copy; <?= date('Y') ?> Free Invoice Generator. by <a class="link light" rel="dofollow" href="https://www.temmy.net" target="_blank">Temmy Newtork</a></p>

        </div>

    </footer>

    <!-- SCRIPTS -->
    <script>
        function toggleMenu() {
            var menuItems = document.getElementsByClassName('menu-item');
            for (var i = 0; i < menuItems.length; i++) {
                var menuItem = menuItems[i];
                menuItem.classList.toggle("hidden");
            }
        }
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add item button click event
            document.getElementById('add-item-btn').addEventListener('click', function() {
                addItemForm();
            });

            // Remove item button click event (event delegation for dynamically added elements)
            document.querySelector('.item-group').addEventListener('click', function(event) {
                if (event.target.classList.contains('remove-item')) {
                    removeItemForm(event.target);
                }
            });
        });

        function addItemForm() {
            const itemFormGroup = document.querySelector('.item-form-group');
            const newItemForm = itemFormGroup.cloneNode(true);

            // Clear input values in the new form
            newItemForm.querySelectorAll('input').forEach(input => {
                input.value = '';
            });

            itemFormGroup.parentNode.insertBefore(newItemForm, document.querySelector('.add-item-container'));
        }

        function removeItemForm(removeBtn) {
            const itemFormGroup = removeBtn.closest('.item-form-group');

            // Ensure there is at least one item form before removing
            if (document.querySelectorAll('.item-form-group').length > 1) {
                itemFormGroup.remove();
            }
        }
    </script>

</body>

</html>