

            
           <?php include('includes/header.php');?>
            
             <?php include('includes/sidebar.php');?>
            



        
            <div class="content-page">
            
                <div class="content">
                    <div class="container">


                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Contact Us</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="<?=$base_url?>?r=dashboard">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#">Pages</a>
                                        </li>
                                     
                                        <li class="active">
                                         Contact Us
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        

<div class="row">
<div class="col-sm-6">  


</div>
</div>


                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="p-6">
                                    <div class="">
                                        <form name="aboutus" method="post">
 <div class="form-group m-b-20">
<label for="exampleInputEmail1">Page Title</label>
<input type="text" class="form-control" id="pagetitle" name="pagetitle" value="" placeholder="Enter title" required>
</div>





         

     <div class="row">
<div class="col-sm-12">
 <div class="card-box">
<h4 class="m-b-30 m-t-0 header-title"><b>Page Details</b></h4>
<textarea class="summernote" name="pagedescription"  required></textarea>
</div>
</div>
</div>

<button type="submit" name="update" class="btn btn-success waves-effect waves-light">Update and Post</button>

                                        </form>
                                    </div>
                                </div> 
                            </div> 
                        </div>
                    



                    </div> 

                </div> 

           <?php include('includes/footer.php');?>

            