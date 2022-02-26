 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        
        
        
        <title> Admin Dashboard</title>

    
        <link href="../plugins/summernote/summernote.css" rel="stylesheet" />

        
        <link href="../plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

    
        <link href="../plugins/jquery.filer/css/jquery.filer.css" rel="stylesheet" />
        <link href="../plugins/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css" rel="stylesheet" />

        
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
        <script src="assets/js/modernizr.min.js"></script>
  <style>
  .fade:not(.show) {
    opacity: 1;
}
.message{
  margin-top:100px;
}</style>
    </head>
    <body>
 <div class="topbar">

                <div class="topbar-left">
                    
                    <a href="#">
                        <img src="images/log.png" alt="" height="65" width="140">
                    </a>
                </div>

                <div class="navbar navbar-default" role="navigation">
                    <div class="container">

                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <button class="button-menu-mobile open-left waves-effect">
                                    <i class="mdi mdi-menu"></i>
                                </button>
                            </li>
                     
                    
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                          

                            <li class="dropdown user-box">
                                <a href="" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown" aria-expanded="true">
                                    <img src="assets/images/a.gif" alt="user-img" class="img-circle user-img">
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                    <li>
                                        <h5>Admin, What's Up</h5>
                                    </li>

                                    <li><a href="<?=$base_url?>?r=signup"><i class="ti-settings m-r-5"></i>Sign Up</a></li>
                              
                                    <li><a href="<?=$base_url?>?r=pass"><i class="ti-settings m-r-5"></i> Change Password</a></li>
                           
                                    <li><a href="<?=$base_url?>?r=logout"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                                </ul>
                            </li>

                        </ul> 

                    </div>
                </div>
            </div>
            
            <div class="fixed-left">

        
        <div id="wrapper">
        <?php
            if (hasFlash('message')) {
                $falshError = getFlash('message');
                foreach ($falshError as $fe) {
                    ?>
                    <div class=" message container-fluid" style="min-height: 100px;"> 
                    <div class="alert alert-<?php echo $fe['type']; ?> fade in alert-dismissable">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                        <?php
                        echo empty($fe['title']) ? '' : "<strong>" . $fe['title'] . "</strong> ";
                        echo $fe['body'];
                        ?>
                    </div>
                    <?php
                }
            }
            ?>
        