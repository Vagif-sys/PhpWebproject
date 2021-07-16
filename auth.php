<!DOCTYPE html>
<html lang="en">
<head>
    <?php
       require 'blocks/head.php';
       $website_title='Sign in '
    ?>
</head>
<body>
<?php require 'blocks/header.php' ?>
<main class='container mt-5'>
    <div class='row'>
      <div class='col-md-8 mb-3'>
      <?php 
        if(!isset($_COOKIE['login'])):
      
      ?>
          <h4>Sign in Form</h4>
          <form action='' method='POST'>
            <label for='login'>Your Login: </label>
            <input type='text' name='login' id='login' class='form-control'>

            <label for='pass'>Your Password: </label>
            <input type='password' name='pass' id='pass' class='form-control'>
            <div class='alert alert-danger mt-3' id='error'></div>
            <button type='button' id='auth_user' class='btn btn-success mt-5'>Sign in</button>
          </form>
          <?php
             else: 
          ?>
             <h2>Welcome, <?=$_COOKIE['login']?> <h2>
           <?php
             endif;
          ?>
      </div>
         <?php require 'blocks/aside.php' ?>
    </div>

</main>
<?php require 'blocks/footer.php'?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>

    $('#auth_user').click(function(){

        var login = $('#login').val();
        var pass = $('#pass').val();
        
        $.ajax({

            url:'ajax/auth.php',
            type:'POST',
            cashe:false,
            data: { 'login': login,'pass': pass},
            dataType:'html',
            success: function(data){

               if(data =='Done'){

                    $('#auth_user').text('All Done');
                    $('#error').hide();
                    document.location.reload(true)
               }
               else {


                    $('#error').show();
                    $('#error').text(data);
                } 

            }
        });
    });    

     $('#exit_btn').click(function(){
 
        $.ajax({

            url:'ajax/exit.php',
            type:'POST',
            cashe:false,
            data: {},
            dataType:'html',
            success: function(data){
                document.location.reload(true)
               }
        });
    }); 
</script>
</body>
</html>