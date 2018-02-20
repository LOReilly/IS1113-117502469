<!DOCTYPE html>
<html>
    
    <head>
        <title>Select Product</title>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        </script>
        
    </head>
    <body>
        <h4>Select a product</h4>
        
        </br>
        
        <form method="POST" action="Ebus2.php">
            <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                Salesforce @ $100
            </label>
            
            <br/>
            
            <label for="Cloud9">
                <input type="radio" id="cloud9" name="product" onClick="disablebtnProceed()"/>
                C9 @ $200
            </label>
            
            <br/>
            
            <label for="AWS">
                <input type="radio" id="aws" name="product" checked onClick="disablebtnProceed()"/>
                AWS @ $300
            </label>
            
            <br/>
            
            <label for="Gmail">
                <input type="radio" id="gmail" name="product" checked onClick="disablebtnProceed()"/>
                Gmail @ $400
            </label>
            
            <br/>
            
            <label for="subtotal">
                Subtotal
                <input type="text" id="subtotal" value="0.00" readonly/>
            </label>
            
            <br/>
            
            <label for="total">
                Subtotal
                <input type="text" id="total" name="total" value="0.00" readonly/>
            </label>
            
            <br/>
            
            <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
        
        </form>
        
        <br/>
        <button onClick="calcSub()">Calculate Cost</button>
        <a rule="button" href="Ebus1.php">Clear Choice</a>
        
        
    </body>
</html>