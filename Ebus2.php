<?php
// start the session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
    
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width">
    
        <title> Enter Details</title>
        <link rel="stylesheet" href="mystylesheet.css" type="text/css" />
        <link rel="icon" type="image/x-icon" href="shop_logo.ico">
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="ebus2_validator.js"></script>
   <style>
   .success{
    border: 2px solid #008CBA;
    background-color: white; 
    color: black;
    padding: 10px 12px;
    text-align: center;
    text-decoration: none;
    display: block;
    font-size: 14px;
    margin: 10px auto;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
    width: 100px;
    
} 
.hover:hover{
     background-color: #008CBA;
    color: white; 
 }
</style>
    </head>
    
    <body>
    <header>
      <div class="container">
       <div id="branding">
        <h1><span class="highlight">IS1113 Cloud Services</span></h1>
       </div>
    </header>
    
    <style>
        form{
           margin: auto;
           width: 20%;
           border: 2px solid grey;
           border-color:#DFE2DB;
           padding: 10px; 
            
        }        
        </style>
    
    
    
        <h3 style="text-align:center;">Please Enter Your Payment Details</h3>
        <!--Collecting the cost variable from ebus1-->
            <form action="Ebus3.php" method="POST">
        <!--Creating new variables to be posted to the receipt on ebus3-->   
                <label for="Name">Full Name: </label><br/>
                <input type="text" id="user_name" name="user_name" maxlength="20" placeholder="First.." class="name"><input type="text" id=last_name name="last_name" maxlength=20 placeholder="Last.." class="name">
                <br/><br/>
                <label for="email">Email:</label>
                <br/>
                <input type="email" name="email">
                <br/><br/>
                <label for="user_pin">PIN</label> 
                <br/>
                <input type="password" id="user_pin" placeholder="Card Pin" maxlength="4">
               
                <button type="Submit" id="btnPurchase" disabled> Proceed with Purchase </button>
                
            </form>
            <br />
             
            <button class="success hover" onClick="validateDetails()">Validate</button>
            
         <!--As the total has to transfer across multiple forms it has to become a session variable for it to reach the receipt-->   
        <?php
        //session variables
        $_SESSION["total"] = $_POST["total"];
        ?>
        <br/><br/><br/><br/><br/><br/><br/><br/>
        <footer>
        <p>IS1113, Cloud Services &copy; 2018</p>
        </footer>
    </body>
</html>