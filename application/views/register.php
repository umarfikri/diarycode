<!DOCTYPE html>

<html lang="en">

<head>
  <base href="<?php echo base_url(); ?>" />
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img//apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img//favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Diary Code
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css?v=2.4.0" rel="stylesheet" />
  <link href="assets/css/paper-kit.css?v=2.4.0" rel="stylesheet" />
  <!--Custom-->
  <script src="assets/ckeditor/ckeditor.js"></script>
  <script src="https://kit.fontawesome.com/f0dc1777fc.js" crossorigin="anonymous"></script>
</head>

<body class="landing-page sidebar-collapse">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="300">
<div class="container">
    <div class="navbar-translate">
    <a class="navbar-brand" <?= ($module == 'index') ? 'nav-link active' : 'nav-link';?> title="Coded by Auri" href="login">
        Diary Code
    </a>    
    <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-bar bar1"></span>
        <span class="navbar-toggler-bar bar2"></span>
        <span class="navbar-toggler-bar bar3"></span>
    </button>
    </div>     
</div>
</nav>
<!-- End Navbar -->
    
<div class="section landing-section"  data-parallax="true" style="background-image: url('assets/default/other_bg.jpg');">
    <div class="container" style="margin-top: 6rem!important;">        
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center">Register</h3>
                        <br>
                        <div class="row">
                            <div class="col-md-12 ml-auto mr-auto">
                                <form method="POST" enctype="multipart/form-data">
                                    <h5 class="text-center">Profile</h5>
                                    <div class="form-group">
                                        <label>Full Name</label>
                                        <input type="text" class="form-control" name="fullname">                                
                                    </div>
                                    <div class="form-group">
                                        <label>Nickname</label>
                                        <input type="text" class="form-control" name="nickname">                                
                                    </div>
                                    <div class="form-group">
                                        <label>Birthday</label>
                                        <input type="date" class="form-control" name="birthday">                                
                                    </div>

                                    <div class="form-group">
                                        <label>Profile Description</label>
                                        <div class="col-sm-12">                                
                                            <textarea class="form-control" name="description" style="height: 100px"></textarea>                                                                      
                                        </div>                                                               
                                    </div>           
                                    <div class="form-group">
                                        <label>Motto</label>
                                        <input type="text" class="form-control" name="motto">                                
                                    </div>      

                                    <h5 class="text-center">Social Media</h5>
                                    <div class="form-group">
                                        <label>Facebook Link</label>
                                        <input type="text" class="form-control" name="facebook">                                
                                    </div>   
                                    <div class="form-group">
                                        <label>Twitter Link</label>
                                        <input type="text" class="form-control" name="twitter">                                
                                    </div>   
                                    <div class="form-group">
                                        <label>Instagram Link</label>
                                        <input type="text" class="form-control" name="insta">                                
                                    </div>              

                                    <h5 class="text-center">Background Image</h5>
                                    <div class="form-group">
                                        <label>Profile Image</label>
                                        <input class="form-control" type="file" name="profileimage"> 
                                        <!-- <input class="form-control" type="file" name="imagefile" id="formFile">                                  -->
                                    </div>       
                                    <div class="form-group">
                                        <label>Home Page Background Image</label>
                                        <input class="form-control" type="file" name="homeimage">                                
                                    </div>
                                    <div class="form-group">
                                        <label>Other Backround Image</label>
                                        <input class="form-control" type="file" name="otherimage">                                
                                    </div>                                             
                                    
                                    <h5 class="text-center">Health</h5>                                                                        
                                    <div class="form-group">
                                        <label>Height (cm)</label>
                                        <input type="text" class="form-control" name="height">                                
                                    </div>
                                    <div class="form-group">
                                        <label>Weight (kg)</label>
                                        <input type="text" class="form-control" name="weight">                                
                                    </div>
                                    <div class="form-group">
                                        <label>Desired Weight (kg)</label>
                                        <input type="text" class="form-control" name="aimweight">                                
                                    </div>
                                    <div class="row justify-content-left">
                                        <label class="ml-4">Gender: </label> 
                                        <div class="form-check-radio ml-4">
                                            <label class="form-check-label">
                                                <input class="form-check-input " type="radio" name="gender" value="0">
                                                Male
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check-radio ml-4">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="gender" value="1">
                                                Female
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                    </div>

                                    <h5 class="text-center">Account</h5>
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" class="form-control" name="username">                                
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="text" class="form-control" name="password">                                
                                    </div>

                                    <button name="submit" value="submit" class="btn btn-primary mt-4">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>        
                </div>
            </div>
        </div>           
    </div>      
</div>

  <footer class="footer   footer-white ">
    <div class="container">
      <div class="row">
        <nav class="footer-nav">
          <ul>
            <li>
              <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>
            </li>
            <li>
              <a href="http://blog.creative-tim.com/" target="_blank">Blog</a>
            </li>
            <li>
              <a href="https://www.creative-tim.com/license" target="_blank">Licenses</a>
            </li>
          </ul>
        </nav>
        <div class="credits ml-auto">
          <span class="copyright">
            ©
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="fa fa-heart heart"></i> by Creative Tim
          </span>
        </div>
      </div>
    </div>
  </footer>
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="assets/js/plugins/moment.min.js"></script>
  <script src="assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
  <!-- Control Center for Paper Kit: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/paper-kit.js?v=2.2.0" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
</body>

</html>

  