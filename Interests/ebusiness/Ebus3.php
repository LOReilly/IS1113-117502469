<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
    </head>
    <body>
        <h4>RECEIPT</H4>
        
        <?php
        // echo session variables from ebus2
        echo "Welcome " . $_POST["name"]; 
        
        echo "Your email address is " . $_POST["email"]; 
        
        echo "Total is " . $_SESSION["total"] . ".";
        ?>
    </body>
</html>    