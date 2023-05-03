<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Attendance Dashboard</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="./static/assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" />
    <link href="./static/css/dashboard.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" />

    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
        google.charts.load('current', {
            packages: ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
      // Define the chart to be drawn.
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Country');
      data.addColumn('number', 'Percentage');
      data.addRows([
        ['India', 0.78],
        ['USA', 0.21],
        ['UK', 0.01]
      ]);

      // Instantiate and draw the chart.
      var chart = new google.visualization.BarChart(document.getElementById('myPieChart'));
      chart.draw(data, null);
    }
    </script>

    <style>
        table,
        th,
        td {
            border: 1px solid rgb(241, 235, 235);
            text-align: center;

        }

        th {
            /* background-color: #234027; */
            color: white;
            text-align: center;
            min-width: 100px;

        }

        .divScroll {
            padding-left: 1%;
            /*overflow:scroll;*/
            width: 1200px;
            height: 600px;
        }


        .bg-darkblue {
            background-color: #3459E9 !important;
            opacity: 1 !important;
        }

        .border-darkblue {
            border-color: #3459E9 !important;
        }

        .fs-7 {
            font-size: 0.75rem !important;
        }

        .fs-8 {
            font-size: 0.55rem !important;
        }
    </style>


    <!-- Theme style -->
    <link rel="stylesheet" href="./static/dist/css/adminlte.min.css">

</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-break border-bottom bg-light text-start">
                <a href="attdashboard"><img src="../assets/img/logonew.png" alt="logo" class="img-fluid" style="max-width: 12rem; height: 4rem;"></a>
            </div>
            <div class="list-group list-group-flush text-start" style="font-size:13px;height:700px;overflow:scroll;overflow-x: hidden;">

                <a class="list-group-item list-group-item-action list-group-item-light p-3 bg-danger text-white p-3" href="attdashboard" style="color:black;"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="http://10.144.97.120:9090/" style="color:black;"><i class="fa fa-bookmark" aria-hidden="true"></i> Recruitment</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="hrattendance" style="color:black;"><i class="fa fa-th" aria-hidden="true"></i> Attendance</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="rostering" style="color:black;"><i class="fa fa-archive" aria-hidden="true"></i> Rostering</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="payrollsetup" style="color:black;"> <i class="fas fa-file-invoice-dollar"></i> Payroll Setup</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="shifttiming" style="color:black;"><i class="fa fa-calendar" aria-hidden="true"></i> Shift Timing</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="perksexpenses" style="color:black;"><i class="fa fa-line-chart" aria-hidden="true"></i> Perks & Expenses</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="roleuseraccount" style="color:black;"><i class="fa fa-users" aria-hidden="true"></i> Users</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="rolecreation" style="color:black;"><i class="fa fa-user-circle" aria-hidden="true"></i> Roles</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="rolemenumap" style="color:black;"><i class="fa fa-user" aria-hidden="true"></i> Role Menu Mapping</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="onboarding" style="color:black;"><i class="fa fa-th" aria-hidden="true"></i> Onboarding</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="paytype" style="color:black;"><i class="fa fa-credit-card" aria-hidden="true"></i> Pay Type</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="departments" style="color:black;"><i class="fa fa-briefcase" aria-hidden="true"></i> Departments</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="positions" style="color:black;"><i class="fa fa-id-badge" aria-hidden="true"></i> Position</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="process" style="color:black;"><i class="fa fa-tasks" aria-hidden="true"></i> Process</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="processsal" style="color:black;"><i class="fa fa-credit-card" aria-hidden="true"></i> Process Salary Range</a>

                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="empcat" style="color:black;"><i class="fa fa-users" aria-hidden="true"></i> Emps Category</a>

                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="bgvdata" style="color:black;"><i class="fa fa-bell" aria-hidden="true"></i> BG Verification</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="idproofs" style="color:black;"><i class="fa fa-address-card" aria-hidden="true"></i> Identity Proofs</a>

                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="languages" style="color:black;"><i class="fa fa-language" aria-hidden="true"></i> Language</a>

                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="qualifications" style="color:black;"><i class="fa fa-book" aria-hidden="true"></i> Qualification</a>

                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="banks" style="color:black;"><i class="fa fa-university" aria-hidden="true"></i> Bank Names</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="sourceofwalkin" style="color:black;"><i class="fa fa-briefcase" aria-hidden="true"></i> Source</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="unassignemps" style="color:black;"><i class="fa fa-user-times" aria-hidden="true"></i> UnAssigned Employees</a>

                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="holidaycal" style="color:black;"><i class="fa fa-calendar" aria-hidden="true"></i> Holiday Calendar </a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="ipaddrs" style="color:black;"><i class="fa fa-briefcase" aria-hidden="true"></i> IP Address</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="chngpswd" style="color:black;"><i class="fa fa-binoculars" aria-hidden="true"></i> Change Password</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="weblogins" style="color:black;"><i class="fa fa-bookmark" aria-hidden="true"></i> Web Login</a>

                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="biometrics" style="color:black;"><i class="fa fa-line-chart" aria-hidden="true"></i> Biometrics</a>

                <!-- <a class="list-group-item list-group-item-action list-group-item-light p-3 bg-primary text-white p-3" href="attdashboard" style="color:black;"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="http://10.144.97.120:9090/" style="color:black;"><i class="fa fa-bookmark" aria-hidden="true"></i>Recruitment</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="hrattendance" style="color:black;"><i class="fa fa-th" aria-hidden="true"></i> Attendance</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="rostering" style="color:black;"><i class="fa fa-archive" aria-hidden="true"></i> Rostering</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="perksexpenses" style="color:black;"><i class="fa fa-line-chart" aria-hidden="true"></i> Perks & Expenses</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="onboarding" style="color:black;"><i class="fa fa-th" aria-hidden="true"></i> Onboarding</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="departments" style="color:black;"><i class="fa fa-briefcase" aria-hidden="true"></i> Departments</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="positions" style="color:black;"><i class="fa fa-id-badge" aria-hidden="true"></i> Position</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="processsal" style="color:black;"><i class="fa fa-credit-card" aria-hidden="true"></i> Process Salary Range</a>


                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="bgvdata" style="color:black;"><i class="fa fa-bell" aria-hidden="true"></i> BG Verification</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="idproofs" style="color:black;"><i class="fa fa-address-card" aria-hidden="true"></i> Identity Proofs</a>

                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="languages" style="color:black;"><i class="fa fa-language" aria-hidden="true"></i> Language</a>

                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="qualifications" style="color:black;"><i class="fa fa-book" aria-hidden="true"></i> Qualification</a>

                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="banks" style="color:black;"><i class="fa fa-university" aria-hidden="true"></i> Bank Names</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="sourceofwalkin" style="color:black;"><i class="fa fa-briefcase" aria-hidden="true"></i> Source</a>

                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="holidaycal" style="color:black;"><i class="fa fa-calendar" aria-hidden="true"></i> Holiday Calendar </a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="weblogins" style="color:black;"><i class="fa fa-bookmark" aria-hidden="true"></i> Web Login</a>

                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="biometrics" style="color:black;"><i class="fa fa-line-chart" aria-hidden="true"></i> Biometrics</a> -->


            </div>

        </div>
        <!-- Page content wrapper-->
        <div class="col-lg-10 col-xs-12">
            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <!-- <button class="btn btn-light shadow-none btn-sm" id="sidebarToggle">
                        <span class="navbar-toggler-icon"></span>
                    </button> -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">
                                    <i class="fa fa-bar-chart text-danger"></i> Dashboard
                                </a>
                            </li>
                            <!-- <li class="nav-item d-none d-sm-inline-block">
                                <a href="hrattendance" class="nav-link"><i class="fa fa-id-badge text-danger"></i> Attendance</a>
                            </li> -->
                            <!--
                                <div class="vr"></div>
                                <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                      <i class="fas fa-cog"></i>
                                  </a>
                                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#"><i class="fas fa-folder-open"></i> My Account</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="fas fa-exchange-alt"></i> Change Password</a></li>
                                  </ul>
                                </li>
								-->
                            <li class="nav-item text-center">
                                <a class="nav-link bg-danger" aria-current="page" href="login">
                                    <i class="fas fa-sign-out-alt text-white"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Page content-->
            <div class="container-fluid">
                <h3 class="my-4">Dashboard</h3>
                <section class="content">

                    <div class="container-fluid">
                        <!-- Small boxes (Stat box) -->
                        <div class="row">
                            <div class="col-lg-4 col-6">
                                <!-- small box -->
                                <div class="small-box bg-info">
                                    <div class="inner">
                                        <h3></h3>

                                        <p>Absent,DLOP,LOP,HD,LHD</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-person-add"></i>
                                    </div>
                                    <a href="attdashboard?code=1" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-4 col-6">
                                <!-- small box -->
                                <div class="small-box bg-success">
                                    <div class="inner">
                                        <h3></h3>

                                        <p>Present</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-person-add"></i>
                                    </div>
                                    <a href="attdashboard?code=2" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-4 col-6">
                                <!-- small box -->
                                <div class="small-box bg-warning">
                                    <div class="inner">
                                        <h3></h3>

                                        <p>CL,NH,WO</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-person-add"></i>
                                    </div>
                                    <a href="attdashboard?code=3" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <!-- ./col -->
                        </div>
                        <!-- /.row -->
                        <!-- Main row -->
                        <div class="row mt-5">
                            <!-- Left col -->
                            <section class="col-lg-12">
                                <!-- Custom tabs (Charts with tabs)-->
                                <div class="card" style="display:block">
                                    <div class="card-header">
                                        <h4 class="card-title">Visitors Data</h4>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                    <div id="myPieChart"/>
                                    </div>


                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->


                            </section>
                            <!-- /.Left col -->
                        </div>
                        <!-- /.row (main row) -->
                    </div><!-- /.container-fluid -->
                </section>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="./static/js/dashboard.js"></script>

</body>

</html>