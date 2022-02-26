<?php

include 'model/DbModel.php';


if (empty($_POST)) {
    include 'view/restaurantlogin.php';
    return;
}

try {
    if (empty($_POST['Email']) || empty($_POST['Password'])) {
        $error = 'Email and password are required.';
      
        include 'view/restaurantlogin.php';
        return;
    }
    $email = filterText($_POST['Email']);
    $password = filterText($_POST['Password']);
 

 
    $restaurant = restaurant_login($email, $password);
    if($restaurant)
 {
 //  include('admin/index.php');  
        $_SESSION['restaurant']['login'] = TRUE;
        $_SESSION['restaurant']['restaurant_id'] = $restaurant['RestaurantID'];
        $_SESSION['restaurant']['restaurant_name'] = $restaurant['Email'];
        /* if($user["user_type"]==1)
        {
            $_SESSION['admin']['login'] = TRUE;
            $_SESSION['admin']['user_id'] = $user['UserID'];
            $_SESSION['admin']['user_name'] = $user['Email'];  */
            header("location:restaurant-zone");
            return;
        }
        /* redirect('home'); */
     else {
        $error['body'] = 'No user found with given email and password.';
        $error['title'] = 'Info!!!';
        $error['type'] = 'info';
        setFlash('message', $error);
        include 'view/restaurantlogin.php';
        return;
    }
} catch (Exception $ex) {
    include 'controller/ErrorController.php';
}



