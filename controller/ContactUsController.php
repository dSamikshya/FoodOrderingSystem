<?php

include 'model/DbModel.php';


if (empty($_POST)) {
    include 'view/contactUs.php';
    return;
}

try {
    $flag =  empty($_POST['Email']) || empty($_POST['Name'])  ||empty($_POST['Comment']) ;
    
    //validate user inputdata
    if ($flag) {
        $error['body'] = 'All input field are required.';
        $error['title'] = 'Danger!!';
        $error['type'] = 'danger';
        setFlash('message', $error);
        include 'view/contactUs.php';
        return;
    }
    //checking minimum length of password.
   

    //checking if email already exists.
    $email = filterText($_POST['Email']);
   

    $name = filterText($_POST['Name']);
   
    
    $comment = filterText($_POST['Comment']);
    
  /*    $create_date=123;  */
    
    
        

    $contact = new_contact( $email,$name, $comment, time());
    if ($contact) {
        $msg['title']='Success!!';
        $msg['body']="You have successfully sent comment.";
        $msg['type']='success';
        setFlash('message', $msg);
        header("location:" . $base_url . "?r=contact");
        redirect('home');
    } else {
        throwError(500, 'Unable to complete your request.');
    }
} catch (Exception $ex) {
    throwError();
}