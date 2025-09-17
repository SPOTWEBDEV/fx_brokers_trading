<?php
include('../../../server/connection.php');
include('../../../server/auth/client.php');
require_once '../../../mailer/email_template.php';
require_once '../../../mailer/mailer.php';


// Ensure deposit uuid is provided
if (!isset($_GET['deposit_uuid']) && !isset($_GET['method_uuid'])) {
    die("Invalid request. Deposit UUID or Method UUID is missing.");
}

$deposit_uuid = $_GET['deposit_uuid'];

// Fetch deposit
$sql = "SELECT * FROM deposit WHERE uuid = ? AND user_id = ? LIMIT 1";
$stmt = $connection->prepare($sql);
$stmt->bind_param("si", $deposit_uuid, $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    die("Deposit not found or access denied.");
}

$deposit = $result->fetch_assoc();

// Fetch payment method details


$method_uuid = $_GET['method_uuid'];


$sql2 = "SELECT * FROM payment_methods WHERE uuid = ? LIMIT 1";
$stmt2 = $connection->prepare($sql2);
$stmt2->bind_param("s", $method_uuid);
$stmt2->execute();
$result2 = $stmt2->get_result();

if ($result2->num_rows === 0) {
    die("Payment method not found.");
}

$method = $result2->fetch_assoc();




// Handle Deposit Button
if (isset($_POST['update_deposit'])) {
    $update = $connection->prepare("UPDATE deposit SET method = ? WHERE uuid = ? AND user_id = ?");
    $update->bind_param("ssi", $method['method_key'], $deposit_uuid, $id);



    $body =  generateEmailTemplate("deposit", $name, $email, true, $deposit);

    $result = smtpmailer($email,'Deposit Request',$body);


    if ($update->execute()) {
        echo "<script>
        alert('Deposit method updated successfully!');
        setTimeout(()=>{
           window.location.href='../../dashboard/'
        },2000)
        </script>";
    } else {
        echo "<script>alert('Error updating deposit.');</script>";
    }
}
?>





<html lang="en" style="--hover: #252b3c;
--nav-primary-font-colour: white;
--nav-secondary-font-colour: white;
--background-colour: #000000;
--background-font-colour: #a5bdd9;
--background-heading-colour: #ffffff;
--primary-background: #0b1118;
--primary-font-colour: #a5bdd9;
--primary-border-colour: #363c4e;
--primary-link-colour: #FFFFFF;
--secondary-background: #000000;
--secondary-font-colour: #a5bdd9;
--secondary-heading-colour: #ffffff;
--border-colour: #434651;

height: 100%;">

<head>
    <meta charset="UTF-8">
    <title>Crypto</title>

    <!--Include Header snippet-->






    <meta name="mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, user-scalable=no">

    <meta property="og:description" content="Forex, Stocks, ETFs &amp; Options | cityindex-live - Online Trading Platform">
    <meta property="”og:image”" content="../../../static/globalcityindex-live/wp-content/themes/vt/favicon-new.png">
    <meta property="”og:title”" content="cityindex-live">

    <link rel="manifest" href="../../../static/globalcityindex-live/assets/images/pwa/manifest.json">
    <link rel="shortcut icon" href="../../../static/globalcityindex-live/wp-content/themes/vt/favicon-new.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="../../../static/globalcityindex-live/assets/css/site/reactapp-modules.css">
    <link rel="stylesheet" href="../../../static/globalcityindex-live/assets/css/libs/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="apple-touch-icon" sizes="57x57"
        href="../../../static/globalcityindex-live/wp-content/themes/vt/favicon-new.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link href="../../../static/account/assets/global-cfd-market.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" charset="UTF-8"
        href="https://www.gstatic.com/_/translate_http/_/ss/k=translate_http.tr.69JJaQ5G5xA.L.W.O/d=0/rs=AN8SPfpC36MIoWPngdVwZ4RUzeJYZaC7rg/m=el_main_css">
    <script type="text/javascript" charset="utf-8" async="" src="https://www.smartsuppchat.com/loader.js?"></script>
    <script type="text/javascript" charset="UTF-8"
        src="https://translate.googleapis.com/_/translate_http/_/js/k=translate_http.tr.en_GB.c_zC7qUnTFY.O/d=1/exm=el_conf/ed=1/rs=AN8SPfoBlmfmYftMKBfrazMTdGZqwlOJOw/m=el_main">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <style>
    .newbtn {
        background-color: #ff7700;
        border-color: #122b40;
        font-size: 16px;
        font-weight: bold;
        border-radius: 30px;
        border-width: 0;
        margin-top: 15px;
        padding: 10px 72px;
        color: white;

    }


    .tabs {
        position: relative;
        overflow-x: auto;
        overflow-y: hidden;
        height: 48px;
        width: 70%;

        margin: 0 auto;
        white-space: nowrap;
    }
    </style>
