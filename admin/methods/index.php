<?php  include("../../server/connection.php") ?>
<?php  include("../../server/auth/admin.php") ?>
<!doctype html>
<html lang="en">


<!-- Mirrored from themesdesign.in/upcube/layouts/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Apr 2025 19:11:57 GMT -->

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
                                <h4>Deposit Methods</h4>

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

                                    <button class="btn btn-primary btn-sm"><a style="color: white;"
                                            href="index.php?add_payment=true">Add New Method</a></button>


                                            <?php 
                                                if (isset($_GET['add_payment']) && $_GET['add_payment'] == 'true'): 
                                            ?>
                                            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                                            <script>
                                                document.addEventListener('DOMContentLoaded', function () {
                                                Swal.fire({
                                                    title: 'Add New Payment Method',
                                                    html: `
                                                    <input type="text" id="method_name" class="swal2-input" placeholder="Payment Name" required>
                                                    <input type="text" id="method_key" class="swal2-input" placeholder="Payment Network" required>
                                                    <input type="text" id="wallet_address" class="swal2-input" placeholder="Payment Address" required>
                                                    `,
                                                    focusConfirm: false,
                                                    showCancelButton: true,
                                                    confirmButtonText: 'Add',
                                                    preConfirm: () => {
                                                    const methodName = document.getElementById('method_name').value;
                                                    const methodKey = document.getElementById('method_key').value;
                                                    const walletAddress = document.getElementById('wallet_address').value;

                                                    if (!methodName || !methodKey || !walletAddress) {
                                                        Swal.showValidationMessage('Please fill in all fields');
                                                        return false;
                                                    }

                                                    // Return the collected input values
                                                    return { methodName, methodKey, walletAddress };
                                                    }
                                                }).then((result) => {
                                                    if (result.isConfirmed) {
                                                    // Create a hidden form to submit data
                                                    const form = document.createElement('form');
                                                    form.method = 'POST';
                                                    form.action = 'index.php';

                                                    const input1 = document.createElement('input');
                                                    input1.type = 'hidden';
                                                    input1.name = 'method_name';
                                                    input1.value = result.value.methodName;

                                                    const input2 = document.createElement('input');
                                                    input2.type = 'hidden';
                                                    input2.name = 'method_key';
                                                    input2.value = result.value.methodKey;

                                                    const input3 = document.createElement('input');
                                                    input3.type = 'hidden';
                                                    input3.name = 'wallet_address';
                                                    input3.value = result.value.walletAddress;

                                                    const inputSubmit = document.createElement('input');
                                                    inputSubmit.type = 'hidden';
                                                    inputSubmit.name = 'submit_payment';
                                                    inputSubmit.value = 'true';

                                                    form.appendChild(input1);
                                                    form.appendChild(input2);
                                                    form.appendChild(input3);
                                                    form.appendChild(inputSubmit);

                                                    document.body.appendChild(form);
                                                    form.submit();
                                                    } else {
                                                    // Redirect if cancelled
                                                    window.location.href = 'index.php';
                                                    }
                                                });
                                                });
                                            </script>
                                            <?php 
                                                endif; 
                                            ?>

                                            <?php
                                                if (isset($_POST['submit_payment'])) {
                                                    $method_name = $_POST['method_name'];
                                                    $method_key = $_POST['method_key'];
                                                    $wallet_address = $_POST['wallet_address'];
                                                    $uuid = bin2hex(random_bytes(16));

                                                    // Prepare and execute the insert statement
                                                    $stmt = mysqli_prepare($connection, "INSERT INTO payment_methods (method_name, method_key, wallet_address,uuid) VALUES (?, ?, ?,?)");
                                                    mysqli_stmt_bind_param($stmt, "ssss", $method_name, $method_key, $wallet_address, $uuid);
                                                    $success = mysqli_stmt_execute($stmt);

                                                    if ($success) {
                                                        echo "<script>
                                                                Swal.fire({
                                                                    icon: 'success',
                                                                    title: 'Payment method added!',
                                                                    showConfirmButton: false,
                                                                    timer: 2000
                                                                }).then(() => {
                                                                    window.location.href = 'index.php';
                                                                });
                                                            </script>";
                                                    } else {
                                                        echo "<script>
                                                                Swal.fire({
                                                                    icon: 'error',
                                                                    title: 'Error saving payment method!',
                                                                    text: 'Please try again.',
                                                                    confirmButtonText: 'OK'
                                                                });
                                                            </script>";
                                                    }
                                                }
                                            ?>


                                    </p>

                                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>

                                                <th>S/N:</th>
                                                <th>Payment Name:</th>
                                                <th>Payment Network:</th>
                                                <th>Payment Address:</th>              
                                                <th>Status</th>              
                                                <th>#</th>
                                                <th>#</th>
                                                


                                            </tr>
                                        </thead>


                                        <tbody>

                                            <?php

                                            $query = "SELECT * FROM payment_methods";
                                            $select_logs = mysqli_query($connection, $query);
                                            $sn = 1;
                                            while ($row = mysqli_fetch_assoc($select_logs)) {
                                                $id = $row['id'];
                                                $pay_name = $row['method_name'];
                                                $pay_network = "method_key";
                                                $pay_address = $row['wallet_address'];
                                                $status = $row['status'];
                                                echo "<tr>";
                                                echo "<td>$sn</td>";
                                                echo "<td>$pay_name</td>";
                                                echo "<td>$pay_network</td>";
                                                echo "<td>$pay_address</td>";
                                                echo "<td>$status</td>";

                                                
                                                
                                                    if($status == 'active'){
                                                        echo "<td><button class='btn btn-danger btn-sm'><a style='color: white;' href='index.php?id=$id&request=deactivate'>Deactivate</a></button></td>";
                                                    } else {
                                                        echo "<td><button class='btn btn-success btn-sm'><a style='color: white;' href='index.php?id=$id&request=activate'>Activate</a></button></td>";
                                                    }

                                                    echo "<td><button class='btn btn-danger btn-sm'><a style='color: white;' href='index.php?del=$id'>Delete</a></button></td>";



                                                echo "</tr>";
                                                $sn++;
                                            }

                                            if (isset($_GET['del'])) {
                                                $the_id = $_GET['del'];
                                                $query = "DELETE FROM payment_methods WHERE id = $the_id";
                                                $delete_query = mysqli_query($connection, $query);
                                                if (!$delete_query) {
                                                    die("QUERY FAILED" . mysqli_error($connection));
                                                } else {
                                                    echo "<script>
                                                    Swal.fire(
                                                        'Success!',
                                                        'Payment Method Deleted Successfully!',
                                                        'success'
                                                    ).then(() => {
                                                        window.location.href = 'index.php';
                                                    });
                                                    </script>";
                                                }
                                            }


                                            if (isset($_GET['request']) && isset($_GET['id'])) {

                                                $the_request = $_GET['request'];
                                                $the_id = $_GET['id'];

                                                if ($the_request == 'deactivate') {
                                                    $query = "UPDATE payment_methods SET status = 'inactive' WHERE id = $the_id";
                                                    $deactivate_query = mysqli_query($connection, $query);
                                                    if (!$deactivate_query) {
                                                        die("QUERY FAILED" . mysqli_error($connection));
                                                    } else {
                                                        echo "<script>
                                                        Swal.fire(
                                                            'Success!',
                                                            'Payment Method Deactivated Successfully!',
                                                            'success'
                                                        ).then(() => {
                                                            window.location.href = 'index.php';
                                                        });
                                                        </script>";
                                                    }
                                                }

                                                if ($the_request == 'activate') {
                                                    $query = "UPDATE payment_methods SET status = 'active' WHERE id = $the_id";
                                                    $activate_query = mysqli_query($connection, $query);
                                                    if (!$activate_query) {
                                                        die("QUERY FAILED" . mysqli_error($connection));
                                                    } else {
                                                        echo "<script>
                                                        Swal.fire(
                                                            'Success!',
                                                            'Payment Method Activated Successfully!',
                                                            'success'
                                                        ).then(() => {
                                                            window.location.href = 'index.php';
                                                        });
                                                        </script>";
                                                    }
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
    <script src="../assets/libs/datatables.net-buttons/js/buttons.php5.min.js"></script>
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


<!-- Mirrored from themesdesign.in/upcube/layouts/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Apr 2025 19:15:04 GMT -->

</html>