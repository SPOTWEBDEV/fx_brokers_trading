<?php

include('../../server/connection.php');
include('../../server/auth/client.php');


$error = ""; // default no error

if (isset($_SESSION['user_id'])) {
    $id = $_SESSION['user_id'];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $old_password = mysqli_real_escape_string($connection, $_POST['old_password']);
        $new_password1 = mysqli_real_escape_string($connection, $_POST['new_password1']);
        $new_password2 = mysqli_real_escape_string($connection, $_POST['new_password2']);

        if ($new_password1 !== $new_password2) {
            $error = "New passwords do not match!";
        } else {
            $query = mysqli_query($connection, "SELECT `password` FROM `users` WHERE `id` = '$id'");
            $row = mysqli_fetch_assoc($query);

            if ($row && password_verify($old_password, $row['password'])) {
                $hashed_password = password_hash($new_password1, PASSWORD_DEFAULT);
                $update = mysqli_query($connection, "UPDATE `users` SET `password`='$hashed_password' WHERE `id`='$id'");

                if ($update) {
                    echo "<script>alert('Password updated successfully!'); window.location.href='../dashboard';</script>";
                    exit;
                } else {
                    $error = "Error updating password. Try again!";
                }
            } else {
                $error = "Your old password was entered incorrectly. Please enter it again.";
            }
        }
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
    <title>Update Password</title>
    <!--Include Header snippet-->






    <meta name="mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, user-scalable=no">

    <meta property="og:description" content="Forex, Stocks, ETFs &amp; Options | FPMarkets - Online Trading Platform">
    <meta property="”og:image”" content="../../static/globalfpmarkets/wp-content/themes/vt/favicon-new.png">
    <meta property="”og:title”" content="FPMarkets">

    <link rel="manifest" href="../../static/globalfpmarkets/assets/images/pwa/manifest.json">
    <link rel="shortcut icon" href="../../static/globalfpmarkets/wp-content/themes/vt/favicon-new.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="../../static/globalfpmarkets/assets/css/site/reactapp-modules.css">
    <link rel="stylesheet" href="../../static/globalfpmarkets/assets/css/libs/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="apple-touch-icon" sizes="57x57" href="../../static/globalfpmarkets/wp-content/themes/vt/favicon-new.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link href="../../static/account/assets/global-cfd-market.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" charset="UTF-8" href="https://www.gstatic.com/_/translate_http/_/ss/k=translate_http.tr.69JJaQ5G5xA.L.W.O/d=0/rs=AN8SPfpC36MIoWPngdVwZ4RUzeJYZaC7rg/m=el_main_css">
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






        <main class="container" style="height: 100vh;">
            <div class="fade-appear-done fade-enter-done">
                <div class="row">
                    <div class="col l6 offset-l3 s12">
                        <div class="card-panel">
                            <center>
                                <form method="post">
                                    <div class="row">
                                        <div class="input-field undefined">
                                            <input type="password" name="old_password" required id="old_password">
                                            <label class="active" for="old_password">Old password</label>
                                        </div>

                                        <div class="input-field undefined">
                                            <input type="password" name="new_password1" required id="new_password1">
                                            <label class="active" for="new_password1">New password</label>
                                        </div>

                                        <div class="input-field undefined">
                                            <input type="password" name="new_password2" required id="new_password2">
                                            <label class="active" for="new_password2">Confirm new password</label>
                                        </div>
                                    </div>

                                    <?php if (!empty($error)): ?>
                                        <div class="input-field undefined" style="color:red; margin-top:10px;">
                                            <p><span class="material-icons notranslate">report_problem</span> <?= $error ?></p>
                                        </div>
                                    <?php endif; ?>

                                    <div><button type="submit" class="newbtn">Update</button></div>
                                </form>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!--include footer navbar snipet-->
    <!--

-->


    <!--<section>
      
    <div class="fixed-footer bgc" style="z-index: 1;">
        <ul class="tabs"><li class="tab col s4">
            <a class="active" href="/user_dashboard/">
                <span class="material-icons notranslate">home</span><span class="hide-on-med-and-down" style="padding-left: 6px;">Home</span></a></li>
                <li class="tab col s4"><a class="" href="/account/"><span class="material-icons notranslate">token</span>
                    <span class="hide-on-med-and-down" style="padding-left: 6px;">Wallet</span></a></li>
   
                        <li class="tab col s4">
                            <a class="" href="/trade/"><span class="material-icons notranslate">browse_gallery</span>
                                <span class="hide-on-med-and-down" style="padding-left: 6px;">Trade</span></a></li>
                                <li class="tab col s4">
                                    <a class="" href="/trades/"><span class="material-icons notranslate">history_edu</span>
                                        <span class="hide-on-med-and-down" style="padding-left: 6px;">Trades</span></a></li>-->
    <!--- <li class="tab col s4"><a class="" href="/user_profile/"><span class="material-icons notranslate">wallet</span>
                                            <span class="hide-on-med-and-down" style="padding-left: 6px;">Profile</span></a></li>-->

    <!--</ul></div></section>-->



    <div state="voice" class="placeholder-icon" id="tts-placeholder-icon" title="Click to show TTS button" style="background-image: url(&quot;chrome-extension://cpnomhnclohkhnikegipapofcjihldck/data/content_script/icons/voice.png&quot;);"><canvas width="36" height="36" class="loading-circle" id="text-to-speech-loader" style="display: none;"></canvas></div>
</body>

</html>