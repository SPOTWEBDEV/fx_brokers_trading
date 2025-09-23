<?php
include('../../server/connection.php');
include('../../server/auth/client.php');
include('../../utils/uuid.php');



if (isset($_POST['verification_btn'])) {



    $uuid = generate_uuid_v4();

    // File upload handling
    $uploadDir = "../../uploads/verifications/"; // make sure this folder exists & writable
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $front = $_FILES['id_front_image'];
    $back = $_FILES['id_back_image'];

    $allowed_types = ['image/jpeg', 'image/png', 'image/jpg'];

    if (!in_array($front['type'], $allowed_types) || !in_array($back['type'], $allowed_types)) {
        die("❌ Only JPG and PNG files are allowed.");
    }

    $front_name = uniqid("front_") . "." . pathinfo($front['name'], PATHINFO_EXTENSION);
    $back_name  = uniqid("back_") . "." . pathinfo($back['name'], PATHINFO_EXTENSION);

    $front_path = $uploadDir . $front_name;
    $back_path  = $uploadDir . $back_name;

    // Move files
    if (!move_uploaded_file($front['tmp_name'], $front_path)) {
        die("❌ Error uploading front image.");
    }
    if (!move_uploaded_file($back['tmp_name'], $back_path)) {
        die("❌ Error uploading back image.");
    }

    // Save record in DB
    $query = "INSERT INTO verification (uuid, user_id, front_image, back_image) VALUES (?, ?, ?, ?)";
    $stmt = $connection->prepare($query);
    $stmt->bind_param("siss", $uuid, $id, $front_name, $back_name);

    if ($stmt->execute()) {
        echo "✅ Verification submitted successfully!";
        echo "<script>setTimeout(function(){ location.href = '../dashboard/'; }, 2000);</script>";
    } else {
        echo "❌ DB Error: " . $stmt->error;
    }

    $stmt->close();
    $connection->close();
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
    <title>Verifications</title>


    <!--Include Header snippet-->






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









        <div style="min-height: 100vh;"><br><br>
            <div class="row">
                <div class="col l4 s12 offset-l4">
                    <div class="card-panel">
                        <h3 class="btn-color center">Verify Your Identity</h3>
                        <p style="text-align: justify;">Please verify your identity by uploading a valid government issued identification card. You may experience difficulties when uploading from an ios device. Make sure your browser has camera access in your ios settings.</p>
                        <center><br>
                            <form method="POST" enctype="multipart/form-data">

                                <div>
                                    <div class="file-field input-field">
                                        <div class="btn btn-secondary"><span>select front</span>

                                            <input type="file" name="id_front_image" accept=".jpg,.png,.jpeg" required="" id="front">

                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="file-field input-field">
                                        <div class="btn btn-secondary"><span>select back</span>


                                            <input type="file" name="id_back_image" accept=".jpg,.png,.jpeg" required="" id="back">

                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <button type="submit" name="verification_btn" class="newbtn">Upload</button>
                                </div>
                            </form><br>
                        </center>
                    </div><br><br>
                </div>
            </div>
        </div>
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




    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>



    <div state="voice" class="placeholder-icon" id="tts-placeholder-icon" title="Click to show TTS button" style="background-image: url(&quot;chrome-extension://cpnomhnclohkhnikegipapofcjihldck/data/content_script/icons/voice.png&quot;);"><canvas width="36" height="36" class="loading-circle" id="text-to-speech-loader" style="display: none;"></canvas></div><iframe id="chat-application-iframe" title="Smartsupp" aria-hidden="true" style="display: block; position: fixed; top: 0px; left: 0px; width: 1px; height: 1px; opacity: 0; border: none; z-index: -1; pointer-events: none;"></iframe>
    <div id="smartsupp-widget-container"><!----><!----><!----> <!----><!----> <!---->
        <div data-testid="widgetButtonFrame" style="border-radius: 9999px; box-shadow: rgba(0, 0, 0, 0.06) 0px 1px 6px, rgba(0, 0, 0, 0.12) 0px 2px 32px; color-scheme: normal; height: 56px; position: fixed; bottom: 24px; left: initial; right: 12px; z-index: 10000000; width: 56px;"><iframe allowfullscreen="" scrolling="no" id="widgetButtonFrame" title="Smartsupp widget button" style="position: absolute; width: 100%; height: 100%; border: none; display: block; text-align: left; margin: 0px; padding: 0px; top: 0px; left: 0px; opacity: 1;"></iframe><!----></div><!----> <!----><!----> <!----><!----><!---->
    </div>
</body>

</html>