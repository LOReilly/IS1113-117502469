/* global $ */

function calcSub(){
    
    var argSubTotal;
    
    if(document.getElementById("salesforce").checked) {
        argSubTotal = 100;
    }
    if (document.getElementId("Cloud9").checked) {
        argSubTotal = 200;
    }
    if(document.getElementId("AWS").checked) {
        argSubtotal = 300;
    }
    if(document.getElementId("Gmail").checked) {
        argSubtotal = 400;
    }    
    display(argSubTotal);
}

function display(parm1){
    
     document.getElementById("subtotal").value = parm1;
     document.getElementById("total").value = parm1;
     
     enablebtnProceed();
}     


function enablebtnProceed(){
    $('#btnproceed').prop('disabled', false);
}

function disablebtnProceed() {
    $('#btnProceed').prop('disabled', true);
}    