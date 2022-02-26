<?php

include 'model/Dbmodel.php';


if (empty($_POST)) {
    include 'view/signup.php';
    return;
}

try {
    $flag = empty($_POST['username']) || empty($_POST['email'])  || empty($_POST['password']);

    //validate user inputdata
    if ($flag) {
        $error['body'] = 'All input field are required.';
        $error['title'] = 'Danger!!';
        $error['type'] = 'danger';
        setFlash('message', $error);
        include 'view/signup.php';
        return;
    }
    //checking minimum length of password.
    $password = filterText($_POST['password']);
    if (strlen($password) < 7) {
        $error['body'] = 'Password minimum length is 7.';
        $error['title'] = 'Danger!!';
        $error['type'] = 'danger';
        setFlash('message', $error);
        include 'view/signup.php';
        return;
    }

    //checking if email already exists.
    $email = filterText($_POST['email']);
    $valudate = find_user_by_email($email);
    if ($valudate) {
        $error['body'] = 'Email already taken.';
        $error['title'] = 'Danger!!';
        $error['type'] = 'danger';
        setFlash('message', $error);
        include 'view/signup.php';
        return;
    }

    $username = filterText($_POST['username']);
    
    $user = signup_new_user($username, $email, $password);
    if ($user) {
        $msg['title']='Success!!';
        $msg['body']="You have successfully signup.";
        $msg['type']='success';
        setFlash('message', $msg);
        header("location:" . $base_url . "?r=admin");
    } else {
        throwError(500, 'Unable to complete your request.');
    }
} catch (Exception $ex) {
    throwError();
}


/* PSR-4 
PSR-12 
get Composer.org
click on add php to path*/