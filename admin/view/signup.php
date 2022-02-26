

    


 <?php include('includes/header.php');?>



           <?php include('includes/sidebar.php');?>
 

             <div class="content-page">
                
                <div class="content">
                    <div class="container">


                        <div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Sign Up</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="<?=$base_url?>?r=dashboard">Admin</a>
                                        </li>
                                    
                                        <li class="active">
                                         Sign Up
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title"><b>Sign Up</b></h4>
                                    <hr />
                                


<div class="row">
<div class="col-sm-6">  

</div>
</div>





 <!--<div class="row">
<div class="col-md-10">
<form class="form-horizontal" method="post" action="<?php echo $base_url ?>?r=signup">

<div class="form-group">
<label class="col-md-4 control-label">User Name</label>
<div class="col-md-8">
<input type="text" class="form-control" value="" name="username"  placeholder="Enter username" required>
</div>
</div>
                                         

<div class="form-group">
<label class="col-md-4 control-label">Email</label>
<div class="col-md-8">
<input type="email" class="form-control" value="" name="email" placeholder="Enter email" required>
</div>
</div>


<div class="form-group">
<label class="col-md-4 control-label">Password</label>
<div class="col-md-8">
<input type="password" class="form-control" value="" name="password" placeholder="Enter password" required>
</div>
</div>

 <div class="form-group">
<label class="col-md-4 control-label">&nbsp;</label>
<div class="col-md-8">
                                                  
<input type="submit" name="signup" value="SIGN UP" class="btn btn-success" />
                                <input type="reset" value="clear" name="clear" class="btn btn-secondary"> <br>
                                <hr>
                                <p> <a href="<?php $base_url?>?r=admin"> Already Have an account? Login </a> </p>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>


                                    </div>


                                    

                                  </div>
                            </div>
                        </div>
                        


                    </div> 

                </div> 
 -->



 <div class="container-signup ">
    
        <div class="row  justify-content-center">
            <div class="col-md-10 col-sm-12 col-lg-6">
                <h3> SIGN UP</h3><hr class="bg-warning">
                <div class="myborder">
                <form class="form-horizantal" method="post" enctype="multipart/form-data" action="<?php echo $base_url;?>?r=signup">
                     Email<input type="text" class="form-control" name="Email" placeholder="Enter user email" ><br>
                    FirstName<input type="text" class="form-control" name="FirstName" placeholder="Enter First Name"  ><br>
                    LastName<input type="text" class="form-control" name="LastName" placeholder="Enter Last Name"  ><br>
                    Phone Number<input type="text" class="form-control" name="PhoneNumber" placeholder="Enter Mobile Number"  ><br>
                    Password<input type="password" class="form-control" name="Password" placeholder="Enter password" ><br>
                    <!-- Confirm Password<input type="password" class="form-control" name="ConfirmPassword" placeholder="Password confirmation" required ><br> -->
                    Address<input type="text" class="form-control" name="Address" placeholder="Enter your address" ><br>

                     Image
                        <input type="file"  class="form-control"name="fileToUpload" id="fileToUpload" class="waves-effect left"><br>
                        
                        <input type="submit" name="SIGNUP" value="SIGN UP" class="btn btn-warning"/>
                   
                    <input type="reset" value="clear" class="btn btn-secondary">
                    </div>
                </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php include('includes/footer.php');?>

            