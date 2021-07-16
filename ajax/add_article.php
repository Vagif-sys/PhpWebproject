<?php 


    require 'db.php';

    $title = trim(filter_var($_POST['title'],FILTER_SANITIZE_STRING));
    $subject = trim(filter_var($_POST['subject'],FILTER_SANITIZE_STRING));
    $text = trim(filter_var($_POST['text'],FILTER_SANITIZE_STRING));
   


    $error = '';

    if(strlen($title)<=3)
    
        $error='Enter the title';

    else if(strlen($subject)<=15)
        $error='Enter the subject';

    else if(strlen($text)<20)
        $error='Enter the text';


    if($error !=''){
        echo $error;
        exit();
    }
    $time=time();
    $user_log = $_COOKIE['login'];
    $sql = "INSERT INTO articles (title, subject, text, data, Author) VALUES ('$title' , '$subject', '$text', '$time', '$user_log')";
    

    $query = mysqli_query($conn, $sql);

      if($query){
          echo json_encode("Data Inserted Successfully");
          }
      else {
          echo "ERROR: ".mysql_error();
          exit();
          }
    

    echo 'Done';
?>
