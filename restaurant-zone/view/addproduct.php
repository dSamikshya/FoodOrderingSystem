<?php include('includes/header.php');?>
<?php include('includes/sidebar.php');?>
 

            <div class="content-page">
                
                
                    <div class="container">


                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Add Products</h4>
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
                                    <h4 class="m-t-0 header-title"><b>Add Product </b></h4>
                                    <hr />
                        		


                        			
	                                     



    


        <div class="container-signup ">
    
    <div class="row  justify-content-center">
        <div class="col-md-10 col-sm-12 col-lg-6">
            <h3> Add Product To Your Restaurant Menu</h3><hr class="bg-warning">
            <div class="myborder">
            <form class="form-horizantal" method="post" enctype="multipart/form-data" action="<?php echo $base_url;?>?r=addproduct">
            Product Name<input type="text" class="form-control" name="ProductName" placeholder="Enter Product Name"><br>
            Price<input type="text" class="form-control" name="Price" placeholder="Enter Price"  ><br>
              
            Choose Food Type<br>
    <input type="radio"  name="FoodType" value="Veg">Veg
<input type="radio"  name="FoodType" value="NonVeg">Non Veg
<!-- <label for="NonVeg"> --><!-- </label> --><br>

  
  
    <br>

              Image
                    <input type="file"  class="form-control"name="fileToUpload" id="fileToUpload" class="waves-effect left"><br>
                    <label for="RestaurantID">Choose a Restaurant:</label>
  <select  name="RestaurantID" class="form-control">
  <?php
 $restaurant=view_restaurant();
 if($restaurant){
  while($row=$restaurant->fetch_assoc()){
    echo "<option value='".$row["RestaurantID"]."'>".$row["RestaurantName"]."</option>";
  }
}
    ?>
  </select><br>
                <input type="submit" name="ADD" value="ADD " class="btn btn-warning"/>
                 
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

            