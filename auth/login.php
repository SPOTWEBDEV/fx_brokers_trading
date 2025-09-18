<?php  include("../server/connection.php");  ?>
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />


<meta name="mobile-web-app-capable" content="yes">
<meta name="viewport" content="width=device-width, user-scalable=no">

<meta property="og:description"
    content="cityindex-live is a Financial Organization set up to Provide Source of Passive income for investors on Real Estate Management and Natural Oil & Gas">
<meta property="”og:image”" content="”/static/globalcityindex-live/wp-content/themes/vt/favicon-new.png”">
<meta property="”og:title”" content="cityindex-live">

<link rel="manifest" href="./static/globalcityindex-live/assets/images/pwa/manifest.json">
<link rel="shortcut icon" href="./static/globalcityindex-live/wp-content/themes/vt/favicon-new.png">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- System properties -->

    <meta name="page-name" content="login">
    <meta name="user-id" content="">
    <meta http-equiv="refresh" content="7200">
    <title>Log In | Cityindex-live</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="canonical" href="login.php">
    <link rel="alternate" hreflang="en" href="login.php">

    <meta name="description"
        content="cityindex-live is a Financial Organization set up to Provide Source of Passive income for investors on Real Estate Management and Natural Oil & Gas">
    <meta property="og:title" content="Log In | cityindex-live">
    <meta property="og:url" content="/login">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="cityindex-live">

    <meta property="og:description"
        content="cityindex-live is a Financial Organization set up to Provide Source of Passive income for investors on Real Estate Management and Natural Oil & Gas">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@cityindex-live">
    <meta name="twitter:title" content="Log In | cityindex-live">

    <meta name="twitter:description"
        content="cityindex-live is a Financial Organization set up to Provide Source of Passive income for investors on Real Estate Management and Natural Oil & Gas">
    <!-- State -->
    <script type="text/javascript">


    </script>

    <link rel="icon" type="image/png" sizes="16x16"
        href="./static/globalcityindex-live/wp-content/themes/vt/favicon-new.png">
    <link rel="manifest" href="./static/globalcityindex-live/Content/ico/manifest.json">
    <meta name="facebook-domain-verification" content="yr09tc1ug4r9h5lcpyh59lg5kawf4k" />
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/static/globalcityindex-live/wp-content/themes/vt/favicon-new.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&amp;display=swap" rel="stylesheet">
    <link rel="icon" href="./static/globalcityindex-live/wp-content/themes/vt/favicon-new.png">
        <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Styles -->
    <link rel="stylesheet" href="../static/globalcityindex-live/assets/assets/css/app2d1f.css">
    <link rel="stylesheet" href="../static/globalcityindex-live/assets/assets/sass/app2a6f.css">
</head>

<body>

    <div id="app" data-page-name="login" v-bind:class="{ 'overflow-hidden h-screen': ! $store.state.scroll }">
        <div class="layout-minimal">



            <div class="layout-minimal-inner">
                <div class="title-wrapper">
                    <h2>
                        Login
                    </h2>
                </div>
                <form method="POST"  id="form" class="login-form">
                    <input type="hidden" name="url" id="url">
                    <div class="form-group">
                        <v-label label-for="email">E-mail address</v-label>

                        <input type="email" name="email" maxlength="225" required
                            placeholder="Please enter your email address" value="" name="email" class="custom-input"
                            id="email">

                    </div>

                    <div class="form-group">
                        <v-label label-for="password">Password</v-label>
                        <input type="password" name="password" required placeholder="Please enter your password"
                            value="" name="password" class="custom-input" id="password">

                    </div>

                    <div class="form-group">








                    </div>

                    <div class="checkbox-wrapper">

                        <div class="checkbox-wrapper-inner">
                            <input type="checkbox" class="custom-checkbox" name="remember" id="remember" />
                            <label class="label-checkbox" for="remember">Remember me</label>
                        </div>

                        <a href="password_reset/index.php">
                            Forgotten password
                        </a>
                    </div>

                    <div class="submit-btn-wrapper">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>

                <script>
                    let form = document.getElementById('form');
                    document.getElementById('url').value = window.location.href;
                    form.addEventListener('submit', (event) => {
                        event.preventDefault();
                        let formData = new FormData(form);

                        fetch('<?php echo $domain; ?>server/api/users/login.php', {
                                method: 'POST',
                                body: formData
                            })
                            .then(response => {
                                if (!response.ok) {
                                    throw new Error('Network response was not ok: ' + response.statusText);
                                }
                                return response.json(); // Or .json() if your API sends JSON
                            })
                            .then(data => {

                                console.log(data);
                                if (data.status == 'success') {

                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Login Successful',
                                        text: 'Welcome back!',
                                        width: '300px',
                                        height: '300px'
                                    });

                                    setTimeout(() => {

                                        location.href = '<?php echo $domain; ?>app/dashboard';
                                    }, 3000);

                                }

                                if (data.status == 'error') {

                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Login Failed',
                                        text: data.message,
                                        width: '300px',
                                        height: '300px'

                                    });


                                }


                                
                                if (data.status == 'warn') {

                                    Swal.fire({
                                        icon: 'warning',
                                        title: 'Login Failed',
                                        text: data.message,
                                        width: '300px',
                                        height: '300px'

                                    });


                                }
                            })
                            .catch(error => {
                                console.error('Error:', error);
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Login Failed',
                                    text: "An error occurred while processing your request.",
                                    width: '300px',
                                    height: '300px'
                                });
                            });
                    });
                </script>




                <div class="register-btn-wrapper">
                    <p>
                        No account?
                    </p>
                    <a href="register.php">
                        Register!
                    </a>
                </div>
            </div>
        </div>




    </div>

    <!-- Scripts -->
    <div id="scripts">
        <script src="./static/globalcityindex-live/assets/assets/js/manifestf3c5.js" defer></script>
        <script src="./static/globalcityindex-live/assets/assets/js/vendor313f.js" defer></script>
        <script src="./static/globalcityindex-live/assets/assets/js/appc73e.js" defer></script>
    </div>



</body>

</html>