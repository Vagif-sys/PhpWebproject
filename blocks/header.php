<div   class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm ">
  <h5 class="my-0 mr-md-auto font-weight-normal"><a href='index.php'>AFFA/TMB</a></h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="/">HOME</a>
    <a class="p-2 text-dark" href="contacts.php">Contacts</a>
  

     <?
   
      if(isset($_COOKIE['login']) != '')

        echo '<a class="p-2 text-darl" href="article.php">Add a new Article</a>'
    
     ?>
  </nav>
   <?
   
      if(!isset($_COOKIE['login'])): 
    
   ?>
  <a class="btn btn-outline-primary mr-2 mb-2" href="auth.php">Sign in</a>
  <a class="btn btn-outline-primary mb-2" href="reg.php">Sign up</a>

  <?php 
    
     else:

  ?>
  
   <a  class="btn btn-outline-primary mb-2 mr-2" href="auth.php">User Account</a>
  

  


   <div class='dropdown'>
   <a onclick="myFunction()" class="btn btn-outline-primary mb-2  ">Log out</a>
  
      <div id='myDropdown' class='dropdown-content'>
         <a class='btn btn-danger' id='exit_btn' >Log out</a>
      </div>
   </div>
   <?php 
   
    endif;

  ?>
</div>