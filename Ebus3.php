<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    
        <title>Cloud Services | Receipt</title>
        <link rel="stylesheet" href="mystylesheet.css">
        <link rel="icon" type="image/x-icon" href="shop_logo.ico">
    </head>
    <body>
     <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">IS1113</span> Cloud Services</h1>
        </div>
        <nav>
          <ul>
            <li class="current"><a href="homepage.html">Homepage</a></li>
            <li><a href="CloudServices.html">Cloud Services</a></li>
          </ul>
        </nav>
      </div>
    </header>
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
        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <footer>
            <p>IS1113 Cloud Services &copy; 2018</p>
        </footer>
    </body>
</html>    