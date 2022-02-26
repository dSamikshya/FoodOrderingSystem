<?php

include 'model/DbModel.php';


if (empty($_POST)) {
    include 'view/addproduct.php';
    return;
}

try {
     /* $flag =  empty($_POST['ProductName']) || empty($_POST['Price'])  ||empty($_POST['FoodType'])||empty($_POST['fileToUpload'])|| empty($_POST['RestaurantID']) ;
    
    //validate product inputdata
    if ($flag) {
        $error['body'] = 'All input field are required.';
        $error['title'] = 'Danger!!';
        $error['type'] = 'danger';
        setFlash('message', $error);
        include 'view/addproduct.php';
        return; 
     } */
     
    

    //checking if email already exists.
    

    $name = filterText($_POST['ProductName']);
    $price = filterText($_POST['Price']);
    $type = filterText($_POST['FoodType']);
    $restaurant = filterText($_POST['RestaurantID']);
    
   
    
    
     $target="";
       if (!empty($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"] == 0) {
        $target = "images/".basename($_FILES['fileToUpload']['name']);
      //  echo $target;
        //die();
        move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target);
       }
    
        

    $product = new_product( $name,$price,$type ,$target,$restaurant  ,time());
    if ($product) {
        $msg['title']='Success!!';
        $msg['body']="You have successfully signup.";
        $msg['type']='success';
        setFlash('message', $msg);
        header("location:" . $base_url . "?r=addproduct");
        redirect('addproduct');
    } else {
        throwError(500, 'Unable to complete your request.');
    }
} catch (Exception $ex) {
    throwError();
}