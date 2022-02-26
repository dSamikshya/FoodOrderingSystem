

    
<?php include('includes/header.php');?>

            
<?php include('includes/sidebar.php');?>
            


            <div class="content-page">
                
                <div class="content">
                    <div class="container">


                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Manage Restaurant</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="<?=$base_url?>?r=dashboard">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#">Restaurant </a>
                                        </li>
                                        <li class="active">
                                           Manage Restaurant
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        


<div class="row">
<div class="col-sm-6">  
 


</div>
                                 
                                 
                                    


                                   


                                    <div class="row">
										<div class="col-md-12">
											<div class="demo-box m-t-20">
<div class="m-b-30">
<a href="addsub.php">
<button id="addToTable" class="btn btn-success waves-effect waves-light">Add <i class="mdi mdi-plus-circle-outline" ></i></button>
</a>
 </div>

												<div class="table-responsive">
                                                    <table class="table m-0 table-colored-bordered table-bordered-primary">
                                                        <thead>
                                                            <tr>
                                                                
                                                                <th> RestaurantID</th>
                                                                <th>RestaurantName</th>
                                                                <th>OwnerName</th>
                                                          
                                                                <th>Email</th>
                                                                  <th>Password</th>
                                                                <th>PhoneNumber</th>
                                                                <th>Address</th>
                                                                <th>Image_Url</th>
                                                                <th>Create_date</th>
                                                                <th>Manage</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php


                                                        $restaurant = view_restaurant();
if($restaurant)
{
                                                        while($row = $restaurant->fetch_assoc())
	{
	echo "<tr><td>". $row["RestaurantID"] . 
    "</td><td>". $row["RestaurantName"] .
    "</td><td>". $row["OwnerName"] .
	"</td><td>" . $row["Email"] .
	"</td><td>" . $row["Password"] . 
    "</td><td>" . $row["PhoneNumber"] .
    "</td><td>" . $row["Address"] .
    "</td><td>" . $row["Image_Url"] .
	"</td><td>" . $row["Create_date"] . 
    
	"</td><td><a href='" . $base_url . 
	"?r=editrestaurant=" . $row["RestaurantID"] . 
	"'>edit </a> <a href='" . $base_url . 
	"?r=deleterestaurant&id=" . $row["RestaurantID"] . 
	"' >delete </a></td></tr>" ;
	}
	
}
else
{
	echo "no users found";
}

?>

</div>



</tbody>
                                                  
                                                    </table>
                                                </div>




											</div>

										</div>

							
									</div>
                                    

</tbody>
                                                  
                                                    </table>
                                                </div>




											</div>

										</div>

							
									</div>
                                    


                                    
<div class="row">
<div class="col-md-12">
<div class="demo-box m-t-20">
<div class="m-b-30">

 <h4><i class="fa fa-trash-o" ></i> Deleted SubCategories</h4>

 </div>

<div class="table-responsive">
   <table class="table m-0 table-colored-bordered table-bordered-danger">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th> Category</th>
                                                                <th>Sub Category</th>
                                                                <th>Description</th>
                                                          
                                                                <th>Posting Date</th>
                                                                  <th>Last updation Date</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>


</tbody>
                                                  
                                                    </table>
                                                </div>



                                                
											</div>

										</div>

							
									</div>                  
                                  



                                    </div> 

                </div> 
<?php include('includes/footer.php');?>
            