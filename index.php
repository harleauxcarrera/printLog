<?php
session_start();
if (!isset($_SESSION["authorized"]) || !$_SESSION["authorized"]) {
  header("Location: http://helper.at.utep.edu/printlog/login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>3D Print Log</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar static-top navbar-toggleable-md navbar-inverse bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">3D Print Log</a>
        <div class="collapse navbar-collapse" id="navbarExample">
            <ul class="sidebar-nav navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#"><i class="fa fa-fw fa-dashboard"></i> View Log</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="new_print.php"><i class="fa fa-fw fa-wrench"></i> Add Print</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="logout.php"><i class="fa fa-fw fa-sign-out"></i> Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="content-wrapper py-3">

        <div class="container-fluid">

            <!-- Breadcrumbs -->
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">3D Print Log</a></li>
                <li class="breadcrumb-item active">Print Log</li>
            </ol>

            <!-- Icon Cards -->
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card card-inverse card-success o-hidden h-100">
                        <div class="card-block">
                            <div class="card-block-icon">
                                <i class="fa fa-fw fa-list"></i>
                            </div>
                            <div class="mr-5">
                              <!--TODO: Prints Completed -->
                                11 Completed Prints!
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card card-inverse card-warning o-hidden h-100">
                        <div class="card-block">
                            <div class="card-block-icon">
                                <i class="fa fa-fw fa-list"></i>
                            </div>
                            <div class="mr-5">
                              <!--TODO: Prints in Progress -->
                                123 Items Printing!
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card card-inverse card-danger o-hidden h-100">
                        <div class="card-block">
                            <div class="card-block-icon">
                                <i class="fa fa-fw fa-support"></i>
                            </div>
                            <div class="mr-5">
                              <!--TODO: Prints that need emails -->
                                13 Emails Need Sending!
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Print Log Card -->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i> Print Log
                </div>
                <div class="card-block">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Printer</th>
                                    <th>Job Name</th>
                                    <th>Email</th>
                                    <th>Date and Time</th>
                                    <th>Started by</th>
                                    <th>Progress</th>
                                    <th> </th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                  <th>Printer</th>
                                  <th>Job Name</th>
                                  <th>Email</th>
                                  <th>Date and Time</th>
                                  <th>Started by</th>
                                  <th>Progress</th>
                                  <th> </th>
                                </tr>
                            </tfoot>
                            <tbody>
                              <!--TODO: Print log entries go here -->
                              <tr>
                                <td>R5-D4</td>
                                <td>Generic SD</td>
                                <td>Sabastian</td>
                                <td>5/15/17 12:20 PM</td>
                                <td>Sabastian</td>
                                <td>Done</td>
                                <td><a href="#">Edit</a></td>
                              </tr>

                              <tr>
                                <td>BB-8</td>
                                <td>Generic SD</td>
                                <td>Sabastian</td>
                                <td>5/15/17 12:20 PM</td>
                                <td>Sabastian</td>
                                <td>Done</td>
                                <td><a href="#">Edit</a></td>
                              </tr>

                              <tr>
                                <td>R5-D4</td>
                                <td>Male piece</td>
                                <td>Ilene</td>
                                <td>5/23/17 9:58 AM</td>
                                <td>Ilene</td>
                                <td>Printing</td>
                                <td><a href="#">Edit</a></td>
                              </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->
        <div class="card-footer small text-muted">
            Credit to <a href="http://startbootstrap.com/">Start Bootstrap</a> and <a href="http://davidmiller.io">David Miller</a> for the Bootstrap theme, <a href="https://startbootstrap.com/template-overviews/sb-admin/">SB Admin</a>!
        </div>
    </div>
    <!-- /.content-wrapper -->

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts -->
    <script src="js/printlog.js"></script>

</body>

</html>
