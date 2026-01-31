
<!doctype html>
<html lang="en">


<!-- Mirrored from themesdesign.in/upcube/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Apr 2025 19:11:57 GMT -->

<head>

    <meta charset="utf-8">
    <title>Data Tables | Upcube - Admin &amp; Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin &amp; Dashboard Template" name="description">
    <meta content="Themesdesign" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets/images/favicon.ico">

    <!-- DataTables -->
    <link href="../assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/libs/datatables.net-select-bs4/css/select.bootstrap4.min.css" rel="stylesheet" type="text/css">

    <!-- Responsive datatable examples -->
    <link href="../assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet"
        type="text/css">

    <!-- Bootstrap Css -->
    <link href="../assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <!-- App Css-->
    <link href="../assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">

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
                                <h4>Users List</h4>

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

                                    <p class="card-title-desc"></p>

                                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>S/N:</th>
                                                <th>Full-Name:</th>
                                                <th>Email:</th>
                                                <th>Phone</th>
                                                <th>Reg-Date:</th>
                                                <th>Status:</th>
                                                <th>Action:</th>
                                                <th>#:</th>
                                                <th>#:</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                            $query = "SELECT * FROM users ORDER BY id DESC";
                                            $select_logs = mysqli_query($connection, $query);
                                            $sn = 1;

                                            while ($row = mysqli_fetch_assoc($select_logs)) {
                                                $id = $row['id'];
                                                $fullname = $row['firstname'] . " " . $row['lastname'];
                                                $email = $row['email'];
                                                $phone = $row['phone'];
                                                $date = $row['created_at'];
                                                $status = $row['status'];

                                                // Determine status color and label
                                                $status_label = '';
                                                $status_color = '';
                                                switch ($status) {
                                                    case 'suspended':
                                                        $status_label = 'Suspended';
                                                        $status_color = 'red';
                                                        break;
                                                    case 'pending':
                                                        $status_label = 'Pending';
                                                        $status_color = 'blue';
                                                        break;
                                                    default:
                                                        $status_label = 'Active';
                                                        $status_color = 'green';
                                                        break;
                                                }

                                                echo "<tr>";
                                                echo "<td>$sn</td>";
                                                echo "<td>$fullname</td>";
                                                echo "<td>$email</td>";
                                                echo "<td>$phone</td>";
                                                echo "<td>$date</td>";
                                                echo "<td style='color: $status_color;'>$status_label</td>";

                                                // Action button (based on status)
                                                $action_btn = '';
                                                if ($status == 'suspended') {
                                                    $action_btn = "<a class='btn btn-primary btn-sm text-white' href='index.php?activate=$id'>Activate</a>";
                                                } elseif ($status == 'pending') {
                                                    $action_btn = "<a class='btn btn-success btn-sm text-white' href='index.php?approve=$id'>Approve</a>";
                                                } elseif ($status == 'active') {
                                                    $action_btn = "<a class='btn btn-danger btn-sm text-white' href='index.php?suspend=$id'>Suspend</a>";
                                                } else {
                                                    $action_btn = "<span class='text-muted'>—</span>";
                                                }

                                                echo "<td>$action_btn</td>";

                                                // Delete and Edit buttons (always show)
                                                echo "<td><a class='btn btn-danger btn-sm text-white' href='index.php?delete=$id'>Delete</a></td>";
                                                echo "<td><a class='btn btn-primary btn-sm text-white' href='edit.php?id=$id'>Edit</a></td>";

                                                echo "</tr>";
                                                $sn++;
                                            }

                                            // Handle actions
                                            if (isset($_GET['delete'])) {
                                                $the_user_id = $_GET['delete'];
                                                $query = "DELETE FROM users WHERE id = $the_user_id";
                                                mysqli_query($connection, $query);
                                                echo "<script>window.location='index.php'</script>";
                                            }

                                            if (isset($_GET['activate'])) {
                                                $the_user_id = $_GET['activate'];
                                                $query = "UPDATE users SET status = 'active' WHERE id = $the_user_id";
                                                mysqli_query($connection, $query);
                                                echo "<script>window.location='index.php'</script>";
                                            }

                                            if (isset($_GET['suspend'])) {
                                                $the_user_id = $_GET['suspend'];
                                                $query = "UPDATE users SET status = 'suspended' WHERE id = $the_user_id";
                                                mysqli_query($connection, $query);
                                                echo "<script>window.location='index.php'</script>";
                                            }

                                            if (isset($_GET['approve'])) {
                                                $the_user_id = $_GET['approve'];
                                                $query = "UPDATE users SET status = 'active' WHERE id = $the_user_id";
                                                mysqli_query($connection, $query);
                                                echo "<script>window.location='index.php'</script>";
                                            }
                                            ?>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div> <!-- end col -->
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



</body>


<!-- Mirrored from themesdesign.in/upcube/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Apr 2025 19:15:04 GMT -->

</html>
