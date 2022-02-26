

    <div class="container-fluid">
        <div class="row">
             <div class="col-md-4 col-sm-4 col-xs-12"></div>
             <div class="col-md-4 col-sm-4 col-xs-12">
                <form id="log" style="border:2px solid black;padding:50px 30px;
margin-top:80px;background-color: white;" method="post" action="<?=$base_url?>?r=admin">
                    <h1 style="color:black;text-alignadmin
    font-weight: bolder;">Admin Login</h1>
                    <img src="assets/images/a.gif" style="display: block; margin-left:auto;
  margin-right:auto; width:100px; border-radius:50%;">
                    <div class="form-group">
                        <label style="color:black; font-size:20px;">User Name</label>
                        <input type="text" class="form-control" placeholder="Enter Username" id="username" name="username" required/><br>
                    </div>
                    <div class="form-group">
                        <label style="color:black; font-size:20px;">Email</label>
                        <input type="text" class="form-control" placeholder="Enter email" id="email" name="email" required/><br>
                    </div>
                    
                    <div class="form-group">
                        <label style="color:black; font-size:20px;">Password</label>
                        <input type="password" class="form-control" placeholder="Enter Password" id="password" name="password" required/><br>
                    </div>
                    <button type="submit" class="btn btn-outline-success" name="login"><b>Login</b></button>
                </form>
             </div>
             <div class="col-md-4 col-sm-4 col-xs-12"></div>
        </div>
    </div>
<?php include'footer.php';?>