<?php

include 'model/DbModel.php';


if (empty($_POST)) {
    include 'view/login.php';
    return;
}

try {
    if (empty($_POST['Email']) || empty($_POST['Password'])) {
        $error = 'Email and password are required.';
      
        include 'view/login.php';
        return;
    }
    $email = filterText($_POST['Email']);
    $password = filterText($_POST['Password']);
 

 
    $user = db_login($email, $password);
    if($user)
 {
 //  include('admin/index.php');  
        $_SESSION['user']['login'] = TRUE;
        $_SESSION['user']['user_id'] = $user['UserID'];
        $_SESSION['user']['user_name'] = $user['Email'];
        if($user["user_type"]==1)
        {
            $_SESSION['admin']['login'] = TRUE;
            $_SESSION['admin']['user_id'] = $user['UserID'];
            $_SESSION['admin']['user_name'] = $user['Email']; 
            header("location:admin");
            return;
        }
        redirect('home');
    } else {
        $error['body'] = 'No user found with given email and password.';
        $error['title'] = 'Info!!!';
        $error['type'] = 'info';
        setFlash('message', $error);
        include 'view/login.php';
        return;
    }
} catch (Exception $ex) {
    include 'controller/ErrorController.php';
}



