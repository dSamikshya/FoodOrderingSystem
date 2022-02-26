<?php 
include "model/DbModel.php";
 $rest = find_restaurant_by_id($_GET['id']);
 $rest = $rest->fetch_assoc(); 

include 'view/restaurant.php';
?>