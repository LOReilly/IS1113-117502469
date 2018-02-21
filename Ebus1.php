<!DOCTYPE html>
<html>
    
    <head>
        <title>Select Product</title>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        </script>
    
    <style>
    .button_1{
  height:38px;
  background:#0f847c;
  border:0;
  padding-left: 20px;
  padding-right:20px;
  color:#ffffff;
  cursor: pointer;
}
    .cancel{
border: 2px solid #f44336;
    background-color: white; 
    color: red;
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
     background-color: #f44336;
    color: white; 
 }

</style>
    </head>
    <body>
        <h4>Select a product</h4>
        
        </br> </br>
        
        <form method="POST" action="Ebus2.php">
            <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                Salesforce @ $100
            </label>
            
            <br/> </br>
            
            <label for="Cloud9">
                <input type="radio" id="cloud9" name="product" onClick="disablebtnProceed()"/>
                C9 @ $200
            </label>
            
            <br/> </br>
            
            <label for="AWS">
                <input type="radio" id="aws" name="product" checked onClick="disablebtnProceed()"/>
                AWS @ $300
            </label>
            
            <br/> </br>
            
            <label for="Gmail">
                <input type="radio" id="gmail" name="product" checked onClick="disablebtnProceed()"/>
                Gmail @ $400
            </label>
            
            <br/> </br>
            
             <label for="subtotal">
                Subtotal
                <input type="text" id="subtotal" value="0.00" name="subtotal" readonly/>
            </label>
            
            <br/> </br>
            
            <label for="discount">
                Discount @ 5%
                <input type="text" id="discount" name="discount" value="0.00" readonly/>
            </label>
            
            <br/> </br>
            
             <label for="vat">
                VAT @ 10%
                <input type="text" id="vat" value="0.00" readonly/>
            </label>
            
            <br/> </br>
            
            <label for="total">
                Total
                <input type="text" id="total" name="total" value="0.00" readonly/>
            </label>
            
            <br/> </br>
            
            <button  type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
        
        </form>
        
        <br/>
        <button class ="button_1" onClick="calcSub()";"calcDiv()";"calcVat()";>Calculate Cost</button>
        <a rule="button" class="cancel hover" href="Ebus1.php">Clear Choice</a>
        
        
    </body>
</html>