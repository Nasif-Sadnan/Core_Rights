function checkFirstName() {
    var nameInput = document.getElementById("CIV_Firstname").value;
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
    var nameInput = document.getElementById("CIV_Lastname").value;
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
    var passwordField = document.getElementById("VIC_password").value;
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
    var genders = document.getElementsByName("CIV_Gender");
    var isChecked = false;

    // Check if any radio button is checked
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

function Show_Pass() {
    var x = document.getElementById("VIC_password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}


function checkDate() {
    var dateInput = document.getElementById("CIV_dob").value;
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
    var nid = document.getElementById("CIV_NID").value;
    const nidRegex = /^[0-9]{13}$/;
  
    if (nid == "" || !nidRegex.test(nid)) 
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
    var phone = document.getElementById("CIV_phone").value;
    const phoneRegex = /^[0-9]{11}$/;
  
    if (phone == "" || !phoneRegex.test(phone)) 
    {
      document.getElementById("phoneerror").innerHTML = "Enter valid phone number"; 
      return false;
    } 
    else 
    {
      document.getElementById("phoneerror").innerHTML = ""; 
    }
  }

  function checkAddress() {
    var address = document.getElementById("address").value;
    var addresserror = document.getElementById("addresserror");

    if (address == "") {
        addresserror.innerHTML = "Address cannot be empty.";
        return false;
    } 
    else if (address.length < 5) {
        addresserror.innerHTML = "Address must be at least 5 characters long.";
        return false;
    } 
    else {
        addresserror.innerHTML = ""; 
       
    }
}
function checkEmail() {
    var email = document.getElementById("CIV_email").value;
    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
  
    if (email == "" || !emailRegex.test(email)) {
      document.getElementById("emailerror").innerHTML = "Enter valid email address"; 
      return false;
    } 
    else 
    {
      document.getElementById("emailerror").innerHTML = ""; 
    }
  }


  function checkNidFront() {
    var fileInput = document.getElementById("CIV_NID_front");
    var errorElement = document.getElementById("fronterror");
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

function checkNidBack() {
    var fileInput = document.getElementById("CIV_NID_Back");
    var errorElement = document.getElementById("backerror");
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

function checkTemppic() {
    var fileInput = document.getElementById("temppic");
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

function checkallow() {
    var agreeYes = document.getElementById("agreeYes");
    var agreeNo = document.getElementById("agreeNo");
    var errorField = document.getElementById("agreeerror");

    
    if (!agreeYes.checked && !agreeNo.checked) {
        errorField.innerHTML = "Please select Yes or No.";
        return false;
    } 
    
    else {
        errorField.innerHTML = "";
    
}
}


  
  function validation() {
    if( checkFirstName()==false || checkLastName()==false || checkPassword()===false || checkGender()==false || checkDate()==false || checkPhone()==false || checkAddress()==false || checkNID()==false || checkEmail()==false ||checkDivision()==false|| checkDistrict()==false|| checkNidFront()==false || checkNidBack()==false || checkTemppic()==false || checkallow()==false){
        return false;
    }
  } 