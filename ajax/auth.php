<?php 
   require 'db.php';
   
    $login = trim(filter_var($_POST['login'],FILTER_SANITIZE_STRING));
    $pass = trim(filter_var($_POST['pass'],FILTER_SANITIZE_STRING));

    $error = '';


    if(strlen($login)<=3)
        $error='Enter your login';

    else if(strlen($pass)<=3)
        $error='Enter your password';

    if($error !=''){
        echo $error;
        exit();
    }

    $sql = "SELECT * FROM users WHERE  login='$login' AND pass='$pass' ";
   
    $result=mysqli_query($conn, $sql) or die(mysqli_error($conn));

    $rows = mysqli_num_rows($result);

    if($rows != 0){
        
           setcookie('login', $login, time()+3600*24*7, "/");

            echo 'Done';
        
    }else{

         echo 'User is not Found';

    }
?>