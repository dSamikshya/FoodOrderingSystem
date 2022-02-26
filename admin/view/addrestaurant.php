




        
       

 <?php include('includes/header.php');?>




           <?php include('includes/sidebar.php');?>
 

            <div class="content-page">
                
                
                    <div class="container">


                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Add Sub-Categories</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="<?=$base_url?>?r=dashboard">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#">Restaurant </a>
                                        </li>
                                        <li class="active">
                                            Add Restaurant
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title"><b>Add Restaurant </b></h4>
                                    <hr />
                        		


                        			
	                                     



    


        <div class="container-signup ">
    
    <div class="row  justify-content-center">
        <div class="col-md-10 col-sm-12 col-lg-6">
            <h3> List Your Restaurant</h3><hr class="bg-warning">
            <div class="myborder">
            <form class="form-horizantal" method="post" enctype="multipart/form-data" action="<?php echo $base_url;?>?r=addrestaurant">
            Restaurant Name<input type="text" class="form-control" name="RestaurantName" placeholder="Enter Restaurant Name"><br>
            Owner Name<input type="text" class="form-control" name="OwnerName" placeholder="Enter Owner Name"  ><br>
                 Email<input type="text" class="form-control" name="Email" placeholder="Enter user email" ><br>
               
               
                Password<input type="password" class="form-control" name="Password" placeholder="Enter password" ><br>
                Phone Number<input type="text" class="form-control" name="PhoneNumber" placeholder="Enter Mobile Number"  ><br>
                
                Address<input type="text" class="form-control" name="Address" placeholder="Enter your address" ><br>

              Image
                    <input type="file"  class="form-control"name="fileToUpload" id="fileToUpload" class="waves-effect left"><br> 
                    
                    <input type="submit" name="SIGNUP" value="Add Restaurant" class="btn btn-warning"/>
               
                <input type="reset" value="clear" class="btn btn-secondary">
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
                        </div>
                        


                    </div> 

                </div> 

<?php include('includes/footer.php');?>

            