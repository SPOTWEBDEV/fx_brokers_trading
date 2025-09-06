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
                                <h4 class="mb-sm-0">Dashboard</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Upcube</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <?php

                                                $sql = mysqli_query($connection,"SELECT * FROM deposit WHERE status = 'Pending'");
                                                $count = mysqli_num_rows($sql);

                                            ?>

                                            <p class="text-truncate font-size-14 mb-2">Pending Deposit</p>
                                            <h4 class="mb-2"><?php echo $count ?></h4>
                                            <p class="text-muted mb-0">
                                                <span class="text-success fw-bold font-size-12 me-2">
                                                    <i class="ri-arrow-right-up-line me-1 align-middle"></i>
                                                    9.23%
                                                </span>
                                                
                                            </p>
                                        </div>
                                        <div class="avatar-sm">
                                            <span class="avatar-title bg-light text-primary rounded-3">
                                                <!-- <i class="ri-shopping-cart-2-line font-size-24"></i> -->
                                                <i class="dripicons-wallet font-size-24" ></i>
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end cardbody -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">

                                            <?php

                                                $sql = mysqli_query($connection,"SELECT * FROM withdrawal WHERE status = 'Pending'");
                                                $count = mysqli_num_rows($sql);

                                            ?>

                                            <p class="text-truncate font-size-14 mb-2">Pending Withdrawal</p>
                                            <h4 class="mb-2"><?php echo $count ?></h4>
                                            <p class="text-muted mb-0"><span
                                                    class="text-danger fw-bold font-size-12 me-2"><i
                                                        class="ri-arrow-right-down-line me-1 align-middle"></i>1.09%</span></p>
                                        </div>
                                        <div class="avatar-sm">
                                            <span class="avatar-title bg-light text-success rounded-3">
                                                <i class="mdi mdi-currency-usd font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end cardbody -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-body">

                                    
                                            <?php

                                                $sql = mysqli_query($connection,"SELECT * FROM users ");
                                                $count = mysqli_num_rows($sql);

                                            ?>

                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <p class="text-truncate font-size-14 mb-2">Total Users</p>
                                            <h4 class="mb-2"><?php echo $count ?></h4>
                                            <p class="text-muted mb-0"><span
                                                    class="text-success fw-bold font-size-12 me-2"><i
                                                        class="ri-arrow-right-up-line me-1 align-middle"></i>16.2%</span></p>
                                        </div>
                                        <div class="avatar-sm">
                                            <span class="avatar-title bg-light text-primary rounded-3">
                                                <i class="ri-user-3-line font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end cardbody -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                            <?php

                                                $sql = mysqli_query($connection,"SELECT * FROM users WHERE status = 'Pending'");
                                                $count = mysqli_num_rows($sql);

                                            ?>




                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <p class="text-truncate font-size-14 mb-2">Pending  Users Approval </p>
                                            <h4 class="mb-2"><?php echo $count ?></h4>
                                            <p class="text-muted mb-0"><span
                                                    class="text-success fw-bold font-size-12 me-2"><i
                                                        class="ri-arrow-right-up-line me-1 align-middle"></i>11.7%</span></p>
                                        </div>
                                        <div class="avatar-sm">
                                            <span class="avatar-title bg-light text-success rounded-3">
                                                <i class="ri-user-3-line font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end cardbody -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                    </div>

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4>Activity Logs</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                        <li class="breadcrumb-item active">Data Tables</li>
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

                                                <th>S/N</th>
                                                <th>Activity Type</th>
                                                <th>Referance IP</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            <!-- <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                            </tr> -->

                                            <?php

                                            $query = "SELECT * FROM adminactivity ORDER BY id DESC";
                                            $select_logs = mysqli_query($connection, $query);
                                            $sn = 1;
                                            while ($row = mysqli_fetch_assoc($select_logs)) {
                                                $id = $row['id'];
                                                $activity_type = $row['name'];
                                                $referance_ip = $row['ref_id'];
                                                $date = $row['date'];
                                                $time = $row['time'];
                                                $status = $row['status'];
                                                echo "<tr>";
                                                echo "<td>$sn</td>";
                                                echo "<td>$activity_type</td>";
                                                echo "<td>$referance_ip</td>";
                                                echo "<td>$date</td>";
                                                echo "<td>$time</td>";
                                                if($status == "Failed"){
                                                    echo "<td style='color: red;'>$status</td>";
                                                } else {
                                                    echo "<td style='color: green;'>$status</td>";
                                                }
                                                echo "</tr>";
                                                $sn++;
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