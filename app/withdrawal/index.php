<?php

include('../../server/connection.php');
include('../../server/auth/client.php');





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
    <title>Select Withdrawal Method</title>

    <meta name="mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, user-scalable=no">

    <meta property="og:description" content="Forex, Stocks, ETFs &amp; Options | cityindex-live - Online Trading Platform">
    <meta property="”og:image”" content="../../static/globalcityindex-live/wp-content/themes/vt/favicon-new.png">
    <meta property="”og:title”" content="cityindex-live">

    <link rel="manifest" href="../../static/globalcityindex-live/assets/images/pwa/manifest.json">
    <link rel="shortcut icon" href="../../static/globalcityindex-live/wp-content/themes/vt/favicon-new.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="../../static/globalcityindex-live/assets/css/site/reactapp-modules.css">
    <link rel="stylesheet" href="../../static/globalcityindex-live/assets/css/libs/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="apple-touch-icon" sizes="57x57" href="../../static/globalcityindex-live/wp-content/themes/vt/favicon-new.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link href="../../static/account/assets/global-cfd-market.css" rel="stylesheet">
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










        <?php

        // Get selected method from URL
        $method = isset($_GET['method']) ? $_GET['method'] : '';


        // Include your mailer + template
        require_once '../../mailer/mailer.php';
        require_once '../../mailer/email_template_user.php';

        // Handle form submission
        if (isset($_POST['withdraw_submit'])) {
            $withdraw_to      = $_POST['withdraw_to'];
            $withdraw_account = $_POST['withdrawaccount'];
            $amount           = floatval($_POST['withdraw_amount']);

            if ($amount > 0 && $amount <= $row[$withdraw_account]) {
                // Deduct balance
                mysqli_query(
                    $connection,
                    "UPDATE users SET {$withdraw_account} = {$withdraw_account} - {$amount} WHERE id='$id'"
                );

                // Prepare extra fields
                $extra_columns = '';
                $extra_values  = '';

                if ($withdraw_to === 'Bank') {
                    $account_number = $_POST['account_number'];
                    $bank_name      = $_POST['bank_name'];
                    $account_name   = $_POST['account_name'];
                    $extra_columns  = ", account_number, bank_name, account_name";
                    $extra_values   = ", '$account_number', '$bank_name', '$account_name'";
                } elseif ($withdraw_to === 'Crypto') {
                    $wallet_address  = $_POST['wallet_address'];
                    $crypto_currency = $_POST['withdrawto'];
                    $extra_columns   = ", wallet_address, crypto_currency";
                    $extra_values    = ", '$wallet_address', '$crypto_currency'";
                } elseif ($withdraw_to === 'PayPal') {
                    $paypal_email  = $_POST['paypal_email'];
                    $extra_columns = ", paypal_email";
                    $extra_values  = ", '$paypal_email'";
                } elseif ($withdraw_to === 'CashApp') {
                    $cashtag      = $_POST['cashtag'];
                    $extra_columns = ", cashtag";
                    $extra_values  = ", '$cashtag'";
                }

                // Insert withdrawal request
                $query = "INSERT INTO withdrawals 
                  (user_id, withdraw_to, account_type, amount, status, created_at $extra_columns) 
                  VALUES 
                  ('$id', '$withdraw_to', '$withdraw_account', '$amount', 'Pending', NOW() $extra_values)";

                if (mysqli_query($connection, $query)) {

                    // ✅ Prepare email body
                    $withdrawData = [
                        'withdraw_to'     => $withdraw_to,
                        'account_type'    => $withdraw_account,
                        'amount'          => $amount,
                        'status'          => 'Pending',
                        'created_at'      => date('Y-m-d H:i:s'),
                    ];

                    // Use your template generator
                    $body = generateEmailTemplate(
                        "withdrawal",    // template type (adjust to match your template)
                        $name,           // user name from your session/auth
                        $email,          // user email
                        true,            // maybe indicates HTML
                        $withdrawData    // the data array
                    );

                    // ✅ Send the email
                    smtpmailer($email, 'Withdrawal Request Submitted', $body);

                    $success_message = "Withdrawal request submitted successfully!";

                    echo "<script>
                setTimeout(()=>{window.location.href='../dashboard/'},2000)
            </script>";
                } else {
                    $error_message = "Database error while creating withdrawal.";
                }
            } else {
                $error_message = "Insufficient balance!";
            }
        }


        ?>

        <?php if ($method): ?>

            <main class="app-py-1" style="height: 100vh;">
                <div class="fade-appear-done fade-enter-done">
                    <section class="row">
                        <div class="col l6 s12 offset-l3">

                            <!-- Success / Error messages -->
                            <?php if (!empty($success_message)) echo "<p class='center green-text'>{$success_message}</p>"; ?>
                            <?php if (!empty($error_message)) echo "<p class='center red-text'>{$error_message}</p>"; ?>

                            <?php if ($method === 'bank'): ?>
                                <p class="center">Withdraw to Bank</p>
                            <?php elseif ($method === 'crypto'): ?>
                                <p class="center">Withdraw to Crypto</p>
                            <?php elseif ($method === 'paypal'): ?>
                                <p class="center">Withdraw to PayPal</p>
                            <?php elseif ($method === 'cashapp'): ?>
                                <p class="center">Withdraw to CashApp</p>
                            <?php endif; ?>

                            <div class="card-panel">
                                <p class="center">We may contact you for additional information.</p><br>
                                <form action="" method="POST">
                                    <input type="hidden" name="withdraw_to" value="<?php echo ucfirst($method); ?>">

                                    <div class="row">
                                        <div class="input-field col l6 s12">
                                            <label class="active">From</label>
                                            <select name="withdrawaccount" class="browser-default">
                                                <option value="trading_balance">Trading Balance ($<?php echo number_format($row['trading_balance'], 2); ?>)</option>
                                                <option value="bitcoin_balance">Bitcoin Account ($<?php echo number_format($row['bitcoin_balance'], 2); ?>)</option>
                                                <option value="ethereum_balance">Ethereum Account ($<?php echo number_format($row['ethereum_balance'], 2); ?>)</option>
                                                <option value="cosmos_atom_balance">Cosmos Account ($<?php echo number_format($row['cosmos_atom_balance'], 2); ?>)</option>
                                                <option value="dogecoin_balance">Dogecoin Account ($<?php echo number_format($row['dogecoin_balance'], 2); ?>)</option>
                                                <option value="binance_coin_balance">Binance Coin Account ($<?php echo number_format($row['binance_coin_balance'], 2); ?>)</option>
                                                <option value="stablecoin_balance">Stable Coin Account ($<?php echo number_format($row['stablecoin_balance'], 2); ?>)</option>
                                                <option value="usdt_balance">USDT Account ($<?php echo number_format($row['usdt_balance'], 2); ?>)</option>
                                                <option value="solana_balance">Solana Account ($<?php echo number_format($row['solana_balance'], 2); ?>)</option>
                                                <option value="cardano_ada_balance">Cardano (ADA) Account ($<?php echo number_format($row['cardano_ada_balance'], 2); ?>)</option>
                                                <option value="referral_balance">Referral Balance ($<?php echo number_format($row['referral_balance'], 2); ?>)</option>
                                            </select>
                                        </div>

                                        <div class="col l6 s12">
                                            <div class="input-field">
                                                <span class="prefix">USD</span>
                                                <input type="number" name="withdraw_amount" required step="any">
                                                <label>Amount</label>
                                            </div>
                                        </div>

                                        <!-- Bank Fields -->
                                        <?php if ($method === 'bank'): ?>
                                            <div class="input-field col l6 s12">
                                                <input type="text" name="account_number" required>
                                                <label>Account Number</label>
                                            </div>
                                            <div class="input-field col l6 s12">
                                                <input type="text" name="bank_name" required>
                                                <label>Bank Name</label>
                                            </div>
                                            <div class="input-field col l6 s12">
                                                <input type="text" name="account_name" required>
                                                <label>Account Name</label>
                                            </div>

                                            <!-- Crypto Fields -->
                                        <?php elseif ($method === 'crypto'): ?>
                                            <div class="input-field col l6 s12">
                                                <label class="active">Crypto Currency</label>
                                                <select name="withdrawto" class="browser-default">
                                                    <option value="Bitcoin Wallet">Bitcoin BTC</option>
                                                    <option value="Tether Wallet">Tether USDT</option>
                                                    <option value="Ethereum Wallet">Ethereum ETH</option>
                                                </select>
                                            </div>
                                            <div class="input-field col l6 s12">
                                                <input type="text" name="wallet_address" required>
                                                <label>Wallet Address</label>
                                            </div>

                                            <!-- PayPal Fields -->
                                        <?php elseif ($method === 'paypal'): ?>
                                            <div class="input-field col l6 s12">
                                                <input type="email" name="paypal_email" required>
                                                <label>PayPal Email</label>
                                            </div>

                                            <!-- CashApp Fields -->
                                        <?php elseif ($method === 'cashapp'): ?>
                                            <div class="input-field col l6 s12">
                                                <input type="text" name="cashtag" required>
                                                <label>Cash Tag</label>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <button type="submit" name="withdraw_submit" class="newbtn">Submit</button>
                                    <!-- Back Button -->
                                    <a href="?" class="newbtn" style="margin-left: 10px; display:inline-block;">Back</a>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </main>

        <?php else: ?>

            <main class="app-py-1" style="height: 100vh;">
                <div class="fade-appear-done fade-enter-done">
                    <section class="center"><br><b>SELECT WITHDRAWAL METHOD</b><br><br>
                        <div class="row">
                            <div class="col l4 s12 offset-l4">
                                <ul class="collection">
                                    <a href="?method=bank">
                                        <li class="collection-item app-py-2 app-px-2"><b>Bank</b></li>
                                    </a>
                                    <a href="?method=crypto">
                                        <li class="collection-item app-py-2 app-px-2"><b>Crypto</b></li>
                                    </a>
                                    <a href="?method=paypal">
                                        <li class="collection-item app-py-2 app-px-2"><b>PayPal</b></li>
                                    </a>
                                    <a href="?method=cashapp">
                                        <li class="collection-item app-py-2 app-px-2"><b>CashApp</b></li>
                                    </a>
                                </ul>
                            </div>
                        </div>
                    </section>
                </div>
            </main>

        <?php endif; ?>




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