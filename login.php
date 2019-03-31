<?php

if( isset( $_GET['error'] ) ){
  
  switch( $_GET['error'] ){
      
    default: 
      $message = "Something went wrong, try to login later";
      break;
      
  }
  
}

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Chain@ - Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="./css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="./css/style.css" media="screen">
    <script>

     var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-23019901-1']);
      _gaq.push(['_setDomainName', "bootswatch.com"]);
        _gaq.push(['_setAllowLinker', true]);
      _gaq.push(['_trackPageview']);

     (function() {
       var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
       ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
       var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
     })();

    </script>
  </head>
  <body>
    
    <div class = "container">
           
       <div class = "row">
        <div class="col-lg-6 center-element" style = "margin-top: 150px;">
     
            <?php
                
                //Check if an error occurred
                if( isset( $message ) ){
                  
                  echo ' <div class="bs-component">
                          <div class="alert alert-dismissible alert-warning">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <h4 class="alert-heading">Warning!</h4>
                            <p class="mb-0">'.$message.'</p>
                          </div>
                        </div>';
                  
                }
          
          
            ?>
          
              
          
              <h1 class = "center-text">
                Welcome in ChainAt  
              </h1>
          
              <div class="bs-component">
                <form action = "action/login.php" method = "post">
                  <fieldset>
                    <legend class = "center-text" >Login</legend>
                    
                    <div class="form-group">
                      <label for="exampleInputEmail1">Username</label>
                      <input type="username" class="form-control" placeholder="Enter username or email">
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    
                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                    
                  </fieldset>
                </form>
              </div>
            </div>
      </div>
      
      
    </div>
    
   
    
  </body>
</html>