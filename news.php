<!DOCTYPE html>
<html lang="en">
<head>
   <?php 
    error_reporting(E_ALL);
  
    require 'ajax/db.php';

    $id=$_GET['id'];
    $sql="SELECT * FROM articles WHERE id ='$id'";
   
    $query = mysqli_query($conn, $sql);
    $article=mysqli_fetch_assoc($query);
    
    
   $website_title = $article['title'];
   require 'blocks/head.php';
   
   ?>
</head>
<body>
<?php require 'blocks/header.php' ?>
<main class='container mt-5'>  
    <div class='row'>
      <div class='col-md-8'>
        <div class="jumbotron">
            
          <h1><?=$article['title']?></h1>
          <p><b>Author:</b> <mark><?=$article['Author']?></mark></p>
          <?php
              $data=date('d ',$article['data']);

              $array=['January',"February",'March',"April",'May','June','Jule','August','Semptember',
                     
                      'Octomber','November','December'];
              $data.=$array[date('n',$article['data'])-1];
              $data.=date(' H:i',$article['data']);
             
          ?>  
          <p><b>Public date:</b> <u><?=$data?></u></p>
          <h3><?=$article['subject']?></h3>
          <p><?=$article['text']?></h1> 
          
        </div>
         
         <h3 class='mt-5'>Comments</h3>
          <form action="news.php?id=<?=$_GET['id']?>" method='POST'>
            <label for='username'>Your Name: </label>
            <input type='text' name='username'  id='username'  class='form-control'>

            <label for='login'>Your text here: </label>
            <textarea  name='mess' id='mess' class='form-control'></textarea>

            <button type='submit' id='mess_send' class='btn btn-success mt-2'>
          
             Add a Comment
            
            </button>
          </form>
          <?php

            
             if($_POST['username']!='' AND $_POST['mess']!=''){

                $username= trim(filter_var($_POST['username'],FILTER_SANITIZE_STRING));
                $mess = trim(filter_var($_POST['mess'],FILTER_SANITIZE_STRING));
                
                $article_id=$_GET['id'];
                $sql = "INSERT INTO comments (name, mess, article_id)
                VALUES ('$username', '$mess', '$article_id')";
                
                $result=mysqli_query($conn,$sql);
                if ($result) {
                  echo "New record created successfully";
                } else {
                  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
               
             }
            
               $sql="SELECT * FROM comments WHERE article_id='$id' ORDER BY '$id' DESC";
               $query = mysqli_query($conn, $sql);
             
            
               while($comment = mysqli_fetch_assoc($query)){
   
               
                  echo "<div class='alert alert-info'>
                          <h4>".$comment['name']."</h4>
                          <p>".$comment['mess']."</p>
                        </div>"
                }
           ?>
      </div>
         <?php require 'blocks/aside.php' ?>
    </div>

</main>
<?php require 'blocks/footer.php'?>
</body>
</html>