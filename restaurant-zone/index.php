
<?php

session_start();
$base_url = 'http://localhost/myproject/restaurant-zone/';
$_SESSION['base_url'] = $base_url;
$_SESSION['active_url'] = '';
include 'Helper/SpecialCharHelper.php';
include 'Helper/FlashMessageHelper.php';
include 'Helper/ErrorHelper.php';
include 'Helper/RouteHelper.php';

if (isset($_GET['r'])) {
    $controller = $_GET['r'];
    switch ($controller) {
        case 'dashboard':
            $_SESSION['active_url'] = 'dashboard' ;
            include 'controller/dashboardcontroller.php';
            break;
            case 'adduser' :
            $_SESSION['active_url'] = 'adduser';
            include 'controller/AddUserController.php';
            break;
        
        case 'manageuser':
            $_SESSION['active_url'] = 'manageuser';
            include 'controller/ManageUserController.php';
            break;
        case 'addproduct':
            $_SESSION['active_url'] = 'addproduct';
            include 'controller/AddProductController.php';
            break;
            
        case 'manageproduct':
            $_SESSION['active_url'] = 'manageproduct';
            include 'controller/ManageProductController.php';
            break;
            case 'message':
                $_SESSION['active_url'] = 'message';
                include 'controller/ViewMessageController.php';
                break;
        case 'addpost':
            $_SESSION['active_url'] = 'addpost';
            include 'controller/addpostcontroller.php';
            break;
        case 'managepost':
            $_SESSION['active_url'] = 'managepost';
            include 'controller/managepostcontroller.php';
            break;
        case 'trashpost':
            $_SESSION['active_url'] = 'trashpost';
            include 'controller/trashpostcontroller.php';
            break;
     case 'about':
                 $_SESSION['active_url'] = 'about';
            include 'controller/aboutcontroller.php';
            break;
      case 'contact':
                 $_SESSION['active_url'] = 'contact';
            include 'controller/contactcontroller.php';
            break;
      case 'pass':
                 $_SESSION['active_url'] = 'pass';
            include 'controller/passcontroller.php';
            break;
         case 'logout':
    
            include 'controller/logoutcontroller.php';
            break;
        case 'waiting':
                 $_SESSION['active_url'] = 'waiting';
            include 'controller/waitingcontroller.php';
            break;
          case 'approved':
                 $_SESSION['active_url'] = 'approved';
            include 'controller/approvedcontroller.php';
            break;
        case 'signup':
                 $_SESSION['active_url'] = 'signup';
            include 'controller/signupcontroller.php';
            break;
        
            case 'edituser':
                $_SESSION['active_url'] = 'edituser';
           include 'controller/editusercontroller.php';
           break;
        default :
            throwError(404, 'Requested page does not exists.');
            break;
    }
    return;
} else {
    include 'controller/dashboardcontroller.php';
}
