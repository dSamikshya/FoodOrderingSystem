<?php include'view/header.php'?>
<!-- contact us page -->
<div cout>
<div class="container contact">
	<div class="row ">
		<div class="col-md-3">
			<div class="contact-info">
				
				<h2>Contact Us</h2>
				<h4>We would love to hear from you !</h4>
			</div>
		</div>
		
		<div class="col-md-9">
		<div class="contactus">
		<div class="contact-form">
		<form class="form-horizantal" method="post" action="<?php echo $base_url;?>?r=contact">
				<div class="form-group">
				  <label class="control-label col-sm-2" for="fname">Name:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="Name">
				  </div>
				</div>
				
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="email">Email:</label>
				  <div class="col-sm-10">
					<input type="email" class="form-control" id="email" placeholder="Enter email" name="Email">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="comment">Comment:</label>
				  <div class="col-sm-10">
					<textarea class="form-control" rows="5"  name="Comment"></textarea>
				  </div>
				</div>
				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
					<button type="submit" name="send" class="btn btn-default">Submit</button>
				  </div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</form>
<!--     contact us page end here -->
<?php include'view/footer.php'?>
