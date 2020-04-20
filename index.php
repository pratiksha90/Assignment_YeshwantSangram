  <?php
   require 'public_html/main.html';
        ?>    
  <?php
   require 'includes/header.php';
        ?>
<?php
session_start();  
if(isset($_SESSION["email"]))
{
    header('location:home.php');	
}

?>
        
    <content>
        <div class="container" >
            <div class="jumbotron  text-center " style="background-color:">
                <h3 style="font-family:jokerman; color:#d58512">Welcome Guest User</h3>
            </div></div>
            
         <div class="row center-block">
    
<div class="col-sm-6 col-xs-offset-3 "> 
                      <h2 class="text-center text-info">USD - INR CONVERSION RATE</h2>
                      <form action="conversion.php" method="post">
                          <div class="form-group">
                      <label for="am" class="text-danger">Amount</label>
                      <input type="type" value="1" class="form-control" name="amount">
                      </div>
                          <div class="form-group">
                      <label for="from" class="text-danger">from</label>
                      <select class="form-control" name="from">
                          <option value="USD">USD</option>
                          <option value="INR">INR</option>
                       </select>
                      
                       <label for="from" class="text-danger">to</label>
                      <select class="form-control" name="to">
                          <option value="USD">USD</option>
                          <option value="INR">INR</option>
                       </select>
                      
                          </div>                
                      
                        
                      
                      <input type="submit" value="Convert" class="btn btn-default ">
                     
                      </form>
                      <h4> <span class="text-justify text-primary"><?php 
                      if(!isset($_GET['output'])){   }else{$output=$_GET['output']; echo $output;}?> </span></h4>
                      
            </div>
        </div>    
<!-- Modal -->
<div id="login">
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">LOGIN</h4>
      </div>
      <div class="modal-body" id="login1">
          <p>Don't have an account? <a href="signup.php">Register</a></p>
          <div class="container">
              <div class="row">
                  <div class="col-md-6">
                      <form id="loginForm" name="login" role="form" method="post">
              <div class="form-group">
                  <input type="email"  class="form-control input-lg " placeholder="Email" id="email" name="email1">
              </div>
              <div class="form-group">
           <input type="password"  class="form-control input-lg " placeholder="Password" id="pass" name="pass1">
              </div>
           <div class="form-group">
               <p> <button type="submit" class="btn btn-primary" data-dismiss="modal" id="b1">Login</button></p>
               <div id="box"></div>
               <div id="error"></div>
           </div>
          </form>
              </div></div>
      </div>
          
         
      
    </div>

  </div>
</div>
</div>    
</div>
    
            </body>
</html>
 <script>
                $(document).ready(function(){	
                    
	$("#b1").click(function(){
            var username=$('#email').val();
            var password=$('#pass').val();
         
        if($.trim(email).length > 0 && $.trim(pass).length > 0)
        {
             $.ajax({
		method: "POST",
		url: "login_script.php",
		cache:false,
		data: {username:username,password:password},
                
		success: function(data){
                    if(data)
                    {
                        $("body").load("home.php").hide().fadeIn(1500)
                       
                    }
                    else
                    {
                        
                        $("#b1").val("Login");
			$("#error").html('<span>Username or Password invalid</span>');
                    }
			
		},
		error: function(){
			alert("Error");
		}
	});
        }
            
                
            });
                
	});


    </script>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    