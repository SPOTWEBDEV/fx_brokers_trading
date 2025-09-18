<?php include('../server/connection.php')  ?>
<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesdesign.in/upcube/layouts/auth-login.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Apr 2025 19:19:24 GMT -->
<head>
        
        <meta charset="utf-8" />
        <title>Login | Upcube - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

        <!-- SweetAlert2 CDN -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



    </head>

    <body class="auth-body-bg">
        <div class="bg-overlay"></div>
        <div class="wrapper-page">
            <div class="container-fluid p-0">
                <div class="card">
                    <div class="card-body">

                        <div class="text-center mt-4">
                            <div class="mb-3">
                                <a href="" class="auth-logo">
                                    <img src="assets/images/logo-dark.png" height="30" class="logo-dark mx-auto" alt="">
                                    <img src="assets/images/logo-light.png" height="30" class="logo-light mx-auto" alt="">
                                </a>
                            </div>
                        </div>
    
                        <h4 class="text-muted text-center font-size-18"><b>Sign In</b></h4>
    
                        <div class="p-3">
                            <form class="form-horizontal mt-3" id="form" method="POST">
    
                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control" type="email" required="" name="email" placeholder="Email">
                                    </div>
                                </div>
    
                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control" type="password" required="" name="password" placeholder="Password">
                                    </div>
                                </div>
    
                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="form-label ms-1" for="customCheck1">Remember me</label>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="form-group mb-3 text-center row mt-3 pt-1">
                                    <div class="col-12">
                                        <button class="btn btn-info w-100 waves-effect waves-light" type="submit">Log In</button>
                                    </div>
                                </div>
    
                                <div class="form-group mb-0 row mt-2">
                                    <div class="col-sm-7 mt-3">
                                        <a href="" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                                    </div>
                                    <div class="col-sm-5 mt-3">
                                        <a href="" class="text-muted"><i class="mdi mdi-account-circle"></i> Create an account</a>
                                    </div>
                                </div>
                            </form>

                             <script>
                                    


                                    let form = document.getElementById('form');
                                    form.addEventListener('submit', (event) => {
                                        event.preventDefault();
                                        let formData = new FormData(form);

                                        fetch('<?php echo $domain; ?>server/api/admin/login.php', {
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
                                                        
                                                    location.href = '<?php echo $domain; ?>admin/dashboard/';
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
                        </div>
                        <!-- end -->
                    </div>
                    <!-- end cardbody -->
                </div>
                <!-- end card -->
            </div>
            <!-- end container -->
        </div>
        <!-- end -->

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <script src="assets/js/app.js"></script>

    </body>

<!-- Mirrored from themesdesign.in/upcube/layouts/auth-login.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Apr 2025 19:19:24 GMT -->
</html>
