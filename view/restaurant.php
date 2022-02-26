<?php include'view/header.php'?>
<nav class="resturants">
 <!-- <div class="container-resturant">
<div class="row justify-content-center">
 <div class="col-md-12 col-sm-12 col-lg-8">
<div class="card mb-3 bg-light justify-content-center align-items-center">
   <img src="eatwell.jpg" class="card-img-top " alt="...">
  <div class="card-body ">
 <img src="images/eatwell.jpg" class="card-img " alt="..." height="300px">

    <h5 class="card-title">Eatwell</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text"><small class="text-muted">waooo</small></p>
  </div>
  </div> -->
  <div class="container-eatwellbg text-center" >
                <div class="row">
                      <div class="col-lg-4 col-md-4 col-12 padding-restaurant image-responsive" >
                      <?php
                       if ($rest){
                         echo "<img src='".$rest["Image_Url"]."' height='240'width='240' alt='' >"
                      ."</div>" ; 
                       }   
             ?>
                <div class="col-lg-8 col-md-8 col-12 padding-restaurant-name">
                    <div class="page-title-inner text-dark my-auto">
                        <span>Fast Food Resturant
                        <h1 itemprop="headline">
                        <?php
                       if ($rest){
                         echo $rest["RestaurantName"]
                      
                        ."</h1>";
                       }
                        ?>
                        
                       
                        </span>
                    </div>
                    </div>
                </div>
               
                
</div>
</div> 



  <div class="sec-box">
                            
                                <div class="row justify-content-center">
                               
                                    <div class="col-md-12 col-sm-12 col-lg-6 ">
                                    <h2  itemprop="headline"> &nbsp; Eatwell Bakery&amp; Cafe Menu</h2>
                                        <div class="restaurant-detail-wrapper">
                                           <div class="restaurant-detail-title " style="margin-top:0px;">
                                                  
                                                
                                                                                                            <div class="info-meta"><hr class="bg-warning">
  <div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header bg-light" id="flush-heading1">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse1" aria-expanded="false" aria-controls="flush-collapse1">
        <img src="images/mo.jpg" class="rounded  d-block" width="50" height="50">  &nbsp;MOMO
      </button>
    </h2>
    <div id="flush-collapse1" class="accordion-collapse collapse" aria-labelledby="flush-heading1" data-bs-parent="#accordionFlushExample">
     <div class="accordion-body">
      <div class="d-flex justify-content-between">
      <div>Veg Steam MOMO </div>
    <form class="item ">
    NRS 120.00/-<br>
   <input type="number" class="form-control " name="food" id="" placeholder="enter qty"><input type="submit" class=" form-control order " name="order" id="" value="Add To Cart">
  </form>
  </div>
  </div>


     <hr class="bg-warning">
      <div class="accordion-body">Veg Fried MOMO .</div><hr >
      <div class="accordion-body">Veg  C MOMO </div><hr>
      <div class="accordion-body">Veg Fried C MOMO </div><hr>
      <div class="accordion-body">Chicken Steam MOMO </div><hr>
      <div class="accordion-body">Chicken jhol MOMO </div><hr>
      <div class="accordion-body">Chicken Fried MOMO .</div><hr>
      <div class="accordion-body">Chicken Fried C MOMO </div><hr>
      <div class="accordion-body">BUFF MOMO </div><hr>
      <div class="accordion-body">BUFF Fried MOMO .</div><hr>
      <div class="accordion-body">BUFF Fried C MOMO </div><hr>
      <div class="accordion-body">Chicken Fried MOMO </div><hr>
    </div>
  </div>
  <!-- <div class="accordion-item">
    <h2 class="accordion-header bg-light" id="flush-heading2">
      <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse2" aria-expanded="false" aria-controls="flush-collapse2">
      <img src="images/pizza.jpg" class="rounded  d-block" width="50" height="50">  &nbsp;PIZZA
      </button>
    </h2>
    <div id="flush-collapse2" class="accordion-collapse collapse" aria-labelledby="flush-heading2" data-bs-parent="#accordionFlushExample">
    <div class="accordion-body"> </div><hr>
    <div class="accordion-body"> </div><hr>
    <div class="accordion-body"> </div><hr>
    <div class="accordion-body"> </div><hr>
    <div class="accordion-body"> </div><hr>

  </div>
  <div class="accordion-item">
    <h2 class="accordion-header bg-light" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
      <img src="images/burger.jpg" class="rounded  d-block" width="50" height="50">  &nbsp;Burger
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
    <div class="accordion-body"> </div><hr>
    <div class="accordion-body"> </div><hr>
    <div class="accordion-body"> </div><hr>
    <div class="accordion-body"> </div><hr>
    <div class="accordion-body"> </div><hr>
    </div>
    <div class="accordion-item">
    <h2 class="accordion-header bg-light" id="flush-heading">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
      <img src="images/burger.jpg" class="rounded  d-block" width="50" height="50">  &nbsp;Sandwich
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
    <div class="accordion-body"> </div><hr>
    <div class="accordion-body"> </div><hr>
    <div class="accordion-body"> </div><hr>
    <div class="accordion-body"> </div><hr>
    <div class="accordion-body"> </div><hr>
    </div>
     -->
     </div>
</div>
</div>
</div>
</div>

</div>
</div>
</div>
</nav>
<iframe width="100%" height="500" id="gmap_canvas" src="https://www.google.com/maps/place/Eat+Well+Bakery+Cafe/@27.6963924,84.41903,17z/data=!4m5!3m4!1s0x3994fb40bd5917e5:0x57e9a40e28c72180!8m2!3d27.6963924!4d84.4212187" frameborder="50" scrolling="no" marginheight="0" marginwidth="0"></iframe><br>

<?php include'view/footer.php'?>