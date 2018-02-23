<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
    </head>
    <body>
        <H4 style="text-align:center;">Thank you for your purchase.</H4>
        
        <?php
        // echo session variables from ebus2
        echo "Thank you: " . $_POST["name"] . "<br/>";  
        
        echo "Your recipt will be emailed to: " . $_POST["email"] . "<br/>"; 
        
        echo "Total is: " . $_SESSION["total"] . ".";
        ?>
    </body>
</html>    