<?php 
   if($_COOKIE['login']==''){

       header('location:reg.php');
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
       require 'blocks/head.php';
       $website_title='Adding Article '
    ?>
</head>
<body>
<?php require 'blocks/header.php' ?>
<main class='container mt-5'>
    <div class='row'>
      <div class='col-md-8 mb-3'>
          <h4>Add Article</h4>
          <form action='' method='POST'>
            <label for='username'>Title: </label>
            <input type='text' name='title' id='title' class='form-control'>

            <label for='email'>Subject: </label>
            <textarea type='text' name='subject' id='subject' class='form-control'></textarea>

            <label for='login'>Text: </label>
            <textarea type='text' name='text' id='text' class='form-control'></textarea>

            <div class='alert alert-danger mt-3' id='error'></div>
            <button type='button' id='add_article' class='btn btn-success mt-5'>ADD</button>
          </form>
      </div>
         <?php require 'blocks/aside.php' ?>
    </div>

</main>
<?php require 'blocks/footer.php'?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>

    $('#add_article').click(function(){
       
        var title = $('#title').val();
        var subject = $('#subject').val();
        var text = $('#text').val();
        
        
        $.ajax({

            url:'ajax/add_article.php',
            type:'POST',
            cashe:false,
            data: { 'title': title,'subject': subject,'text': text},
            dataType:'html',
            success: function(data){

               if(data =='Done'){

                    $('#add_article').text('All Done');
                    $('#error').hide();
               }
               else {


                    $('#error').show();
                    $('#error').text(data);
                } 

            }
        });
    });
        
        
        
</script>
</body>
</html>