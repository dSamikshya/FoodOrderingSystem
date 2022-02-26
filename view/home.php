  <?php include'view/header.php'?>
  <div class='containersearch'>
  <div class="row d-flex justify-content-center">
  <div class="col-md-10 col-sm-10 col-lg-6">
    <!--  <div class='d-flex justify-content-center h-100'> -->
         <div class='search'> <input class='search_input text-dark' type='text' name='' placeholder='Search here...'> <a href='#' class='search_icon'><i class='fa fa-search'></i></a> </div>
     </div>
     </div>
 </div>
   <div class='cours'>
  <div id='carouselExampleCaptions' class='carousel slide' data-bs-ride='carousel'>
  <div class='carousel-indicators'>
    <button type='button' data-bs-target='#carouselExampleCaptions' data-bs-slide-to='0' class='active' aria-current='true' aria-label='Slide 1'></button>
    <button type='button' data-bs-target='#carouselExampleCaptions' data-bs-slide-to='1' aria-label='Slide 2'></button>
    <button type='button' data-bs-target='#carouselExampleCaptions' data-bs-slide-to='2' aria-label='Slide 3'></button>
  </div>
  <div class='carousel-inner'>
    <div class='carousel-item active'>
      <img src='images/new8.jpg' class='d-block w-100 ' alt='...'>
      <div class='carousel-caption d-none d-md-block text-dark'>
        <h5>Order Your Favorite Food</h5>
        <p>Count memories, not calories.!!.</p>
      </div>
    </div>
    <div class='carousel-item'>
      <img src='images/new1.jpg' class='d-block w-100 ' alt='...'>
      <div class='carousel-caption d-none d-md-block text-dark'>
        <h5>A little slice of heavenl</h5>
        <p>Made with love.</p>
      </div>
    </div>
    <div class='carousel-item'>
      <img src='images/new5.jpg' class='d-block w-100 ' alt='...'>
      <div class='carousel-caption d-none d-md-block text-dark '>
        <h5>A day is best started on a full stomach.</h5>
        <p>good food good mood.</p>
      </div>
    </div>
  </div>
  <button class='carousel-control-prev' type='button' data-bs-target='#carouselExampleCaptions'  data-bs-slide='prev'>
    <span class='carousel-control-prev-icon' aria-hidden='true'></span>
    <span class='visually-hidden'>Previous</span>
  </button>
  <button class='carousel-control-next' type='button' data-bs-target='#carouselExampleCaptions'  data-bs-slide='next'>
    <span class='carousel-control-next-icon' aria-hidden='true'></span>
    <span class='visually-hidden'>Next</span>
  </button>
</div>
</div>


 <?php
 $restaurant=view_restaurant();
 if($restaurant){
    echo "<div class='container'>"
    ."<div class='row'>"
    ."<div class='col-lg-12 text-center'>"
        ."<h2 class='section-title'>Featured Restaurants</h2></div>";

 while($row=$restaurant->fetch_assoc()){
           echo "<div class='col-lg-3 col-sm-6 mb-4'>"
           . "<div class='card border-0 shadow rounded-xs pt-3'>"
                ."<div class='card-body'> "
                ."<a  href='".$base_url ."?r=restaurant&id=".$row["RestaurantID"]. "'><img src='".$row["Image_Url"]. "'class='card-img-top' alt='...'>"

                    ."<p>".$row["RestaurantName"]." </p></a></div> </div></div>";
}
 }
?>
      
        </div>
    </div>
</div>























<div class='container-home text-center '>

            <div class='row'>
            <div class='col-md-12 col-sm-12 col-lg-12'>
                    <div class='title1-wrapper text-center'>
                        <div class='title1-inner'>
                            <h2 class='text-light' itemprop='headline'>Easy Order In 3 Steps</h2><br>
                        </div>
                    </div>
                    <div class='remove-ext text-center'>
                        <div class='row'>
                            <div class='col-md-4 col-sm-4 col-lg-4'>
                                <div class='step-box wow fadeIn' data-wow-delay='0.2s'>
                                  <!--  <i><img src='images/newicon.png' style='brightness:100%;' height='150px' alt='setp-img1.png'
                                            itemprop='image'> </i>  -->
                                    <div class='setp-box-inner text-light'>
                                        <span><h4 itemprop='headline'>Explore Restaurants</h4>
                                        <p itemprop='description'>Craving a particular cuisine? Pick from a large
                                            collections of restaurants and get ordering.</p></span>
                                    </div>
                                </div><!-- Step Box -->
                            </div>
                            <div class='col-md-4 col-sm-4 col-lg-4'>
                                <div class='step-box wow fadeIn' data-wow-delay='0.4s'>
                                    <!-- <i><img src='images/d.png' alt='setp-img2.png'
                                            itemprop='image'> <span class='brd-rd50 red-bg'>2</span></i> -->
                                    <div class='setp-box-inner text-light'>
                                        <h4 itemprop='headline'>Pick Your Favourite Food</h4>
                                        <p itemprop='description'>Select the food of your choice from your favorite
                                            restaurants and hit the order button.</p>
                                    </div>
                                </div><!-- Step Box -->
                            </div>
                            <div class='col-md-4 col-sm-4 col-lg-4'>
                                <div class='step-box wow fadeIn' data-wow-delay='0.6s'>
                                   <!--  <i><img src='images/d.png' alt='setp-img3.png'
                                            itemprop='image'> <span class='brd-rd50 red-bg'>3</span></i> -->
                                    <div class='setp-box-inner text-light '>
                                        <h4 itemprop='headline'>Follow The Status</h4>
                                        <p itemprop='description'>Follow your order status as it goes from the
                                            restaurant kitchen, to your home.</p>
                                    </div>
                                </div><!-- Step Box -->
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
</div>
</div>


<!--  -->

<?php include'view/footer.php'?>

  


































