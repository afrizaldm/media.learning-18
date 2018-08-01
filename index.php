<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Media Pembelajaran</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body style="background: url(file/images/blackboard.jpg); background-size:cover ">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li class="hov"><a href="index.php"><span class="glyphicon glyphicon-home"> Media Pembelajaran Hybrid</span></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <!-- Login Form -->
        <div class="container">    
            <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
                <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Masuk Ke Media Pembelajaran</div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >
                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                        <form id="loginform" class="form-horizontal" role="form" method="POST" action="login-check.php">
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="login-username" type="text" class="form-control" name="userid" value="" placeholder="Username">                                        
                            </div>

                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input id="login-password" type="password" class="form-control" name="passwd" placeholder="Password">
                            </div>
                                                        
                            <div style="margin-top:10px" class="form-group">
                                <!-- Button -->
                                <div class="col-sm-12 controls">
                                    <button id="btn-login" class="btn btn-success">
                                        <i class="fa fa-sign-in"></i> Masuk
                                    </button>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12 control">
                                    <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                        Tidak punya akun?
                                        <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                            Daftar disini!
                                        </a>
                                    </div>
                                </div>
                            </div>    
                        </form>
                    </div>
                </div>
            </div>
            
            <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="panel-title">Halaman Pendaftaran</div>
                    </div>
                    
                    <div class="panel-body" >
                        <form id="signupform" class="form-horizontal" role="form" method="POST" action="register-process.php">
                            <div id="signupalert" style="display:none" class="alert alert-danger">
                                <p>Error:</p>
                                <span></span>
                            </div>
                            
                            <div class="form-group">
                                <label for="firstname" class="col-md-3 control-label">NIS</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="nis" placeholder="Nomor Induk Siswa" required="">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="firstname" class="col-md-3 control-label">Nama Depan</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="firstname" placeholder="Nama Depan" required="">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="lastname" class="col-md-3 control-label">Nama Belakang</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="lastname" placeholder="Nama Belakang" required="">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="email" class="col-md-3 control-label">Alamat</label>
                                <div class="col-md-9">
                                    <textarea rows="5" cols="50" name="address" required=""></textarea>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="email" class="col-md-3 control-label">Email</label>
                                <div class="col-md-9">
                                    <input type="email" class="form-control" name="email" placeholder="Alamat Email" required="">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="email" class="col-md-3 control-label">Username</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="usernm" placeholder="Username" required="">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="password" class="col-md-3 control-label">Password</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" name="passwd" placeholder="Password" required="">
                                </div>
                            </div>

                            <div class="form-group">
                                <!-- Button -->                                        
                                <div class="col-md-offset-3 col-md-9">
                                    <button id="btn-signup" class="btn btn-info"><i class="fa fa-users"></i> Daftar </button>
                                    <span style="margin-left:8px; margin-right:8px;">atau</span>
                                    <button id="btn-fbsignup" type="button" class="btn btn-success">
                                        <a style="text-decoration: none; color: white;" id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">
                                            <i class="fa fa-user"></i> Masuk 
                                        </a>
                                    </button>
                                </div>
                            </div>

                            <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">
                                <div class="col-md-offset-3 col-md-9">
                                    <div style="float:right; font-size: 85%; position: relative; top:-10px">
                                        Sudah punya akun?
                                        <a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Silahkan Masuk</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                     </div>
                </div>
            </div>
        </div>
    </body>
</html>
