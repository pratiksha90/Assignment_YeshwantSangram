<?php
   require 'public_html/main.html';
        

   require 'includes/header1.php';
        ?>
<?php
session_start();  
if(!isset($_SESSION["email"]))
{
    header('location:index.php');	
}
require 'connection.php';


?>
    <content>
       <content>
        <div class="container" >
            <div class="jumbotron  text-center " style="background-color:">
                   <h3 style="font-family:jokerman; color:#d58512">Welcome <?php  echo $_SESSION["email"]; ?></h3>
            </div></div>
            
         <div class="row center-block">
    
<div class="col-sm-6 col-xs-offset-3 "> 
                      <h2 class="text-center text-info">USD - INR CONVERSION RATE</h2>
                      <form action="conversion1.php" method="post">
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
        <a href="home.php"></a>
    </content>