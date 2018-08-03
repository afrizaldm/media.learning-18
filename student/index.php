<?php
include './access.php';
include '../config/connection.php';
include '../config/statistik.php';
error_reporting(0);
session_start();
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Student | Media Learning</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="../css/metisMenu.min.css" type="text/css">
        <link rel="stylesheet" href="../css/startmin.css" type="text/css">
        <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="../plugin/dataTables/dataTables.bootstrap.css" type="text/css">
        <link rel="stylesheet" href="../css/mystyle.css" type="text/css">
        <!-- jQuery -->
        <style>
        .logo {
			margin-top: 36px;
			width: 230px;
		}

		.animate-bounce {
			animation-name: bounce;
			animation-duration: 1.2s;
    		animation-delay: 0.5s;
			animation-iteration-count: infinite;
		}

		@keyframes bounce {
			from,
			20%,
			53%,
			80%,
			to {
				-webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
				animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
				-webkit-transform: translate3d(0, 0, 0);
				transform: translate3d(0, 0, 0);
			}

			40%,
			43% {
				-webkit-animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
				animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
				-webkit-transform: translate3d(0, -30px, 0);
				transform: translate3d(0, -30px, 0);
			}

			70% {
				-webkit-animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
				animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
				-webkit-transform: translate3d(0, -15px, 0);
				transform: translate3d(0, -15px, 0);
			}

			90% {
				-webkit-transform: translate3d(0, -4px, 0);
				transform: translate3d(0, -4px, 0);
			}
		}
        </style>
        <script src="../js/jquery-3.1.1.min.js"></script>
    </head>
    
    <body class="background">
        <div id="wrapper">
            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#" style="cursor: default;">Student's Page</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Top Navigation: Left Menu -->
                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="index.php"><i class="fa fa-home fa-fw"></i> Home</a></li>
                </ul>

                <!-- Top Navigation: Right Menu -->
                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> <?php echo $_SESSION['nama1'] ?> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="index.php?page=profile"><i class="fa fa-user fa-fw"></i> User Profile</a></li>
                            <li><a href="index.php?page=setting"><i class="fa fa-gear fa-fw"></i> Settings</a></li>
                            <li class="divider"></li>
                            <li><a href="../logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>

                <!-- Sidebar -->
                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li><a href="index.php?page=dashboard" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a></li>
                            <li><a href="index.php?page=belajar"><i class="fa fa-book fa-fw"></i> Ruang Belajar</a></li>
                            <li><a href="index.php?page=diskusi"><i class="fa fa-comment fa-fw"></i> Ruang Diskusi</a></li>
                            <li><a href="index.php?page=tugas"><i class="fa fa-file-text fa-fw"></i> Ruang Tugas</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    
                    <div id="content">
                        <?php include "content.php"; ?>
                    </div>
                </div>
            </div>
        </div>
        
        
        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>
        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>
        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>
        
        <script src="../plugin/dataTables/jquery.dataTables.js"></script>
        <script src="../plugin/dataTables/dataTables.bootstrap.js"></script>

    </body>
</html>
