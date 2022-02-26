
<?php

include 'model/DbModel.php';


if (empty($_POST)) {
    include 'view/adduser.php';
    return;
}

try {
    $flag =  empty($_POST['Email']) || empty($_POST['Name'])  ||empty($_POST['PhoneNumber'])||empty($_POST['Password'])|| empty($_POST['Address']) ;
    
    //validate user inputdata
    if ($flag) {
        $error['body'] = 'All input field are required.';
        $error['title'] = 'Danger!!';
        $error['type'] = 'danger';
        setFlash('message', $error);
        include 'view/adduser.php';
        return;
    }
    //checking minimum length of password.
    $password = filterText($_POST['Password']);
    if (strlen($password) < 7) {
        $error['body'] = 'Password minimum length is 7.';
        $error['title'] = 'Danger!!';
        $error['type'] = 'danger';
        setFlash('message', $error);
        include 'view/adduser.php';
        return;
    }

    //checking if email already exists.
    $email = filterText($_POST['Email']);
    $valudate = find_user_by_email($email);
    if ($valudate) {
        $error['body'] = 'Email already taken.';
        $error['title'] = 'Danger!!';
        $error['type'] = 'danger';
        setFlash('message', $error);
        include 'view/adduser.php';
        return;
    }

    $name = filterText($_POST['Name']);
   
    $phone = filterText($_POST['PhoneNumber']);
    $password = filterText($_POST['Password']);
    $address = filterText($_POST['Address']);
   
  /*    $create_date=123;  */
    
     $target="";
       if (!empty($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"] == 0) {
        $target = "images/".basename($_FILES['fileToUpload']['name']);
      //  echo $target;
        //die();
        move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target);
       }
        

    $user = signup_new_user( $email,$name, $phone, $password,  $address ,  $target ,time());
    if ($user) {
        $msg['title']='Success!!';
        $msg['body']="You have successfully signup.";
        $msg['type']='success';
        setFlash('message', $msg);
        header("location:" . $base_url . "?r=adduser");
        redirect('adduser');
    } else {
        throwError(500, 'Unable to complete your request.');
    }
} catch (Exception $ex) {
    throwError();
}