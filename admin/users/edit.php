<?php  include("../../server/connection.php") ?>
<?php  include("../../server/auth/admin.php") ?>
<!doctype html>
<html lang="en">


<!-- Mirrored from themesdesign.in/upcube/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Apr 2025 19:11:57 GMT -->

<head>

    <meta charset="utf-8" />
    <title>Dashboard | Upcube - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets/images/favicon.ico">

    <!-- jquery.vectormap css -->
    <link href="../assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet"
        type="text/css" />

    <!-- DataTables -->
    <link href="../assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="../assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />

    <!-- Bootstrap Css -->
    <link href="../assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="../assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body data-topbar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">


        <?php include("../includes/nav.php") ?>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <!-- User details -->
                <div class="user-profile text-center mt-3">
                    <div class="">
                        <img src="../assets/images/normal.jpg" alt="" class="avatar-md rounded-circle">
                    </div>
                    <div class="mt-3">
                        <h4 class="font-size-16 mb-1"><?php  echo $username  ?></h4>
                        <span class="text-muted"><i
                                class="ri-record-circle-line align-middle font-size-14 text-success"></i> Online</span>
                    </div>
                </div>

                <!--- Sidemenu -->
                <?php include("../includes/sidebar.php") ?>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4>Edit User</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">dashboard</a></li>
                                        <li class="breadcrumb-item active">users</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="card">


                        <?php 

                                if (isset($_GET['id'])) {
                                    $id = $_GET['id'];
                                    $query = "SELECT * FROM users WHERE id='$id' LIMIT 1";
                                    $query_run = mysqli_query($connection, $query);

                                    if (mysqli_num_rows($query_run) > 0) {
                                        $user = mysqli_fetch_array($query_run);
                                        $trading_balance = $user['trading_balance'];
                                        $bitcoin_balance = $user['bitcoin_balance'];
                                        $ethereum_balance = $user['ethereum_balance'];
                                        $dogecoin_balance = $user['dogecoin_balance'];
                                        $binance_coin_balance = $user['binance_coin_balance'];
                                        $cosmos_atom_balance = $user['cosmos_atom_balance'];
                                        $stablecoin_balance = $user['stablecoin_balance'];
                                        $usdt_balance = $user['usdt_balance'];
                                        $solana_balance = $user['solana_balance'];
                                        $cardano_ada_balance = $user['cardano_ada_balance'];

                                    } else {

                                        echo "<h4>No Such Id Found</h4>";
                                    }

                                }else{


                                    echo "<script> window.location.href='index.php'; </script>";
                                }
                        ?>



                        <form action="" method="post">
                            <div class="card-body">

                                <div class="row mb-3">
                                    <label for="trading_balance" class="col-sm-2 col-form-label">trading_balance</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="number" name="trading_balance" id="trading_balance"
                                            value="<?php echo $user['trading_balance']; ?>">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="bitcoin_balance" class="col-sm-2 col-form-label">bitcoin_balance</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="number" name="bitcoin_balance" id="bitcoin_balance"
                                            value="<?php echo $user['bitcoin_balance']; ?>">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="ethereum_balance" class="col-sm-2 col-form-label">ethereum_balance</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="number" name="ethereum_balance" id="ethereum_balance"
                                            value="<?php echo $user['ethereum_balance']; ?>">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="dogecoin_balance" class="col-sm-2 col-form-label">dogecoin_balance</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="number" name="dogecoin_balance" id="dogecoin_balance"
                                            value="<?php echo $user['dogecoin_balance']; ?>">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="binance_coin_balance" class="col-sm-2 col-form-label">binance_coin_balance</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="number" name="binance_coin_balance" id="binance_coin_balance"
                                            value="<?php echo $user['binance_coin_balance']; ?>">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="cosmos_atom_balance" class="col-sm-2 col-form-label">cosmos_atom_balance</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="number" name="cosmos_atom_balance" id="cosmos_atom_balance"
                                            value="<?php echo $user['cosmos_atom_balance']; ?>">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="stablecoin_balance" class="col-sm-2 col-form-label">stablecoin_balance</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="number" name="stablecoin_balance" id="stablecoin_balance"
                                            value="<?php echo $user['stablecoin_balance']; ?>">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="usdt_balance" class="col-sm-2 col-form-label">usdt_balance</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="number" name="usdt_balance" id="usdt_balance"
                                            value="<?php echo $user['usdt_balance']; ?>">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="solana_balance" class="col-sm-2 col-form-label">solana_balance</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="number" name="solana_balance" id="solana_balance"
                                            value="<?php echo $user['solana_balance']; ?>">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="cardano_ada_balance" class="col-sm-2 col-form-label">cardano_ada_balance</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="number" name="cardano_ada_balance" id="cardano_ada_balance"
                                            value="<?php echo $user['cardano_ada_balance']; ?>">
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary btn-block mb-4" name="edit">Update User</button>
                            </div>
                        </form>

                        <?php
                                if (isset($_POST['edit'])) {
                                    
                                    $trading_balance = $_POST['trading_balance'];
                                    $bitcoin_balance = $_POST['bitcoin_balance'];
                                    $ethereum_balance = $_POST['ethereum_balance'];
                                    $dogecoin_balance = $_POST['dogecoin_balance'];
                                    $binance_coin_balance = $_POST['binance_coin_balance'];
                                    $cosmos_atom_balance = $_POST['cosmos_atom_balance'];
                                    $stablecoin_balance = $_POST['stablecoin_balance'];
                                    $usdt_balance = $_POST['usdt_balance'];
                                    $solana_balance = $_POST['solana_balance'];
                                    $cardano_ada_balance = $_POST['cardano_ada_balance'];

                                    $query = "UPDATE users SET trading_balance='$trading_balance', bitcoin_balance='$bitcoin_balance', ethereum_balance='$ethereum_balance', dogecoin_balance='$dogecoin_balance', binance_coin_balance='$binance_coin_balance', cosmos_atom_balance='$cosmos_atom_balance', stablecoin_balance='$stablecoin_balance', usdt_balance='$usdt_balance', solana_balance='$solana_balance', cardano_ada_balance='$cardano_ada_balance' WHERE id='$id' ";
                                    $query_run = mysqli_query($connection, $query);

                                    if ($query_run) {
                                        echo "<script>
                                                Swal.fire({
                                                    icon: 'success',
                                                    title: 'User Updated Successfully',
                                                    showConfirmButton: true,
                                                    timer: 2000
                                                }).then(() => {
                                                    window.location.href = 'index.php';
                                                });
                                              </script>";
                                    } else {
                                        echo "<script>
                                                Swal.fire({
                                                    icon: 'error',
                                                    title: 'Something Went Wrong',
                                                    showConfirmButton: false,
                                                    timer: 1500
                                                });
                                              </script>";
                                    }
                                }
                        ?>

                    </div>





                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                            document.write(new Date().getFullYear())
                            </script> © Upcube.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

        </div>
        <!-- End Page-content -->

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>
                        document.write(new Date().getFullYear())
                        </script> © Upcube.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>
    <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!-- JAVASCRIPT -->
    <script src="../assets/libs/jquery/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="../assets/libs/simplebar/simplebar.min.js"></script>
    <script src="../assets/libs/node-waves/waves.min.js"></script>

    <!-- Required datatable js -->
    <script src="../assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="../assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="../assets/libs/jszip/jszip.min.js"></script>
    <script src="../assets/libs/pdfmake/build/pdfmake.min.js"></script>
    <script src="../assets/libs/pdfmake/build/vfs_fonts.js"></script>
    <script src="../assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

    <script src="../assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../assets/libs/datatables.net-select/js/dataTables.select.min.js"></script>

    <!-- Responsive examples -->
    <script src="../assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

    <!-- Datatable init js -->
    <script src="../assets/js/pages/datatables.init.js"></script>

    <script src="../assets/js/app.js"></script>
</body>


<!-- Mirrored from themesdesign.in/upcube/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Apr 2025 19:15:04 GMT -->

</html>