</head>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="../../../static/globalcityindex-live/assets/css/site/reactapp-modules.css">
    <link rel="stylesheet" href="../../../static/globalcityindex-live/assets/css/libs/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="apple-touch-icon" sizes="57x57" href="../../../static/globalcityindex-live/wp-content/themes/vt/favicon-new.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link href="../../../static/account/assets/global-cfd-market.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" charset="UTF-8" href="https://www.gstatic.com/_/translate_http/_/ss/k=translate_http.tr.69JJaQ5G5xA.L.W.O/d=0/rs=AN8SPfpC36MIoWPngdVwZ4RUzeJYZaC7rg/m=el_main_css">
    <script type="text/javascript" charset="utf-8" async="" src="https://www.smartsuppchat.com/loader.js?"></script>
    <script type="text/javascript" charset="UTF-8" src="https://translate.googleapis.com/_/translate_http/_/js/k=translate_http.tr.en_GB.c_zC7qUnTFY.O/d=1/exm=el_conf/ed=1/rs=AN8SPfoBlmfmYftMKBfrazMTdGZqwlOJOw/m=el_main"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <style>
        .newbtn {
            background-color: #ff7700;
            border-color: #122b40;
            font-size: 16px;
            font-weight: bold;
            border-radius: 30px;
            border-width: 0;
            margin-top: 15px;
            padding: 10px 72px;
            color: white;

        }


        .tabs {
            position: relative;
            overflow-x: auto;
            overflow-y: hidden;
            height: 48px;
            width: 70%;

            margin: 0 auto;
            white-space: nowrap;
        }
    </style>
</head>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="stylesheet" href="../../../static/globalfpmarkets/assets/css/site/reactapp-modules.css">
<link rel="stylesheet" href="../../../static/globalfpmarkets/assets/css/libs/flag-icon-css/css/flag-icon.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<link rel="apple-touch-icon" sizes="57x57" href="../../../static/globalfpmarkets/wp-content/themes/vt/favicon-new.png">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
<link href="../../../static/account/assets/global-cfd-market.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" charset="UTF-8" href="https://www.gstatic.com/_/translate_http/_/ss/k=translate_http.tr.69JJaQ5G5xA.L.W.O/d=0/rs=AN8SPfpC36MIoWPngdVwZ4RUzeJYZaC7rg/m=el_main_css">
<script type="text/javascript" charset="utf-8" async="" src="https://www.smartsuppchat.com/loader.js?"></script>
<script type="text/javascript" charset="UTF-8" src="https://translate.googleapis.com/_/translate_http/_/js/k=translate_http.tr.en_GB.c_zC7qUnTFY.O/d=1/exm=el_conf/ed=1/rs=AN8SPfoBlmfmYftMKBfrazMTdGZqwlOJOw/m=el_main"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<style>
    .newbtn {
        background-color: #ff7700;
        border-color: #122b40;
        font-size: 16px;
        font-weight: bold;
        border-radius: 30px;
        border-width: 0;
        margin-top: 15px;
        padding: 10px 72px;
        color: white;

    }


    .tabs {
        position: relative;
        overflow-x: auto;
        overflow-y: hidden;
        height: 48px;
        width: 70%;

        margin: 0 auto;
        white-space: nowrap;
    }
</style>
</head>





