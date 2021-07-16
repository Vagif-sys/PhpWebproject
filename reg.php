<!DOCTYPE html>
<html lang="en">
<head>
    <?php
       require 'blocks/head.php';
       $website_title='Sign up '
    ?>
</head>
<body>
<?php require 'blocks/header.php' ?>
<main class='container mt-5'>
    <div class='row'>
      <div class='col-md-8 mb-3'>
          <h4>Sign up Form</h4>
          <form action='' method='POST'>
            <label for='username'>Your Name: </label>
            <input type='text' name='username' id='username' class='form-control'>

            <label for='email'>Your Email: </label>
            <input type='text' name='email' id='email' class='form-control'>

            <label for='login'>Your Login: </label>
            <input type='text' name='login' id='login' class='form-control'>

            <label for='pass'>Your Password: </label>
            <input type='password' name='pass' id='pass' class='form-control'>
            <div class='alert alert-danger mt-3' id='error'></div>
            <button type='button' id='reg_user' class='btn btn-success mt-5'>Sign Up</button>
          </form>
      </div>
         <?php require 'blocks/aside.php' ?>
    </div>

</main>
<?php require 'blocks/footer.php'?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>

    $('#reg_user').click(function(){
       
        var name = $('#username').val();
        var email = $('#email').val();
        var login = $('#login').val();
        var pass = $('#pass').val();
        
        $.ajax({

            url:'ajax/reg.php',
            type:'POST',
            cashe:false,
            data: { 'username': name,'email': email,'login': login,'pass': pass},
            dataType:'html',
            success: function(data){

               if(data =='Done'){

                    $('#reg_user').text('All Done');
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