<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        SoFo - Document Analysis
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="../assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
    <div class="wrapper">
        <div class="sidebar">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
    -->
            <div class="sidebar-wrapper">
                <a href="dashboard.html" class="simple-text logo-mini">
                    <img src="../assets/img/logo.png" width="175" height="75" style="margin-top: 5px; margin-left:25px; margin-bottom: -15px" alt="SoFo">;
                </a>
                <div class="logo">
                </div>
                <ul class="nav">
                    <li>
                        <a href="./dashboard.html">
                            <i class="tim-icons icon-chart-pie-36"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="./map.html">
                            <i class="tim-icons icon-laptop"></i>
                            <p>Meeting Schedule</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="./tables.php">
                            <i class="tim-icons icon-paper"></i>
                            <p>Document Analysis</p>
                        </a>
                    </li>
                    <li>
                        <a href="./tables1.php">
                            <i class="tim-icons icon-paper"></i>
                            <p>Interface Analysis</p>
                        </a>
                    </li>
                    <li>
                        <a href="./tables2.html">
                            <i class="tim-icons icon-single-copy-04"></i>
                            <p>SRS</p>
                        </a>
                    </li>
                    <li>
                        <a href="./user.html">
                            <i class="tim-icons icon-single-02"></i>
                            <p>Client Profile</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle d-inline">
                            <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
                        </div>
                        <a class="navbar-brand" href="tables.php">Document Analysis</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
                    <div class="collapse navbar-collapse" id="navigation">
                        <ul class="navbar-nav ml-auto">
                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <div class="photo">
                                        <img src="../assets/img/anime3.png" alt="Profile Photo">
                                    </div>
                                    <b class="caret d-none d-lg-block d-xl-block"></b>
                                    <p class="d-lg-none">
                                        Profile
                                    </p>
                                </a>
                                <ul class="dropdown-menu dropdown-navbar">
                                    <li class="nav-link"><a href="user.html" class="nav-item dropdown-item">Edit Profile</a></li>
                                    <li class="dropdown-divider"></li>
                                    <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Log out</a></li>
                                </ul>
                            </li>
                            <li class="separator d-lg-none"></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="card-header">
                                <h4 class="card-title"> File Input</h4>
                            </div>
                            <div class="content">
                                <div class="container">
                                    <div class="col-md-8 col-md-offset-2">
                                        <form method="POST" action="image_upload.php" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <div class="input-group input-file" name="file">
                                                    <span class="input-group-btn">
                              <button class="btn btn-default btn-choose" type="button">Choose</button>
                          </span>
                                                    <input type="text" class="form-control" placeholder='Choose a file...'  />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary pull-right" name="submit">Submit</button>
                                                <button type="reset" class="btn btn-danger">Reset</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Document Analysis</h4>
                            </div>
                            <div class="card-body all-icons" style="margin-top: -25px;">
                                <div class="row">
                                <?php
                                $host='localhost';
                                $user='root';
                                $pass='';
                                $db='photo';
                                $con=mysqli_connect($host,$user,$pass,$db);
                                $query="SELECT * FROM image ";
                               $stmt=mysqli_stmt_init($con);
                               if(mysqli_stmt_prepare($stmt,$query))
                               {mysqli_stmt_execute($stmt);
                                $result=mysqli_stmt_get_result($stmt);
                                $rowcount=mysqli_num_rows($result);
                                  if($rowcount !=0)
                                  {   $email=$_SESSION['email'];
                                      $sql="SELECT Filename,file FROM image WHERE email='$email' ";
                                      $rs=mysqli_query($con,$sql);
                                      while($row = $rs->fetch_assoc()) {
                                           echo ' <a href="https://drive.google.com/file/d/1zFAciq93d5-Etl5Cg528IejeiFgRUtN-/view?usp=sharing" class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                           <div class="font-icon-detail" style="background-image :url(uploads/'.$row["Filename"].');">
                                               <i class="tim-icons icon-single-copy-04"></i>
                                               
                                           </div>
                                           <p>'.$row["file"].'</p>
            
                                       </a> ';
                                       
                                        }
                                  }
                                }

                                ?>

                                  <!-- <a href="#" class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-single-copy-04"></i>
                                            <p>File 01</p>
                                        </div>
                                    </a>
                                    <a href="#" class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-single-copy-04"></i>
                                            <p>File 02</p>
                                        </div>
                                    </a>
                                    <a href="#" class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-single-copy-04"></i>
                                            <p>File 03</p>
                                        </div>
                                    </a>
                                    <a href="#" class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-single-copy-04"></i>
                                            <p>File 04</p>
                                        </div>
                                    </a>
                                    <a href="#" class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-single-copy-04"></i>
                                            <p>File 05</p>
                                        </div>
                                    </a>
                                    <a href="#" class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-single-copy-04"></i>
                                            <p>File 06</p>
                                        </div>
                                    </a>
                                    <a href="#" class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-single-copy-04"></i>
                                            <p>File 07</p>
                                        </div>
                                    </a>
                                    <a href="#" class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-single-copy-04"></i>
                                            <p>File 08</p>
                                        </div>
                                    </a>
                                    <a href="#" class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-single-copy-04"></i>
                                            <p>File 09</p>
                                        </div>
                                    </a>
                                    <a href="#" class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-single-copy-04"></i>
                                            <p>File 10</p>
                                        </div>
                                    </a>
                                    <a href="#" class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-single-copy-04"></i>
                                            <p>File 11</p>
                                        </div>
                                    </a>
                                    <a href="#" class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                                        <div class="font-icon-detail">
                                            <i class="tim-icons icon-single-copy-04"></i>
                                            <p>File 12</p>
                                        </div>
                                    </a>//-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <p>
                        <a href="mailto:softwareinformation12@gmail.com">
                            <div class="copyright">
                                ©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> SoFo
                            </div>
                        </a>
                    </p>
                </div>
            </footer>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="../assets/js/core/jquery.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Google Maps Plugin    -->
    <!-- Place this tag in your head or just before your close body tag. -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="../assets/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="../assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/black-dashboard.min.js?v=1.0.0"></script>
    <!-- Black Dashboard DEMO methods, don't include it in your project! -->
    <script src="../assets/demo/demo.js"></script>
    <script src="../assets/js/fileinput.js"></script>

    <script>
        $(document).ready(function() {
            $().ready(function() {
                $sidebar = $('.sidebar');
                $navbar = $('.navbar');
                $main_panel = $('.main-panel');

                $full_page = $('.full-page');

                $sidebar_responsive = $('body > .navbar-collapse');
                sidebar_mini_active = true;
                white_color = false;

                window_width = $(window).width();

                fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



                $('.fixed-plugin a').click(function(event) {
                    if ($(this).hasClass('switch-trigger')) {
                        if (event.stopPropagation) {
                            event.stopPropagation();
                        } else if (window.event) {
                            window.event.cancelBubble = true;
                        }
                    }
                });

                $('.fixed-plugin .background-color span').click(function() {
                    $(this).siblings().removeClass('active');
                    $(this).addClass('active');

                    var new_color = $(this).data('color');

                    if ($sidebar.length != 0) {
                        $sidebar.attr('data', new_color);
                    }

                    if ($main_panel.length != 0) {
                        $main_panel.attr('data', new_color);
                    }

                    if ($full_page.length != 0) {
                        $full_page.attr('filter-color', new_color);
                    }

                    if ($sidebar_responsive.length != 0) {
                        $sidebar_responsive.attr('data', new_color);
                    }
                });

                $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
                    var $btn = $(this);

                    if (sidebar_mini_active == true) {
                        $('body').removeClass('sidebar-mini');
                        sidebar_mini_active = false;
                        blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
                    } else {
                        $('body').addClass('sidebar-mini');
                        sidebar_mini_active = true;
                        blackDashboard.showSidebarMessage('Sidebar mini activated...');
                    }

                    // we simulate the window Resize so the charts will get updated in realtime.
                    var simulateWindowResize = setInterval(function() {
                        window.dispatchEvent(new Event('resize'));
                    }, 180);

                    // we stop the simulation of Window Resize after the animations are completed
                    setTimeout(function() {
                        clearInterval(simulateWindowResize);
                    }, 1000);
                });

                $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
                    var $btn = $(this);

                    if (white_color == true) {

                        $('body').addClass('change-background');
                        setTimeout(function() {
                            $('body').removeClass('change-background');
                            $('body').removeClass('white-content');
                        }, 900);
                        white_color = false;
                    } else {

                        $('body').addClass('change-background');
                        setTimeout(function() {
                            $('body').removeClass('change-background');
                            $('body').addClass('white-content');
                        }, 900);

                        white_color = true;
                    }


                });

                $('.light-badge').click(function() {
                    $('body').addClass('white-content');
                });

                $('.dark-badge').click(function() {
                    $('body').removeClass('white-content');
                });
            });
        });
    </script>
    <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
    <script>
        window.TrackJS &&
            TrackJS.install({
                token: "ee6fab19c5a04ac1a32a645abde4613a",
                application: "black-dashboard-free"
            });
    </script>
</body>

</html>