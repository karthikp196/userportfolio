
<?php

include 'config.php';

if (!isset($_SESSION['id']))
{
   header('location:index.php');
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin Dashboard</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  <script src="js/script.js"></script>

  <style>
  .myinp {
    padding:6px 12px;
  }

  .myinp:focus {
    border-bottom:solid 1px gray;
  }

  .mysub {
    border:none;
    background:#007dc5;
    color:white;
    border-radius:6px;
    padding:6px 9px;
    cursor:pointer;
  }
  
  .addskil {
  display:flex;
  align-items: center;
  justify-content: center;
  margin:20px auto;
}

.formadd {
  display:flex;
  align-items: center;
  justify-content: center;
  margin:20px auto;
  background:white;
  padding:20px 80px;
  border-radius:8px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  position:fixed;
  top:40%;
  left:30%;
  transition:1.2s;
  visibility:hidden;
  z-index:999999;
}

.formexpadd {
  display:flex;
  align-items: center;
  justify-content: center;
  margin:20px auto;
  background:white;
  padding:20px 80px;
  border-radius:8px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  position:fixed;
  visibility:hidden;
  top:40%;
  left:30%;
  transition:1.2s;
 
  z-index:999999;
}

.mysubd {
  padding:6px 9px;
  border:None;
  background:red;
  color:white;
  border-radius:8px;
  cursor:pointer;
}
  </style>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="dashboard.php">
         <h3>Admin</h3>
        </a>
        <a class="navbar-brand brand-logo-mini" href="dashboard.php">
          <img src="images/logo-mini.svg" alt="logo" />
        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
          <li class="nav-item">
            <a href="#" class="nav-link">Schedule
              <span class="badge badge-primary ml-1">New</span>
            </a>
          </li>
          <li class="nav-item active">
            <a href="#" class="nav-link">
              <i class="mdi mdi-elevation-rise"></i>Reports</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="mdi mdi-bookmark-plus-outline"></i>Score</a>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <i class="mdi mdi-file-document-box"></i>
              <span class="count">7</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
              <div class="dropdown-item">
                <p class="mb-0 font-weight-normal float-left">You have 7 unread mails
                </p>
                <span class="badge badge-info badge-pill float-right">View all</span>
              </div>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="images/faces/face4.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium text-dark">David Grey
                    <span class="float-right font-weight-light small-text">1 Minutes ago</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    The meeting is cancelled
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="images/faces/face2.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium text-dark">Tim Cook
                    <span class="float-right font-weight-light small-text">15 Minutes ago</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    New product launch
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="images/faces/face3.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium text-dark"> Johnson
                    <span class="float-right font-weight-light small-text">18 Minutes ago</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    Upcoming board meeting
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-bell"></i>
              <span class="count">4</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <a class="dropdown-item">
                <p class="mb-0 font-weight-normal float-left">You have 4 new notifications
                </p>
                <span class="badge badge-pill badge-warning float-right">View all</span>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="mdi mdi-alert-circle-outline mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium text-dark">Application Error</h6>
                  <p class="font-weight-light small-text">
                    Just now
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="mdi mdi-comment-text-outline mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium text-dark">Settings</h6>
                  <p class="font-weight-light small-text">
                    Private message
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="mdi mdi-email-outline mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium text-dark">New user registration</h6>
                  <p class="font-weight-light small-text">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="profile-text">Hello, Richard V.Welsh !</span>
              <img class="img-xs rounded-circle" src="images/faces/face1.jpg" alt="Profile image">
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <a class="dropdown-item p-0">
                <div class="d-flex border-bottom">
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                    <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>
                  </div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                    <i class="mdi mdi-account-outline mr-0 text-gray"></i>
                  </div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                    <i class="mdi mdi-alarm-check mr-0 text-gray"></i>
                  </div>
                </div>
              </a>
              <a class="dropdown-item mt-2">
                Manage Accounts
              </a>
              <a class="dropdown-item">
                Change Password
              </a>
              <a class="dropdown-item">
                Check Inbox
              </a>
              <a href="logout.php" class="dropdown-item">
                Sign Out
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src="images/faces/face1.jpg" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Richard V.Welsh</p>
                  <div>
                    <small class="designation text-muted">Manager</small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
              <button class="btn btn-success btn-block">New Project
                <i class="mdi mdi-plus"></i>
              </button>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="dashboard.php">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Basic UI Elements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/typography.html">Typography</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/forms/basic_elements.html">
              <i class="menu-icon mdi mdi-backup-restore"></i>
              <span class="menu-title">Form elements</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/charts/chartjs.html">
              <i class="menu-icon mdi mdi-chart-line"></i>
              <span class="menu-title">Charts</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Tables</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/icons/font-awesome.html">
              <i class="menu-icon mdi mdi-sticker"></i>
              <span class="menu-title">Icons</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-restart"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/login.html"> Login </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/register.html"> Register </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/error-404.html"> 404 </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/error-500.html"> 500 </a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row purchace-popup">
           
          </div>

          <div class="row">
            <div class="col-lg-7 grid-margin stretch-card">
              <!--weather card-->
              <div class="card card-weather">
                <div class="card-body">
                  <div class="weather-date-location">
                    <h3>Monday</h3>
                    <p class="text-gray">
                      <span class="weather-date">25 October, 2016</span>
                      <span class="weather-location">London, UK</span>
                    </p>
                  </div>
                  <div class="weather-data d-flex">
                    <div class="mr-auto">
                      <h4 class="display-3">21
                        <span class="symbol">&deg;</span>C</h4>
                      <p>
                        Mostly Cloudy
                      </p>
                    </div>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="d-flex weakly-weather">
                    <div class="weakly-weather-item">
                      <p class="mb-0">
                        Sun
                      </p>
                      <i class="mdi mdi-weather-cloudy"></i>
                      <p class="mb-0">
                        30°
                      </p>
                    </div>
                    <div class="weakly-weather-item">
                      <p class="mb-1">
                        Mon
                      </p>
                      <i class="mdi mdi-weather-hail"></i>
                      <p class="mb-0">
                        31°
                      </p>
                    </div>
                    <div class="weakly-weather-item">
                      <p class="mb-1">
                        Tue
                      </p>
                      <i class="mdi mdi-weather-partlycloudy"></i>
                      <p class="mb-0">
                        28°
                      </p>
                    </div>
                    <div class="weakly-weather-item">
                      <p class="mb-1">
                        Wed
                      </p>
                      <i class="mdi mdi-weather-pouring"></i>
                      <p class="mb-0">
                        30°
                      </p>
                    </div>
                    <div class="weakly-weather-item">
                      <p class="mb-1">
                        Thu
                      </p>
                      <i class="mdi mdi-weather-pouring"></i>
                      <p class="mb-0">
                        29°
                      </p>
                    </div>
                    <div class="weakly-weather-item">
                      <p class="mb-1">
                        Fri
                      </p>
                      <i class="mdi mdi-weather-snowy-rainy"></i>
                      <p class="mb-0">
                        31°
                      </p>
                    </div>
                    <div class="weakly-weather-item">
                      <p class="mb-1">
                        Sat
                      </p>
                      <i class="mdi mdi-weather-snowy"></i>
                      <p class="mb-0">
                        32°
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <!--weather card ends-->
            </div>
         
          </div>
          <div class="col-lg-10">
          
          <div class="form_up">
            <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file">
            <input type="submit" name="submit" id="" value="upload">
            </form>
            <div class="col-lg-8 img_disp">
            <h4>
            Use the image size of 1920*1080
            </h4>
            <?php
             $sql= "SELECT * FROM image_upload";
             $res = mysqli_query($conn,$sql);
             while($row=mysqli_fetch_assoc($res)){
               ?>
              <img src="<?php echo $row['img_dir'] ?>" class="responsive" alt="">
            <?php
             }

            ?>
            </div>
            </div>
          </div>
          <div class="row">

            <?php
              $sql= "SELECT * FROM name";
              $res = mysqli_query($conn,$sql);
              while($row=mysqli_fetch_assoc($res)){
            ?>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <h3>Name</h3>
                  <input type="text" id="fname" value="<?php echo $row['firstname'];  ?>" class="">
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <h3>Last Name</h3>
                  <input type="text" id="lastname"  value="<?php echo $row['lastname']; ?>" class="myinp">
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <h3>Position</h3>
                  <input type="text" id="role"  value="<?php echo $row['position']; ?>" class="myinp">
                </div>
              </div>
            </div>

            
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                <h3>
                  Update your Details
                </h3>
                  <input type="Submit"  value="Update" id="sbmt" class="mysub">
                </div>
              </div>
            </div>

            <?php
                }
            ?>
          
           
          </div>

          <div class="">
            
            <div class="row">
            <?php
              $sql= "SELECT * FROM social_links";
              $res = mysqli_query($conn,$sql);
              while($row=mysqli_fetch_assoc($res)){
            ?>
            <div class="col-xl-6 col-lg-3 col-md-6 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <h3>Social media links</h3>
                    <p>
                      Face book => <input type="text" id="fb_i" value="<?php echo $row['facebook']?> "> <input type="submit"  id="fb_u" value="update">
               
                      </p>

                      <p>
                      Twitter => <input type="text" id="tw_i" value="<?php echo $row['twitter']?> ">  <input type="submit"  id="tw_u" value="update">
                      </p>

                      <p>
                      Dribble => <input type="text" id="dr_i" value="<?php echo $row['dribble']?> ">  <input type="submit"  id="dr_u" value="update">
                      </p>
                      <p>
                      Behance => <input type="text" id="bh_i" value="<?php echo $row['behance']?> ">  <input type="submit"  id="bh_u" value="update">
                      </p>

                      <p>
                      Linkedin => <input type="text" id="lk_i" value="<?php echo $row['linkdin']?> "> <input type="submit"  id="lk_u" value="update">
                      </p>
                     
                     
                     
                     
                    </p>
                </div>
              </div>
            </div>
            <?php
              }
            ?>
            </div>

          
          <div class="row">
            <?php
              $sql= "SELECT * FROM introsection";
              $res = mysqli_query($conn,$sql);
              while($row=mysqli_fetch_assoc($res)){
            ?>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <h3>Intro section</h3>
                  <input type="text" id="intro" value="<?php echo $row['intro'];  ?>" class="">
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <h3>Intro Below section</h3>
                  <input type="text" id="introb"  value="<?php echo $row['introbelow']; ?>" class="myinp">
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <h3>Full Details </h3>
                 <textarea   cols="30" value="" id="txtdtl" rows="10"><?php echo $row['details'];  ?></textarea>
                </div>
              </div>
            </div>

            
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                <h3>
                  Update your Details
                </h3>
                  <input type="Submit"  value="Update" id="udpt" class="mysub">
                </div>
              </div>
            </div>

            <?php
                }
            ?>
          
           
          </div>

                    
          <div class="row">
            <?php
              $sql= "SELECT * FROM experience";
              $res = mysqli_query($conn,$sql);
              while($row=mysqli_fetch_assoc($res)){
            ?>
            <div class="col-xl-4 col-lg-3 col-md-4 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <h3>Title</h3>
                  <input type="text" id="titlexp_<?php echo $row['id'] ?>" class="<?php echo $row['id']; ?>" value="<?php echo $row['title'];  ?>" class="">
                </div>
              </div>
            </div>
     

            <div class="col-xl-4 col-lg-4 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <h3>Write What you Know </h3>
                 <textarea   cols="30" value="" class="<?php echo $row['id']; ?>" id="detailexp_<?php echo $row['id'] ?>" rows="10"><?php echo $row['alldetails'];  ?></textarea>
                </div>
              </div>
            </div>

            
            <div class="col-xl-4 col-lg-4 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                <h3>
                  Update your Details
                </h3>
                  <input type="Submit"  value="Update" id="<?php echo $row['id']; ?>" class="mysub  exp_upd">   <input type="Submit"  value="Delete" id="<?php echo $row['id']; ?>" class="mysubd expdlt">
                </div>
              </div>
            </div>

            <?php
                }
            ?>

           

          <div class="container addskil">
                <input type="submit" value="Add one more Experience" id="ad_exp" class="mysub">
           </div>

           <div class="formexpadd container">
              <div class="into">
                <div class="mark_canc">
                <i class="far fa-times-circle exp_cnc"></i>
                </div>
              </div>
              <div class="inpadd">
                <p>
                 Add experience Title:
                </p>
                <p>
                  <input type="text" id="addexpt">
                </p>

                <p>
                  Write what you know about :
                </p>
                <p>
                <textarea id="addexd" rows="6" cols="40"></textarea>
                </p>

                <p>
                  <input type="submit" class="mysub newexp" value="add experience">
                </p>
              </div>
           </div>
          
           
          </div>
       
       
          <div class="row">

          <?php
            $sql= "SELECT * FROM skilltable";
            $res=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_assoc($res))
            {
          ?>
            <div class="col-lg-12 grid-margin my_tb">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Skills</h4>
                  <div class="table-responsive">

                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                           Skill name
                          </th>
                          <th>
                          skill value
                          </th>
                          <th>
                            Progress
                          </th>
                         
                        </tr>
                      </thead>
                      <tbody class="skil_tbl">
                        <tr>
                        
                          <td class="font-weight-medium">
                           <?php echo $row['id'] ?>
                          </td>
                          <td>
                            <input type="text" id="skill_id_<?php echo $row['id'] ?>" value="<?php echo $row['id'] ?>" hidden>

                            <input type="text" id="skill_name_<?php echo $row['id'] ?>"  value= "<?php echo $row['skill'] ?>">
                          </td>
                          <td>
                            <input type="text"  id="skill_level_<?php echo $row['id'] ?>" value= "<?php echo $row['skillvalue'] ?>">
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-success progress-bar-striped" role="progressbar" style="width:<?php echo $row['skillvalue'] ?>%" aria-valuenow="<?php echo $row['skillvalue'] ?>" aria-valuemin="0"
                                aria-valuemax="100"></div>
                              </div>
                          </td>
                        
                        </tr>
                       
                      </tbody>
                     
                    </table>
                       <div class="upd_skil">
                           <input type="submit" id="<?php echo $row['id'] ?>" class="mysub skillupd" value="submit">   <input type="submit" id="<?php echo $row['id'] ?>" class="mysubd skilldlt" value="Delete">
                      </div>

                      <div class="dlt_skil">
                          
                      </div>
                  </div>
                </div>
              </div>
            </div>
         
         <?php
            }
         ?>

           <div class="container addskil">
                <input type="submit" value="Add one more skill" id="ad_mys" class="mysub">
           </div>

           <div class="formadd container">

           <div class="into">
                <div class="mark_canc">
                <i class="far fa-times-circle skl_cnc"></i>
                </div>
              </div>
              <div class="inpadd">
                <p>
                  Skill Name :
                </p>
                <p>
                  <input type="text" id="addsk">
                </p>

                <p>
                  Skill Value :
                </p>
                <p>
                  <input type="text" id="addval">
                </p>
                <p>
                  <input type="submit" value="update" id="addall" class="mysub">
                </p>
              </div>
           </div>

          </div>

          <div class="row">
            <?php
              $sql= "SELECT * FROM contact_footer";
              $res = mysqli_query($conn,$sql);
              while($row=mysqli_fetch_assoc($res)){
            ?>
            <div class="col-xl-6col-lg-6 col-md-6 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
             <div class="card-body"> <h2>Footer Contact Details</h2> </div>
                <div class="card-body">
                  <h3>Contact</h3>
                  <input type="text" id="title_c" value="<?php echo $row['c_title'] ?>" class="">
                </div>

                <div class="card-body">
                  <h3>Hire</h3>
                  <input type="text" id="hire_c" value="<?php echo $row['c_hire'] ?>" class="">
                </div>

                <div class="card-body">
                  <h3>Location</h3>
                  <input type="text" id="location_c" value="<?php echo $row['c_location'] ?>" class="">
                </div>

                <div class="card-body">
                  <h3>E-mail</h3>
                  <input type="text" id="email_c" value="<?php echo $row['c_email'] ?>" class="">
                </div>

                <div class="card-body">
                  <h3>Phone</h3>
                  <input type="text" id="phone_c" value="<?php echo $row['c_phone'] ?>" class="">
                </div>

                <div class="card-body">
                  <h3>web</h3>
                  <input type="text" id="web_c" value="<?php echo $row['c_web'] ?>" class="">
                </div>

                <div class="card-body">
                  
                  <button id="up_call" class="mysub">Update All</button>
                </div>

              </div>
            </div>

            <?php
              }

            ?>

            <div class="container">
              <p class="test_j">
              
              </p>
            </div>

          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title mb-4">Manage Tickets</h5>
                  <div class="fluid-container">
                    <div class="row ticket-card mt-3 pb-2 border-bottom pb-3 mb-3">
                      <div class="col-md-1">
                        <img class="img-sm rounded-circle mb-4 mb-md-0" src="images/faces/face1.jpg" alt="profile image">
                      </div>
                      <div class="ticket-details col-md-9">
                        <div class="d-flex">
                          <p class="text-dark font-weight-semibold mr-2 mb-0 no-wrap">James :</p>
                          <p class="text-primary mr-1 mb-0">[#23047]</p>
                          <p class="mb-0 ellipsis">Donec rutrum congue leo eget malesuada.</p>
                        </div>
                        <p class="text-gray ellipsis mb-2">Donec rutrum congue leo eget malesuada. Quisque velit nisi, pretium ut lacinia in, elementum id enim
                          vivamus.
                        </p>
                        <div class="row text-gray d-md-flex d-none">
                          <div class="col-4 d-flex">
                            <small class="mb-0 mr-2 text-muted text-muted">Last responded :</small>
                            <small class="Last-responded mr-2 mb-0 text-muted text-muted">3 hours ago</small>
                          </div>
                          <div class="col-4 d-flex">
                            <small class="mb-0 mr-2 text-muted text-muted">Due in :</small>
                            <small class="Last-responded mr-2 mb-0 text-muted text-muted">2 Days</small>
                          </div>
                        </div>
                      </div>
                      <div class="ticket-actions col-md-2">
                        <div class="btn-group dropdown">
                          <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Manage
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">
                              <i class="fa fa-reply fa-fw"></i>Quick reply</a>
                            <a class="dropdown-item" href="#">
                              <i class="fa fa-history fa-fw"></i>Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                              <i class="fa fa-check text-success fa-fw"></i>Resolve Issue</a>
                            <a class="dropdown-item" href="#">
                              <i class="fa fa-times text-danger fa-fw"></i>Close Issue</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row ticket-card mt-3 pb-2 border-bottom pb-3 mb-3">
                      <div class="col-md-1">
                        <img class="img-sm rounded-circle mb-4 mb-md-0" src="images/faces/face2.jpg" alt="profile image">
                      </div>
                      <div class="ticket-details col-md-9">
                        <div class="d-flex">
                          <p class="text-dark font-weight-semibold mr-2 mb-0 no-wrap">Stella :</p>
                          <p class="text-primary mr-1 mb-0">[#23135]</p>
                          <p class="mb-0 ellipsis">Curabitur aliquet quam id dui posuere blandit.</p>
                        </div>
                        <p class="text-gray ellipsis mb-2">Pellentesque in ipsum id orci porta dapibus. Sed porttitor lectus nibh. Curabitur non nulla sit amet
                          nisl.
                        </p>
                        <div class="row text-gray d-md-flex d-none">
                          <div class="col-4 d-flex">
                            <small class="mb-0 mr-2 text-muted">Last responded :</small>
                            <small class="Last-responded mr-2 mb-0 text-muted">3 hours ago</small>
                          </div>
                          <div class="col-4 d-flex">
                            <small class="mb-0 mr-2 text-muted">Due in :</small>
                            <small class="Last-responded mr-2 mb-0 text-muted">2 Days</small>
                          </div>
                        </div>
                      </div>
                      <div class="ticket-actions col-md-2">
                        <div class="btn-group dropdown">
                          <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Manage
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">
                              <i class="fa fa-reply fa-fw"></i>Quick reply</a>
                            <a class="dropdown-item" href="#">
                              <i class="fa fa-history fa-fw"></i>Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                              <i class="fa fa-check text-success fa-fw"></i>Resolve Issue</a>
                            <a class="dropdown-item" href="#">
                              <i class="fa fa-times text-danger fa-fw"></i>Close Issue</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row ticket-card mt-3">
                      <div class="col-md-1">
                        <img class="img-sm rounded-circle mb-4 mb-md-0" src="images/faces/face3.jpg" alt="profile image">
                      </div>
                      <div class="ticket-details col-md-9">
                        <div class="d-flex">
                          <p class="text-dark font-weight-semibold mr-2 mb-0 no-wrap">John Doe :</p>
                          <p class="text-primary mr-1 mb-0">[#23246]</p>
                          <p class="mb-0 ellipsis">Mauris blandit aliquet elit, eget tincidunt nibh pulvinar.</p>
                        </div>
                        <p class="text-gray ellipsis mb-2">Nulla quis lorem ut libero malesuada feugiat. Proin eget tortor risus. Lorem ipsum dolor sit amet.</p>
                        <div class="row text-gray d-md-flex d-none">
                          <div class="col-4 d-flex">
                            <small class="mb-0 mr-2 text-muted">Last responded :</small>
                            <small class="Last-responded mr-2 mb-0 text-muted">3 hours ago</small>
                          </div>
                          <div class="col-4 d-flex">
                            <small class="mb-0 mr-2 text-muted">Due in :</small>
                            <small class="Last-responded mr-2 mb-0 text-muted">2 Days</small>
                          </div>
                        </div>
                      </div>
                      <div class="ticket-actions col-md-2">
                        <div class="btn-group dropdown">
                          <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Manage
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">
                              <i class="fa fa-reply fa-fw"></i>Quick reply</a>
                            <a class="dropdown-item" href="#">
                              <i class="fa fa-history fa-fw"></i>Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                              <i class="fa fa-check text-success fa-fw"></i>Resolve Issue</a>
                            <a class="dropdown-item" href="#">
                              <i class="fa fa-times text-danger fa-fw"></i>Close Issue</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
              <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with
              <i class="mdi mdi-heart text-danger"></i>
            </span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>