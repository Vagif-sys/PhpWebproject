<!DOCTYPE html>
<html lang="en">
<head>
    <?php
       error_reporting(E_ALL);
       ini_set('display_errors', 1);

       $website_title='Contacts';
       require 'blocks/head.php';
       
    ?>
</head>
<body>
<?php require 'blocks/header.php' ?>
<main class='container mt-5'>
    <div class='row'>
      <div class='col-md-8 mb-3'>
          <h4>Feedback</h4>
          <form action='' method='POST'>
            <label for='username'>Your Name: </label>
            <input type='text' name='username' id='username' class='form-control'>

            <label for='email'>Your Email: </label>
            <input type='text' name='email' id='email' class='form-control'>

            <label for='mess'>Your Text Here: </label>
            <textarea type='text' name='mess' id='mess' class='form-control'></textarea>

          
            <div class='alert alert-danger mt-3' id='error'></div>
            <button type='button' id='mess_send' class='btn btn-success mt-5'>Send</button>
          </form>
      </div>
         <?php require 'blocks/aside.php' ?>
    </div>

</main>
<?php require 'blocks/footer.php'?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>

    $('#mess_send').click(function(){
       
        var name = $('#username').val();
        var email = $('#email').val();
        var mess = $('#mess').val();
      
        
        $.ajax({

            url:'ajax/mail.php',
            type:'POST',
            cashe:false,
            data: { 'username': name,'email': email,'mess': mess},
            dataType:'html',
            success: function(data){

               if(data =='Done'){

                    $('#mess_send').text('All Done');
                    $('#error').hide();
                    var name = $('#username').val('');
                    var email = $('#email').val('');
                    var mess = $('#mess').val('');
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