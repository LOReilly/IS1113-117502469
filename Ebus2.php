<?php
// start the session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Enter Details</title>
        
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
    display: inline-block;
    font-size: 14px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
   
   } 
   .hover:hover{
       background-color: #008CBA;
    color: white;
   }
   </style>
    </head>
    
    <body>
        <h4>Please enter your payment details.</h4>
        
            <form action="Ebus3.php" method="POST">
                
                Name: <br/> <input type="text" name="name"> <br/> <br/>
                
                E-mail: <br/> <input type="text" name="email"> <br/> <br/>
                
                <label for="user_pin">PIN</label> <br/>
                
                <input type="password" id="user_pin" placeholder="Card Pin" maxlength="4">
               
                <button type="Submit" id="btnPurchase" disabled> Proceed with Purchase </button>
                
            </form>
            <br />
            <button class="success hover" onClick="validateDetails()">Validate</button>
        
        <?php
        //session variables
        $_SESSION["total"] = $_POST["total"];
        ?>
    </body>
</html>