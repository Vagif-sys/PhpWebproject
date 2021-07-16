<!DOCTYPE html>
<html lang="en">
<head>
   <?php 
   $website_title='AFFA';
   require 'blocks/head.php';
   
   ?>
</head>
<body>
<?php require 'blocks/header.php' ?>
<main class='container mt-5'>
    <div class='row'>
      <div class='col-md-8'>
         <?php 
            require 'ajax/db.php';

            $sql='SELECT * FROM articles ORDER BY data DESC';
            $result=mysqli_query($conn,$sql);
            
            while($row = mysqli_fetch_assoc($result)){

             
               echo 
               
               "
               <div class='news-content'>
                  <h2>".$row['title']."</h2>
                     <p>".$row['subject']."</p>
                     <p>".$row['text']."</p>
                     <p><b>Author:</b> <mark>".$row['Author']."</mark></p>
                  <a href='/news.php?id=".$row['id']." 'title=".$row['title']."'>
                  <button class='btn btn-warning'  >Read More</button>
                  </a>
               </div>";
            }    
          ?>
      </div>
         <?php require 'blocks/aside.php' ?>
    </div>

</main>
<?php require 'blocks/footer.php'?>

</body>
</html>