

    
<?php include('includes/header.php');?>

            
<?php include('includes/sidebar.php');?>
            


            <div class="content-page">
                
                <div class="content">
                    <div class="container">


                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Manage Product</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="<?=$base_url?>?r=dashboard">Restaurant</a>
                                        </li>
                                        
                                        <li class="active">
                                           Manage Product
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
                                                                
                                                                <th> ProductID</th>
                                                                <th>ProductName</th>
                                                                <th>Price</th>
                                                                <th>Type</th>
                                                                <th>Image_Url</th>
                                                                <th>Create_date</th>
                                                                <th>Manage</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php


                                                        $product = view_product();
if($product)
{
                                                        while($row = $product->fetch_assoc())
	{
	echo "<tr><td>". $row["ProductID"] . 
    "</td><td>". $row["ProductName"] .
    "</td><td>". $row["Price"] .
	"</td><td>". $row["Type"] .
    "</td><td>" . $row["Image_Url"] .
	"</td><td>" . $row["Create_date"] . 
    
	"</td><td><a href='" . $base_url . 
	"?r=editproduct=" . $row["ProductID"] . 
	"'>edit </a> <a href='" . $base_url . 
	"?r=deleteproduct=" . $row["ProductID"] . 
	"' >delete </a></td></tr>" ;
	}
	
}
else
{
	echo "no product found";
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

 <h4><i class="fa fa-trash-o" ></i> Deleted Product</h4>

 </div>

<div class="table-responsive">
   <table class="table m-0 table-colored-bordered table-bordered-danger">
                                                        <thead>
                                                            <tr>
                                                            <th> ProductID</th>
                                                                <th>ProductName</th>
                                                                <th>Price</th>
                                                                <th>Type</th>
                                                                <th>Image_Url</th>
                                                                <th>Create_date</th>
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
            