<?php 
   require 'db.php';
    
    $username = trim(filter_var($_POST['username'],FILTER_SANITIZE_STRING));
    $email = trim(filter_var($_POST['email'],FILTER_SANITIZE_EMAIL));
    $mess = trim(filter_var($_POST['mess'],FILTER_SANITIZE_STRING));

    $error = '';

    if(strlen($username)<=3)
    
        $error='Enter your name';

    else if(strlen($email)<=3)
        $error='Enter your email';


    else if(strlen($mess)<=3)
        $error='Text must not be empty or less than 3 letters';

    if($error !=''){
        echo $error;
        exit();
    }

    $my_mail='test@mail.ru';
    $subject ='=?utf-8?B?'.base64_encode('The New Message').'?=';
    $headers ='From: $email\r\nReply-to: $email\r\rContent-type: text/html; charset=utf-8\r\n';

    mail($my_mail,$subject,$mess,$headers);

    echo 'Done';
      
?>