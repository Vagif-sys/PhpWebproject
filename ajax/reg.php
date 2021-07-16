<?php 
   require 'db.php';
   
    $username = trim(filter_var($_POST['username'],FILTER_SANITIZE_STRING));
    $email = trim(filter_var($_POST['email'],FILTER_SANITIZE_EMAIL));
    $login = trim(filter_var($_POST['login'],FILTER_SANITIZE_STRING));
    $pass = trim(filter_var($_POST['pass'],FILTER_SANITIZE_STRING));

    $error = '';

    if(strlen($username)<=3)
    
        $error='Enter your name';

    else if(strlen($email)<=3)
        $error='Enter your email';

    else if(strlen($login)<=3)
        $error='Enter your login';

    else if(strlen($pass)<=3)
        $error='Enter your password';

    if($error !=''){
        echo $error;
        exit();
    }

    $sql = "INSERT INTO users (name, email, login,pass)
    VALUES ('$username', '$email', '$login','$pass')";
    
    $query = mysqli_query($conn, $sql);

    if($query){
        echo json_encode("Data Inserted Successfully");
        
        }
    else {
        echo "ERROR: ".mysql_error();
        exit();
        }
  


    echo 'Done'
?>