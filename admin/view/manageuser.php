



<?php include('includes/header.php');?>

        
<?php include('includes/sidebar.php');?>
            
            <div class="content-page">
                
                <div class="content">
                    <div class="container">


                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Manage User</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="<?=$base_url?>?r=dashboard">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#">User </a>
                                        </li>
                                        <li class="active">
                                           Manage User
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
<a href="adduser.php">
<button id="addToTable" class="btn btn-success waves-effect waves-light">Add <i class="mdi mdi-plus-circle-outline" ></i></button>
</a>
 </div>

												<div class="table-responsive">
                                                    <table class="table m-0 table-colored-bordered table-bordered-primary">
                                                        <thead>
                                                            <tr>
                                                                
                                                                <th>UserID</th>
                                                                <th>Email</th>
                                                                <th>Name</th>
                                                               
                                                          
                                                                <th>Password</th>
                                                                <th>Address</th>
                                                                <th>PhoneNumber</th>
                                                                <th> Image_Url</th>
                                                                <th>create_date </th>
                                                                <th>user_type</th>
                                                                <th>Manage</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
$users = view_users();
if($users)
{
                                                        while($row = $users->fetch_assoc())
	{
	echo "<tr><td>". $row["UserID"] . 
	"</td><td>" . $row["Email"] .
    "</td><td>" . $row["Name"] . 
   
	"</td><td>" . $row["Password"] . 
    "</td><td>" . $row["Address"] .
	"</td><td>" . $row["PhoneNumber"] . 
	 
	
	"</td><td>" . $row["Image_Url"] . 
	"</td><td>" . $row["Create_date"] . 
    "</td><td>" . $row["user_type"] . 
	"</td><td><a href='" . $base_url . 
	"?r=edituser=" . $row["UserID"] . 
	"'>edit </a> <a href='" . $base_url . 
	"?r=deleteuser=" . $row["UserID"] . 
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
                                    


                                    
<div class="row">
<div class="col-md-12">
<div class="demo-box m-t-20">
<div class="m-b-30">

 <h4><i class="fa fa-trash-o" ></i> Deleted Categories</h4>

 </div>

<div class="table-responsive">
<table class="table m-0 table-colored-bordered table-bordered-danger">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th> Category</th>
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
            