<body style="position: relative; min-height: 100%; top: 0px;" cz-shortcut-listen="true">
    <noscript> You need to enable JavaScript to run this app. </noscript>

    <div id="root">
        <!--include navbar snipet-->




        <style>
            .alert {
                padding: 15px;
                margin-bottom: 20px;
                border: 1px solid transparent;
                border-radius: 4px;
            }

            .alert h4 {
                margin-top: 0;
                color: inherit;
            }

            .alert .alert-link {
                font-weight: bold;
            }

            .alert>p,
            .alert>ul {
                margin-bottom: 0;
            }

            .alert>p+p {
                margin-top: 5px;
            }

            .alert-dismissable,
            .alert-dismissible {
                padding-right: 35px;
            }

            .alert-dismissable .close,
            .alert-dismissible .close {
                position: relative;
                top: -2px;
                right: -21px;
                color: inherit;
            }

            .alert-success {
                background-color: #dff0d8;
                border-color: #d6e9c6;
                color: #3c763d;
            }

            .alert-success hr {
                border-top-color: #c9e2b3;
            }

            .alert-success .alert-link {
                color: #2b542c;
            }

            .alert-info {
                background-color: #d9edf7;
                border-color: #bce8f1;
                color: #31708f;
            }

            .alert-info hr {
                border-top-color: #a6e1ec;
            }

            .alert-info .alert-link {
                color: #245269;
            }

            .alert-warning {
                background-color: #fcf8e3;
                border-color: #faebcc;
                color: #8a6d3b;
            }

            .alert-warning hr {
                border-top-color: #f7e1b5;
            }

            .alert-warning .alert-link {
                color: #66512c;
            }

            .alert-danger {
                background-color: #f2dede;
                border-color: #ebccd1;
                color: #a94442;
            }

            .alert-danger hr {
                border-top-color: #e4b9c0;
            }

            .alert-danger .alert-link {
                color: #843534;
            }
        </style>

        <script>
            window.setTimeout(function() {
                $(".alert").fadeTo(500, 0).slideUp(500, function() {
                    $(this).remove();
                });
            }, 4000);
        </script>









        <main class="app-py-1" style="height: 100vh;">
            <div class="fade-appear-done fade-enter-done">
                <section class="row center">
                    <div class="col l4 s12 offset-l4">

                        <h4 style="color:white;">
                            Fund Your Account via <br>
                            <?php echo strtoupper($method['method_name']); ?> Transfer
                        </h4>


                        <ul>
                            <li> Transfer <b><span style="color:green;">$<?php echo $deposit['amount'] ?></span></b> to the wallet address below to finalize your deposit.</li>
                            <li>Upload proof of payment(screenshot of payment)</li>

                        </ul>
                        <div class="card-panel">
                            <form method="POST">

                                <div class="row">
                                    <div class="input-field undefined">
                                        <ul class="collection with-header">
                                            <!-- Wallet Address -->
                                            <li class="collection-item">
                                                <div>
                                                    <span id="wallet-text"><?php echo $method['wallet_address']; ?></span>
                                                    <a id="copy-btn" class="secondary-content"><i class="material-icons">content_copy</i></a>
                                                </div>
                                            </li>

                                            <br><br>

                                            <!-- Info -->
                                            <li class="collection-item">
                                                <div>
                                                    <span>
                                                        Or Scan the QR code below to transfer
                                                        <b><?php echo strtoupper($method['method_name']); ?></b>
                                                        to this wallet address
                                                    </span>
                                                </div>
                                            </li>

                                            <!-- QR Code -->
                                            <li class="collection-item" style="background-color:white;">
                                                <div style="margin-left:27%;">
                                                    <div id="qrcode"></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
                                    <script>
                                        // Generate QR Code
                                        new QRCode(document.getElementById("qrcode"), {
                                            text: "<?php echo $method['wallet_address']; ?>",
                                            width: 128,
                                            height: 128,
                                            colorDark: "#5868bf",
                                            colorLight: "#ffffff",
                                            correctLevel: QRCode.CorrectLevel.H
                                        });

                                        // Copy Wallet Address
                                        document.querySelector('#copy-btn').addEventListener('click', () => {
                                            var text = document.querySelector('#wallet-text').innerText;
                                            window.navigator.clipboard.writeText(text).then(() => {
                                                alert('Copied <?php echo strtoupper($method['method_name']); ?> wallet address: ' + text);
                                            });
                                        });
                                    </script>






                                    <div>
                                        <button type="submit" name="update_deposit" class="newbtn">Deposit</button>
                                    </div>
                            </form>

                        </div>
                        <style>
                            .plugin-setting-list li {
                                position: relative;
                                padding-left: 30px;
                                font-size: 16px;
                                color: #000000;
                                list-style-type: none;
                                margin-bottom: 15px;
                            }

                            .plugin-setting-list li:before {
                                content: "";
                                position: absolute;
                                left: 0;
                                width: 20px;
                                height: 20px;
                                background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-check' width='24' height='24' viewBox='0 0 24 24' stroke-width='2' stroke='%23ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath stroke='none' d='M0 0h24v24H0z' fill='none'%3E%3C/path%3E%3Cpath d='M5 12l5 5l10 -10'%3E%3C/path%3E%3C/svg%3E");
                                background-size: 14px;
                                background-repeat: no-repeat;
                                background-position: center center;
                                background-color: #3cb371;
                                border-radius: 100%;
                            }

                            /* Plugin Style Start */
                            .kwt-file {
                                max-width: 380px;
                                margin: 0 auto;
                            }

                            .kwt-file__drop-area {
                                position: relative;
                                display: flex;
                                align-items: center;
                                width: 100%;
                                padding: 25px;
                                background-color: #ffffff;
                                border-radius: 12px;
                                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.07);
                                transition: 0.3s;
                            }

                            .kwt-file__drop-area.is-active {
                                background-color: #d1def0;
                            }

                            .kwt-file__choose-file {
                                flex-shrink: 0;
                                background-color: #1d3557;
                                border-radius: 100%;
                                margin-right: 10px;
                                color: #ffffff;
                                width: 48px;
                                height: 48px;
                                display: flex;
                                align-items: center;
                                justify-content: center;
                            }

                            .kwt-file__choose-file.kwt-file_btn-text {
                                border-radius: 4px;
                                width: auto;
                                height: auto;
                                padding: 10px 20px;
                                font-size: 14px;
                            }

                            .kwt-file__choose-file svg {
                                width: 24px;
                                height: 24px;
                                display: block;
                            }

                            .kwt-file__msg {
                                color: #1d3557;
                                font-size: 16px;
                                font-weight: 400;
                                line-height: 1.4;
                                white-space: nowrap;
                                overflow: hidden;
                                text-overflow: ellipsis;
                            }

                            .kwt-file__input {
                                position: absolute;
                                left: 0;
                                top: 0;
                                height: 100%;
                                width: 100%;
                                cursor: pointer;
                                opacity: 0;
                            }

                            .kwt-file__input:focus {
                                outline: none;
                            }

                            .kwt-file__delete {
                                display: none;
                                position: absolute;
                                right: 10px;
                                width: 18px;
                                height: 18px;
                                cursor: pointer;
                            }

                            .kwt-file__delete:before {
                                content: "";
                                position: absolute;
                                left: 0;
                                transition: 0.3s;
                                top: 0;
                                z-index: 1;
                                width: 100%;
                                height: 100%;
                                background-size: cover;
                                background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg fill='%231d3557' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 438.5 438.5'%3e%3cpath d='M417.7 75.7A8.9 8.9 0 00411 73H323l-20-47.7c-2.8-7-8-13-15.4-18S272.5 0 264.9 0h-91.3C166 0 158.5 2.5 151 7.4c-7.4 5-12.5 11-15.4 18l-20 47.7H27.4a9 9 0 00-6.6 2.6 9 9 0 00-2.5 6.5v18.3c0 2.7.8 4.8 2.5 6.6a8.9 8.9 0 006.6 2.5h27.4v271.8c0 15.8 4.5 29.3 13.4 40.4a40.2 40.2 0 0032.3 16.7H338c12.6 0 23.4-5.7 32.3-17.2a64.8 64.8 0 0013.4-41V109.6h27.4c2.7 0 4.9-.8 6.6-2.5a8.9 8.9 0 002.6-6.6V82.2a9 9 0 00-2.6-6.5zm-248.4-36a8 8 0 014.9-3.2h90.5a8 8 0 014.8 3.2L283.2 73H155.3l14-33.4zm177.9 340.6a32.4 32.4 0 01-6.2 19.3c-1.4 1.6-2.4 2.4-3 2.4H100.5c-.6 0-1.6-.8-3-2.4a32.5 32.5 0 01-6.1-19.3V109.6h255.8v270.7z'/%3e%3cpath d='M137 347.2h18.3c2.7 0 4.9-.9 6.6-2.6a9 9 0 002.5-6.6V173.6a9 9 0 00-2.5-6.6 8.9 8.9 0 00-6.6-2.6H137c-2.6 0-4.8.9-6.5 2.6a8.9 8.9 0 00-2.6 6.6V338c0 2.7.9 4.9 2.6 6.6a8.9 8.9 0 006.5 2.6zM210.1 347.2h18.3a8.9 8.9 0 009.1-9.1V173.5c0-2.7-.8-4.9-2.5-6.6a8.9 8.9 0 00-6.6-2.6h-18.3a8.9 8.9 0 00-9.1 9.1V338a8.9 8.9 0 009.1 9.1zM283.2 347.2h18.3c2.7 0 4.8-.9 6.6-2.6a8.9 8.9 0 002.5-6.6V173.6c0-2.7-.8-4.9-2.5-6.6a8.9 8.9 0 00-6.6-2.6h-18.3a9 9 0 00-6.6 2.6 8.9 8.9 0 00-2.5 6.6V338a9 9 0 002.5 6.6 9 9 0 006.6 2.6z'/%3e%3c/svg%3e");
                            }

                            .kwt-file__delete:after {
                                content: "";
                                position: absolute;
                                opacity: 0;
                                left: 50%;
                                top: 50%;
                                width: 100%;
                                height: 100%;
                                transform: translate(-50%, -50%) scale(0);
                                background-color: #1d3557;
                                border-radius: 50%;
                                transition: 0.3s;
                            }

                            .kwt-file__delete:hover:after {
                                transform: translate(-50%, -50%) scale(2.2);
                                opacity: 0.1;
                            }

                            /* Plugin Style End */
                        </style>

                    </div>
            </div>
            </section>
    </div>
    </main>



    </div>
    <!--include footer script-->








    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems, options);
        });

        // Initialize collapsible (uncomment the lines below if you use the dropdown variation)
        // var collapsibleElem = document.querySelector('.collapsible');
        // var collapsibleInstance = M.Collapsible.init(collapsibleElem, options);

        // Or with jQuery

        $(document).ready(function() {
            $('.sidenav').sidenav();
        });
    </script>


    <script>
        $(document).ready(function() {
            $('.tab').click(function() {
                var tabID = $(this).data('tabid');

                $('.buttons').children().removeClass('current');

                $(this).addClass('current');

                $('.wrapper').children().hide();
                $('.wrapper').find("[data-blockid=" + tabID + "]").show();
            });
        });
    </script>









    <div state="voice" class="placeholder-icon" id="tts-placeholder-icon" title="Click to show TTS button" style="background-image: url(&quot;chrome-extension://cpnomhnclohkhnikegipapofcjihldck/data/content_script/icons/voice.png&quot;);"><canvas width="36" height="36" class="loading-circle" id="text-to-speech-loader" style="display: none;"></canvas></div><iframe id="chat-application-iframe" title="Smartsupp" aria-hidden="true" style="display: block; position: fixed; top: 0px; left: 0px; width: 1px; height: 1px; opacity: 0; border: none; z-index: -1; pointer-events: none;"></iframe>
    <div id="smartsupp-widget-container"><!----><!----><!----> <!----><!----> <!---->
        <div data-testid="widgetButtonFrame" style="border-radius: 9999px; box-shadow: rgba(0, 0, 0, 0.06) 0px 1px 6px, rgba(0, 0, 0, 0.12) 0px 2px 32px; color-scheme: normal; height: 56px; position: fixed; bottom: 24px; left: initial; right: 12px; z-index: 10000000; width: 56px;"><iframe allowfullscreen="" scrolling="no" id="widgetButtonFrame" title="Smartsupp widget button" style="position: absolute; width: 100%; height: 100%; border: none; display: block; text-align: left; margin: 0px; padding: 0px; top: 0px; left: 0px; opacity: 1;"></iframe><!----></div><!----> <!----><!----> <!----><!----><!---->
    </div>
</body>

</html>