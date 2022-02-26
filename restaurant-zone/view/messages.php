<?php include('includes/header.php');?>

        
<?php include('includes/sidebar.php');?>
            
            <div class="content-page">
                
                <div class="content">
                    <div class="container">


                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">View Messages From Customer</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="<?=$base_url?>?r=dashboard">Admin</a>
                                        </li>
                                       
                                        <li class="active">
                                           Customer Message
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
                                                                
                                                                <th>MessageID</th>
                                                                <th>Email</th>
                                                                <th>Name</th>
                                                               
                                                          
                                                                <th>Message</th>
                                                                
                                                                <th>sent_date </th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php

$message = view_message();
if($message)
{
                                                        while($row = $message->fetch_assoc())
	{
	echo "<tr><td>". $row["ContactID"] . 
	"</td><td>" . $row["Email"] .
    "</td><td>" . $row["Name"] . 
   
	"</td><td>" . $row["Comment"] . 
    
	
	 
	"</td><td>" . $row["date"]  ;
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
                                     
<?php include('includes/footer.php');?>
            
