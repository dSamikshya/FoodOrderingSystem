


<?php

session_start();
$base_url = 'http://localhost/myproject/';
$_SESSION['base_url'] = $base_url;
$_SESSION['active_url'] = '';
include 'Helper/SpecialCharHelper.php';
include 'Helper/FlashMessageHelper.php';
include 'Helper/ErrorHelper.php';
include 'Helper/RouteHelper.php';

if (isset($_GET['r'])) {
    $controller = $_GET['r'];
    switch ($controller) {
        case 'home':
            $_SESSION['active_url'] = 'home';
            include 'controller/SiteController.php';
            break;
          case 'site':
            $_SESSION['active_url'] = 'site' ;
            include 'controller/SiteController.php';
            break;
            case 'about' :
            $_SESSION['active_url'] = 'about';
            include 'controller/AboutUsController.php';
            break;
            case 'contact':
                $_SESSION['active_url'] = 'contact';
                include 'Controller/ContactUSController.php';
                break;
        case 'login':
            $_SESSION['active_url'] = 'login';
            include 'controller/LoginController.php';
            break;
            case 'restaurantlogin':
                $_SESSION['active_url'] = 'restaurantlogin';
                include 'controller/RestaurantLoginController.php';
                break;
            case 'addrestaurant':
                $_SESSION['active_url'] = 'addrestaurant';
                include 'Controller/AddRestaurantController.php';
                break;
        case 'signup':
            $_SESSION['active_url'] = 'signup';
            include 'controller/SignupController.php';
            break;
            case 'logout':
                $_SESSION['active_url'] = 'logout';
            include 'controller/LogoutController.php';
            break;
            case 'restaurantlogout':
                $_SESSION['active_url'] = 'restaurantlogout';
                include 'controller/RestaurantLogoutController.php';
                break;
            /* case 'restaurant-zone':
                    header("location:restaurant-zone");
                    break;
 */

            case 'restaurant':
                $_SESSION['active_url'] = 'restaurant';
                include 'controller/RestaurantController.php';
                break;

                
        case 'userprofile':
            $_SESSION['active_url'] = 'userprofile';
            include 'controller/UserProfileController.php';
            break;
       
       
        default :
            $_SESSION['active_url'] = '' ;
            include 'controller/SiteController.php';
            break;
    }
    return;
} else {
     include 'controller/SiteController.php'; 
}
