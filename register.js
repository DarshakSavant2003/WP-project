function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}
function validateform(){
    var fname= document.Mainform.fname.value;
    var email=document.Mainform.email.value;
    var lastn = document.Mainform.lastn.value;
    var pass = document.Mainform.pass.value;
 var nameErr = emailErr = BuntyErr = passErr = true;
    var regex = /^[a-zA-Z\s]+$/;                
    if(regex.test(fname) === false) {
        printError("nameErr", " *Please enter a valid name");
    } else {
        printError("nameErr", "");
        nameErr = false;
    } var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(lastn) === false) {
            printError("BuntyErr", " *Please enter a valid  last name");
        } else {
            printError("BuntyErr", "");
            lastErr = false;
        }var regex = /^\S+@\S+\.\S+$/;
        if(regex.test(email) === false) 
        {
            printError("emailErr", "Please enter a valid email address");
        } 
        else{
            printError("emailErr", "");
            emailErr = false;
        }
    
        var regex= /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/;
    if(regex.test(pass)==false){
        printError("passErr","Please enter valid password")
    }
    else{
        printError("passErr", "");
        passErr = false;
    }
if((nameErr||emailErr||BuntyErr||passErr) == true) {
    return false;
    // return 'save';
}
};