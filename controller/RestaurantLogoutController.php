<?PHP
unset($_SESSION["restaurant"]["login"]);
unset($_SESSION["restaurant"]["restaurant_id"]);
unset($_SESSION["restaurant"]["restaurant_name"]);
redirect('restaurantlogin');
?>