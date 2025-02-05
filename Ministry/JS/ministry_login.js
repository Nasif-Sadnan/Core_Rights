function checkID() {
    var id = document.getElementById("MIN_id").value;
    var errorField = document.getElementById("iderror");

    // Check if the ID is empty
    if (id == "") {
        errorField.innerHTML = "ID cannot be empty.";
        return false;
    }

    // Check if the ID is a valid positive number
    if (id <= 0) {
        errorField.innerHTML = "ID must be a positive number.";
        return false;
    }

    else{// Clear any previous error messages
    errorField.innerHTML = "";
    }
}

function checkPassword() {
    var passwordField = document.getElementById("MIN_password").value;
        var errorField = document.getElementById("passworderror");


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

function Show_Pass() {
    var x = document.getElementById("MIN_password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

function validation() {
    if( checkID()==false || checkPassword()==false){
        return false;
    }
  } 