function checkID() {
    var id = document.getElementById("VLN_ID").value;
    var errorField = document.getElementById("iderror");

    
    if (id == "") {
        errorField.innerHTML = "ID cannot be empty.";
        return false;
    }

   
    if (id <= 0) {
        errorField.innerHTML = "ID must be a positive number.";
        return false;
    }

    else{
    errorField.innerHTML = "";
    }
}

function checkPassword() {
    var passwordField = document.getElementById("VLN_password").value;
        var errorField = document.getElementById("passerror");


    if (passwordField == "") {
            errorField.innerHTML = "Password cannot be empty.";
            return false;
        }
    else if (passwordField.length < 8) {
        errorField.innerHTML = "Password must be at least 8 characters long.";
        return false;
    } 
    else {
        errorField.innerHTML = "";
        
    }
}

function validation() {
    if( checkID()==false || checkPassword()==false){
        return false;
    }
  } 