function checkFirstName() {
    var nameInput = document.getElementById("REP_Firstname").value;
    var errorElement = document.getElementById("firsterror");

    // Regular expression to allow only alphabets and spaces
    var nameRegex = /^[a-zA-Z\s]+$/;

    // Check if the input is empty
    if (nameInput == "") {
        errorElement.innerHTML = "Name cannot be empty.";
        return false;
    }

    // Check if the name matches the regex
    if (!nameRegex.test(nameInput)) {
        errorElement.innerHTML = "Name must contain only letters and spaces.";
        return false;
    }

    else {
        errorElement.innerHTML = ""; // Clear error message
    }
}

function checkLastName() {
    var nameInput = document.getElementById("REP_Lastname").value;
    var errorElement = document.getElementById("lasterror");

    // Regular expression to allow only alphabets and spaces
    var nameRegex = /^[a-zA-Z\s]+$/;

    // Check if the input is empty
    if (nameInput == "") {
        errorElement.innerHTML = "Name cannot be empty.";
        return false;
    }

    // Check if the name matches the regex
    if (!nameRegex.test(nameInput)) {
        errorElement.innerHTML = "Name must contain only letters and spaces.";
        return false;
    }

    else {
        errorElement.innerHTML = ""; // Clear error message
    }
}

function checkPassword() {
    var passwordField = document.getElementById("REP_password").value;
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
    var x = document.getElementById("REP_password");
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
        divisionerror.innerHTML = ""; // Clear error if valid
        
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
        districterror.innerHTML = ""; // Clear error if valid
        
    }
}

function checkGender() {
    var genders = document.getElementsByName("REP_gender");
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


function checkDate() {
    var dateInput = document.getElementById("REP_DOB").value;
    var errorElement = document.getElementById("dateError");

    // Check if the date is empty
    if (!dateInput) {
        errorElement.innerHTML = "Please enter a date.";
        return false;
    }
    var date = new Date(dateInput);
    if (isNaN(date.getTime())) {
        errorElement.innerHTML = "Invalid date format.";
        return false;
    }

    // Check if the date is in the future
    var today = new Date();
    today.setHours(0, 0, 0, 0);

    if (date > today) {
        errorElement.innerHTML = "Date cannot be in the future.";
        return false;

    } 
    else {
        errorElement.innerHTML = ""; // Clear error message
    }
}


function checkNID() {
    var nid = document.getElementById("REP_nid").value;
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
    var nid = document.getElementById("REP_Phn_no").value;
    const phoneRegex = /^[0-9]{11}$/;
  
    if (nid == "" || !phoneRegex.test(nid)) 
    {
      document.getElementById("phnerror").innerHTML = "Enter valid phone number"; 
      return false;
    } 
    else 
    {
      document.getElementById("phnerror").innerHTML = ""; 
    }
  }

function checkEmail() {
    var email = document.getElementById("REP_email").value;
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


  function checkImage() {
    var fileInput = document.getElementById("REP_img");
    var errorElement = document.getElementById("imgerror");
    var file = fileInput.files[0]; // Get the selected file

    // Check if a file is selected
    if (!file) {
        errorElement.innerHTML = "Please select a file.";
        return false;
    }

    // Validate file type
    var fileType = file.type; // MIME type
    if (!fileType.startsWith("image/")) {
        errorElement.innerHTML = "Only picture files (JPG, PNG, GIF, etc.) are allowed.";
        return false;
    }

   
    errorElement.innerHTML = ""; 
}



function checkCv() {
    var fileInput = document.getElementById("REP_CV");
    var errorElement = document.getElementById("cverror");
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
  
function checkWorking() {
    var working = document.getElementById("Working_Catagory");
    var workingerror = document.getElementById("catagoryerror");
    
    if (working.value == "none") 
    {
        workingerror.innerHTML = "Please select a working catagory.";
        return false;
    } 
    else 
    {
        workingerror.innerHTML = ""; 
        
    }
}


 

  function validation() {
    if(checkFirstName()==false || checkLastName()==false ||checkPassword()==false || checkGender()==false || checkPhone()==false ||checkEmail()==false  ||  checkNID()==false || checkDate()==false    || checkDivision()==false|| checkDistrict()==false || checkWorking()==false || checkCv()==false || checkImage()==false ){
        return false;
    }
  } 