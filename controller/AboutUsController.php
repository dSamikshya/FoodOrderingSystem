<?php
include'model/DbModel.php';
if(empty($_POST)){
	$about=get_aboutus();
	include "view/about.php";
} 

//echo "string";

?>