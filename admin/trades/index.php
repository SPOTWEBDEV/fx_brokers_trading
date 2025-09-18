<?php include("../../server/connection.php") ?>
<?php include("../../server/auth/admin.php") ?>
<?php

require_once '../../mailer/email_template.php';
require_once '../../mailer/mailer.php';

?>
<!doctype html>
<html lang="en">


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
                        <h4 class="font-size-16 mb-1"><?php echo $username  ?></h4>
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
                                                <th>S/N</th>
                                                <th>Full-Name</th>
                                                <th>Email</th>
                                                <th>Order No</th>
                                                <th>Symbol</th>
                                                <th>Order Type</th>
                                                <th>Entry Price</th>
                                                <th>Stop-Loss</th>
                                                <th>Take-Profit</th>
                                                <th>Volume</th>
                                                <th>Leverage</th>
                                                <th>Gain / P&L</th>
                                                <th>Status</th>
                                                <th>Created</th>
                                                <th>Updated</th>
                                                <th>#</th>
                                                <th>#</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            // pull every trading record and the related user info
                                            $sql = "
    SELECT 
        t.*,
        u.firstname,
        u.lastname,
        u.email
    FROM trading AS t
    JOIN users AS u ON t.user_id = u.id
    ORDER BY t.created_at DESC
";

                                            $res = mysqli_query($connection, $sql);
                                            if (!$res) {
                                                die("Database error: " . mysqli_error($connection));
                                            }

                                            $sn = 1;
                                            while ($row = mysqli_fetch_assoc($res)) {
                                                $id        = $row['id'];
                                                $fullname  = $row['firstname'] . ' ' . $row['lastname'];
                                                $email     = $row['email'];
                                                $orderNo   = $row['order_no'];
                                                $symbol    = $row['symbol'];
                                                $orderType = $row['order_type'];
                                                $entry     = $row['entry_price'];
                                                $stopLoss  = $row['stop_loss'];
                                                $takeProfit = $row['take_profit'];
                                                $volume    = $row['volume'];
                                                $leverage  = $row['leverage'];
                                                $gain      = $row['gain'];
                                                $status    = $row['status'];
                                                $created   = $row['created_at'];
                                                $updated   = $row['updated_at'];

                                                echo "<tr>";
                                                echo "<td>{$sn}</td>";
                                                echo "<td>{$fullname}</td>";
                                                echo "<td>{$email}</td>";
                                                echo "<td>{$orderNo}</td>";
                                                echo "<td>{$symbol}</td>";
                                                echo "<td>{$orderType}</td>";
                                                echo "<td>{$entry}</td>";
                                                echo "<td>{$stopLoss}</td>";
                                                echo "<td>{$takeProfit}</td>";
                                                echo "<td>{$volume}</td>";
                                                echo "<td>{$leverage}</td>";
                                                echo "<td>{$gain}</td>";

                                                // status color coding
                                                $color = ($status === 'closed') ? 'green' : (($status === 'pending') ? 'blue' : 'orange');
                                                echo "<td style='color:{$color};'>{$status}</td>";

                                                echo "<td>{$created}</td>";
                                                echo "<td>{$updated}</td>";

                                                // example action buttons – adjust URLs/logic as needed
                                                echo "<td><button class='btn btn-primary btn-sm'>
            <a style='color:white;' href='view_trade.php?id={$id}'>View</a>
          </button></td>";
                                                echo "<td><button class='btn btn-danger btn-sm'>
            <a style='color:white;' href='delete_trade.php?id={$id}'>Delete</a>
          </button></td>";
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



</html>