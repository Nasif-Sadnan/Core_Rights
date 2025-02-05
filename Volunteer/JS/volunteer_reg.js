function checkFirstName() {
    var nameInput = document.getElementById("VLN_Firstname").value;
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
    var nameInput = document.getElementById("VLN_Lastname").value;
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

function Show_Pass() {
    var x = document.getElementById("VLN_password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

function checkDivision() 
{
    var divisionSelect = document.getElementById("divisionSelect");
    var divisionerror = document.getElementById("divisionerror");
    
    if (divisionSelect.value == "none") 
    {
        divisionerror.innerHTML = "Please select a division.";
        return false;
    } 
    else 
    {
        divisionerror.innerHTML = ""; 
        
    }
}


function checkDistrict() 
{
    var districtSelect = document.getElementById("districtSelect");
    var districterror = document.getElementById("districterror");
    
    if (districtSelect.value == "none") 
    {
        districterror.innerHTML = "Please select a district.";
        return false;
    } 
    else 
    {
        districterror.innerHTML = ""; 
        
    }
}

function checkGender() {
    var genders = document.getElementsByName("VLN_Gender");
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
    var dateInput = document.getElementById("VLN_dob").value;
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


function checkNID() {
    var nid = document.getElementById("VLN_NID").value;
    const phoneRegex = /^[0-9]{13}$/;
  
    if (nid == "" || !phoneRegex.test(nid)) 
    {
      document.getElementById("niderror").innerHTML = "Enter valid nid number"; 
      return false;
    } 
    else 
    {
      document.getElementById("niderror").innerHTML = ""; 
    }
  }

  function checkPhone() {
    var nid = document.getElementById("VLN_phone").value;
    const phoneRegex = /^[0-9]{11}$/;
  
    if (nid == "" || !phoneRegex.test(nid)) 
    {
      document.getElementById("phoneError").innerHTML = "Enter valid phone number"; 
      return false;
    } 
    else 
    {
      document.getElementById("phoneError").innerHTML = ""; 
    }
  }

   
function checkEmail() {
    var email = document.getElementById("VLN_email").value;
    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
  
    if (email == "" || !emailRegex.test(email)) {
      document.getElementById("emailError").innerHTML = "Enter valid email address"; 
      return false;
    } 
    else 
    {
      document.getElementById("emailError").innerHTML = ""; 
    }
  }


  
  function checkWorking() {
    var genders = document.getElementsByName("VLN_Work");
    var isChecked = false;

    
    for (var i = 0; i < genders.length; i++) {
        if (genders[i].checked) {
            isChecked = true;
        
        }
    }

    if (!isChecked) {
        document.getElementById("workError").innerHTML = "Please select a Working Time.";
        return false;
    } 
    else {
        document.getElementById("workError").innerHTML = ""; 
    }
}

function checkTemppic() {
    var fileInput = document.getElementById("VLN_pic");
    var errorElement = document.getElementById("temppicerror");
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


function checkCv() {
    var fileInput = document.getElementById("VLN_cv");
    var errorElement = document.getElementById("cvError");
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

  
  function validation() {
    if( checkFirstName()==false || checkLastName()==false || checkPassword()===false || checkGender()==false  || checkDate()==false|| checkNID()==false  || checkPhone()==false  || checkEmail()==false ||checkDivision()==false|| checkDistrict()==false || checkWorking()==false ||checkTemppic()==false|| checkCv()==false){
        return false;
    }
  } 