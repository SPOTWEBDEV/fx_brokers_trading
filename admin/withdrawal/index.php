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
                                <h4>Pending withdrawals</h4>

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

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">


                                    <p class="card-title-desc">
                                    </p>

                                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>

                                                <th>S/N:</th>
                                                <th>Full-Name:</th>
                                                <th>Amount:</th>
                                                <th>Payment-Method:</th>
                                                <th>From:</th>
                                                <th>Date:</th>
                                                <th>status:</th>
                                                <th>#</th>
                                                <th>#</th>
                                                


                                            </tr>
                                        </thead>


                                        <tbody>

                                            <?php

                                            $query = "SELECT withdrawals.* , users.firstname, users.lastname FROM withdrawals JOIN users ON withdrawals.user_id = users.id WHERE withdrawals.status = 'pending' ORDER BY withdrawals.created_at DESC";
                                            $select_logs = mysqli_query($connection, $query);
                                            $sn = 1;
                                            while ($row = mysqli_fetch_assoc($select_logs)) {
                                                $id = $row['id'];
                                                $user = $row['user_id'];
                                                $fullname = $row['firstname'] . " " . $row['lastname'];
                                                $amount = $row['amount'];
                                                $method = $row['withdraw_to'];
                                                $from = $row['account_type'];
                                                $date = $row['created_at'];
                                                $status = $row['status'];
                                                echo "<tr>";
                                                echo "<td>$sn</td>";
                                                echo "<td>$fullname</td>";
                                                echo "<td>$amount</td>";
                                                echo "<td>$method</td>";
                                                echo "<td>$from</td>";
                                                echo "<td>$date</td>";
                                                if($status == "suspended"){
                                                    echo "<td style='color: red;'>Suspended</td>";
                                                } else if ($status == "pending") {
                                                    echo "<td style='color: blue;'>Pending</td>";
                                                }else{

                                                    echo "<td style='color: green;'>Active</td>";
                                                }

                                                 
                                                if ($status == "pending") {

                                                    echo "<td><button class='btn btn-success btn-sm'><a style='color: white;' href='index.php?approve=$id&user_id=$user&amount=$amount&account=$from'>Approve</a></button></td>";
                                                    echo "<td><button class='btn btn-danger btn-sm'><a style='color: white;' href='index.php?decline=$id'>Decline</a></button></td>";

                                                }

                                                echo "</tr>";
                                                $sn++;
                                            }



                                                if (isset($_GET['approve'])) {

                                                    $id = $_GET['approve'];
                                                    $amount = $_GET['amount'];
                                                    $account = $_GET['account'];
                                                    $user = $_GET['user_id'];
                                                    
                                                    $statment = mysqli_query($connection,"SELECT *  FROM `users` WHERE `id` = $user");
                                                    $previous_balance  = mysqli_fetch_assoc($statment);
                                                    $to_update = $previous_balance[$account] - $amount;
                                                    $query = mysqli_query($connection, " UPDATE `users` SET $account =  $to_update WHERE `id` = '$user' ");

                                                    
                                                    if ($query){


                                                        $query = "UPDATE withdrawals SET status = 'successful' WHERE id = $id";
                                                        $approve_query = mysqli_query($connection, $query);


                                                            if ($approve_query){

                                                                echo "<script>
                                                                        Swal.fire({
                                                                            icon: 'success',
                                                                            title: 'withdrawals Approved Successfully',
                                                                            showConfirmButton: true,
                                                                            timer: 2000
                                                                        }).then(() => {
                                                                            window.location.href = 'index.php';
                                                                        });
                                                                    </script>";


                                                            }else{


                                                                echo "<script>
                                                                        Swal.fire({
                                                                            icon: 'error',
                                                                            title: ' Approved Failed',
                                                                            showConfirmButton: true,
                                                                            timer: 2000
                                                                        }).then(() => {
                                                                            window.location.href = 'index.php';
                                                                        });
                                                                    </script>";
                                                            }
                                                        

                                                        
                                                    }



                                                }

                                                if (isset($_GET['decline'])) {
                                                    $id = $_GET['decline'];
                                                    $query = "UPDATE withdrawals SET status = 'failed' WHERE id = $id";
                                                    $approve_query = mysqli_query($connection, $query);
                                                    
                                                    if ($approve_query){

                                                                 echo "<script>
                                                                        Swal.fire({
                                                                            icon: 'success',
                                                                            title: 'withdrawals Declined Successfully',
                                                                            showConfirmButton: true,
                                                                            timer: 2000
                                                                        }).then(() => {
                                                                            window.location.href = 'index.php';
                                                                        });
                                                                    </script>";
                                                    }
                                                }

                                            ?>

                                        </tbody> 
                                    </table>

                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->



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