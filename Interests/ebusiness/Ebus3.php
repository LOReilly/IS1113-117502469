<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
    </head>
    <body>
        <h4>Thank you for your purchase.</H4>
        
        <?php
        // echo session variables from ebus2
        echo "Thank you: " . $_POST["name"];  
        
        echo "Your recipt will be emailed to: " . $_POST["email"]; 
        
        echo "Total is: " . $_SESSION["total"] . ".";
        ?>
    </body>
</html>    