<?php include'view/header.php'?>



 <div class="container-bg text-center">
 
                <div class="col-md-12 col-sm-12 col-lg-12">
                    <div class="page-title-inner">
                        <span>order from muliple resturant
                        <h4>Welcome To Foodoko</h4>
                        <h1 itemprop="headline">
                        Login </h1>
                        </span>
                    </div>
                </div>
</div> 
</div>


<h5><a class="signup text-center" href="<?php echo $base_url ?>?r=signup"> Not a member?sign up</a></h5>
    <div class="container-login ">
        <div class="row  justify-content-center">
            <div class="col-md-12 col-sm-12 col-lg-7">
                <h3> LOG IN</h3><hr class="bg-warning">
                <div class="myborder">
                <form class="form-horizantal" method="post" action="<?php echo $base_url; ?>?r=login">
                Email<input type="text" class="form-control" name="Email" placeholder="ENTER USERNAME" required ><br>
                    Password<input type="password" class="form-control" name="Password" placeholder="ENTER PASSWORD" required ><br>
                    <input type="checkbox"  name="Checkbox" > &nbsp Rememeber me??</br><br>
                    <input type="submit" name="login" value="LOG IN" class="btn btn-warning"/>
                    <input type="reset" value="clear" class="btn btn-secondary"><br>
                    
                    <label><h6><a class="signup " href="<?php echo $base_url ?>?r=signup"> Not a member?sign up</a></h6></label>
                </form>
                </div>
            </div>
        </div>
    </div>
    </div>

<?php include'view/footer.php'?>