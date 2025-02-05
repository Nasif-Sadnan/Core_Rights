function checkFirstName() {
    var nameInput = document.getElementById("AD_Firstname").value;
    var errorElement = document.getElementById("firsterror");

    
    var nameRegex = /^[a-zA-Z\s]+$/;

   
    if (nameInput == "") {
        errorElement.innerHTML = "Name cannot be empty.";
        return false;
    }

  
    if (!nameRegex.test(nameInput)) {
        errorElement.innerHTML = "Name must contain only letters and spaces.";
        return false;
    }

    else {
        errorElement.innerHTML = ""; 
}
}

function checkLastName() {
    var nameInput = document.getElementById("AD_Lastname").value;
    var errorElement = document.getElementById("lasterror");

  
    var nameRegex = /^[a-zA-Z\s]+$/;

   
    if (nameInput == "") {
        errorElement.innerHTML = "Name cannot be empty.";
        return false;
    }


    if (!nameRegex.test(nameInput)) {
        errorElement.innerHTML = "Name must contain only letters and spaces.";
        return false;
    }

    else {
        errorElement.innerHTML = ""; 
    }
}

function checkPassword() {
    var passwordField = document.getElementById("AD_password").value;
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
    var x = document.getElementById("AD_password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

function checkGender() {
    var genders = document.getElementsByName("AD_Gender");
    var isChecked = false;

   
    for (var i = 0; i < genders.length; i++) {
        if (genders[i].checked) {
            isChecked = true;
        
        }
    }

    if (!isChecked) {
        document.getElementById("genderError").innerHTML = "Please select a gender.";
        return false;
    } 
    else {
        document.getElementById("genderError").innerHTML = ""; 
    }
}


function checkDate() {
    var dateInput = document.getElementById("AD_dob").value;
    var errorElement = document.getElementById("dateError");

   
    if (!dateInput) {
        errorElement.innerHTML = "Please enter a date.";
        return false;
    }
    var date = new Date(dateInput);
    if (isNaN(date.getTime())) {
        errorElement.innerHTML = "Invalid date format.";
        return false;
    }

   
    var today = new Date();
    today.setHours(0, 0, 0, 0);

    if (date > today) {
        errorElement.innerHTML = "Date cannot be in the future.";
        return false;

    } 
    else {
        errorElement.innerHTML = ""; 
    }
}


function checkPhone() {
    var AD_phone = document.getElementById("AD_phone").value;
    const phoneRegex = /^[0-9]{11}$/;
  
    if (AD_phone == "" || !phoneRegex.test(AD_phone)) 
    {
      document.getElementById("phoneerror").innerHTML = "Enter valid phone number"; 
      return false;
    } 
    else 
    {
      document.getElementById("phoneerror").innerHTML = ""; 
    }
  }

function checkEmail() {
    var AD_email = document.getElementById("AD_email").value;
    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
  
    if (AD_email == "" || !emailRegex.test(AD_email)) {
      document.getElementById("emailerror").innerHTML = "Enter valid email address"; 
      return false;
    } 
    else 
    {
      document.getElementById("emailerror").innerHTML = ""; 
    }
  }


  function checkCv() {
    var fileInput = document.getElementById("AD_cv");
    var errorElement = document.getElementById("fileerror");
    var file = fileInput.files[0]; 

   
    if (!file) {
        errorElement.innerHTML = "Please select a file.";
        return false;
    }

    
    var fileType = file.type; 
    if (fileType !== "application/pdf") {
        errorElement.innerHTML = "Only PDF files are allowed.";
        return false;
    }

    
    errorElement.innerHTML = ""; 
}
  
function checkTemppic() {
    var fileInput = document.getElementById("propic");
    var errorElement = document.getElementById("propicerror");
    var file = fileInput.files[0]; 

   
    if (!file) {
        errorElement.innerHTML = "Please select a file.";
        return false;
    }

   
    var fileType = file.type; 
    if (!fileType.startsWith("image/")) {
        errorElement.innerHTML = "Only picture files (JPG, PNG, GIF, etc.) are allowed.";
        return false;
    }

    
    errorElement.innerHTML = ""; 
}
  


 

  function validation() {
    if(checkFirstName()==false || checkLastName()==false || checkPassword()==false || checkGender()==false || checkDate()==false || checkPhone()==false || checkEmail()==false || checkCv()==false|| checkTemppic()==false){
        return false;
    }
  }