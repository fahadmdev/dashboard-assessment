<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Report Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">


    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="js/data-displayer.js"></script>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Topbar Icon and Page Title -->
                    <p class="mb-0 text-gray-800"><b>User Vulnerabilities and Threats Report Page</b></p>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Client Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small client-name">CyberLab
                                    Inc</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>

                            <!-- Dropdown - Client Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-envelope fa-sm fa-fw mr-2 text-gray-400"></i>
                                    <span class="client-email">info@cyberlabs.tech</span>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-industry fa-sm fa-fw mr-2 text-gray-400"></i>
                                    <span class="client-industry">Education</span>
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Reports Section Starts Here -->
                    <div class="reports">
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Reports</h1>
                        </div>

                        <!-- Top Cards -->
                        <div class="row">

                            <!-- Client Details Card -->
                            <div class="col-xl-4 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div
                                                    class="text-xs font-weight-bold text-primary text-uppercase mb-1 client-name">
                                                    CyberLab Inc</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800 client-industry">
                                                    Education</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Vulnerability Score Card -->
                            <div class="col-xl-4 col-md-6 mb-4">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                    Final
                                                    Vulnerability Score</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800 vulnerability-score">
                                                    -210</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-exclamation-triangle fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Status Card -->
                            <div class="col-xl-4 col-md-6 mb-4">
                                <div class="card border-left-status shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-status text-uppercase mb-1">
                                                    Status</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800 report-status">
                                                    Vulnerability level
                                                    below minimal threshold ,urgent attention required</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-info fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /Top Cards -->

                        <!-- Detected Vulnerabilities & Detailed Statistics -->
                        <div class="row">

                            <!-- Bar Chart -->
                            <div class="col-xl-8 col-lg-7">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Detected Vulnerabilities</h6>
                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <div class="chart-bar">
                                            <canvas id="myBarChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Donut Pie Chart -->
                            <div class="col-xl-4 col-lg-5">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Detailed Statistics</h6>
                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <div class="chart-pie pt-4 pb-2">
                                            <canvas id="myPieChart"></canvas>
                                        </div>
                                        <div class="mt-4 text-center small">
                                            <span class="mr-2">
                                                <i class="fas fa-circle text-success"></i> Alertness
                                            </span>
                                            <span class="mr-2">
                                                <i class="fas fa-circle text-warning"></i> User Conduct
                                            </span>
                                            <span class="mr-2">
                                                <i class="fas fa-circle text-danger"></i> Threatent
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Detected Vulnerabilities & Detailed Statistics -->

                        <!-- Alerts & Detected Vulnerabilities % -->
                        <div class="row">
                            <div class="col-lg-6 mb-4">
                                <!-- Illustrations -->
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Alert
                                            <button data-toggle="modal" data-target="#possibleSolutionsModal"
                                                style="float: right"
                                                class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                                Click Here For Possible Solutions
                                            </button>
                                        </h6>
                                    </div>
                                    <div class="card-body">

                                        <div class="row">
                                            <!-- Titile -->
                                            <div class="col-xl-6 col-md-6 mb-4">
                                                <div class="card border-left-primary shadow h-100 py-2">
                                                    <div class="card-body">
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col mr-2">
                                                                <div
                                                                    class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                                    Title</div>
                                                                <div
                                                                    class="h5 mb-0 font-weight-bold text-gray-800 alert-title">
                                                                    SQL Injection</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Description -->
                                            <div class="col-xl-6 col-md-6 mb-4">
                                                <div class="card border-left-success shadow h-100 py-2">
                                                    <div class="card-body">
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col mr-2">
                                                                <div
                                                                    class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                                    Description</div>
                                                                <div
                                                                    class="h5 mb-0 font-weight-bold text-gray-800 alert-description">
                                                                    <p>SQL injection may be possible</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <!-- CVE -->
                                            <div class="col-xl-6 col-md-6 mb-4">
                                                <div class="card border-left-info shadow h-100 py-2">
                                                    <div class="card-body">
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col mr-2">
                                                                <div
                                                                    class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                                    CVE</div>
                                                                <div
                                                                    class="h5 mb-0 font-weight-bold text-gray-800 alert-cve">
                                                                    Null</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Severity -->
                                            <div class="col-xl-6 col-md-6 mb-4">
                                                <div class="card border-left-warning shadow h-100 py-2">
                                                    <div class="card-body">
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col mr-2">
                                                                <div
                                                                    class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                                    Severity</div>
                                                                <div
                                                                    class="h5 mb-0 font-weight-bold text-gray-800 alert-severity">
                                                                    High</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 mb-4">
                                <!-- % Card -->
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Detected Vulnerabilities %</h6>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="small font-weight-bold">Low Vulnerabilities <span
                                                class="float-right low-perc"></span></h4>
                                        <div class="progress mb-4">
                                            <div class="progress-bar bg-success low-perc-bar" role="progressbar"
                                                style="" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>

                                        <h4 class="small font-weight-bold">Medium Vulnerabilities <span
                                                class="float-right mid-perc"></span></h4>
                                        <div class="progress mb-4">
                                            <div class="progress-bar bg-warning mid-perc-bar" role="progressbar"
                                                style="" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>

                                        <h4 class="small font-weight-bold">High Vulnerabilities <span
                                                class="float-right high-perc"></span></h4>
                                        <div class="progress mb-4">
                                            <div class="progress-bar high-perc-bar" role="progressbar"
                                                style="background-color:#fc7b03" aria-valuenow="" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>

                                        <h4 class="small font-weight-bold">Critical Vulnerabilities <span
                                                class="float-right critical-perc"></span></h4>
                                        <div class="progress mb-4">
                                            <div class="progress-bar bg-danger critical-perc-bar" role="progressbar"
                                                style="" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Alerts & Detected Vulnerabilities % -->

                        <!-- Possible Solutions Modal -->
                        <div class="modal fade" id="possibleSolutionsModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="possibleSolutionsModalTitle">Possible Solutions</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="alert-soutions">
                                            <ul class="solution-list">

                                            </ul>
                                        </div>
                                        <a class="problem-url" style="float:right" target="_blank" rel="nofollow"
                                            href="">Vist Page&rarr;</a>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Possible Solutions Modal-->
                    </div>
                    <!-- Reports Section Ends Here -->


                    <!-- Threats Section Starts Here -->
                    <div class="threats">
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Threats</h1>
                        </div>

                        <!-- Breach Details -->
                        <div class="row">
                            <div class="col-lg-6 mb-4">
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">System Message</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title system-msg"></h5>
                                                <p class="card-text system-description"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Data Breach Details</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title breach-msg"></h5>
                                                <p class="card-text breach-description"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Threats Cards -->
                        <div class="row threat-cards">

                        </div>
                        <!-- /Threats Cards  -->



                        <!-- Threats Section Ends Here -->

                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Dashboard For Assessment</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/chart-bar-demo.js"></script>
        <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>