<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
        <link rel="stylesheet" href="mystylesheet.css">
    </head>
    <body>
        <H3 style="text-align:center;">Thank you for your purchase.</H3>
        <div class="receipt">
        <?php
        // echo session variables from ebus2
        echo "Thank You: ". $_POST["user_name"];
        echo " " . $_POST["last_name"] .  "<br/>";  
        echo "Your receipt will be emailed to: " . $_POST["email"] . "<br/>"; 
        echo "Total is &euro; " . $_SESSION["total"] . ".";
        ?>
        </div> 
        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <footer>
            <p>117502469 &copy; 2018</p>
        </footer>
    </body>
</html>    