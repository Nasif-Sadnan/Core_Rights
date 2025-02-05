function checkFirstName() {
    var nameInput = document.getElementById("Min_Firstname").value;
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
    var nameInput = document.getElementById("Min_Lastname").value;
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
    var passwordField = document.getElementById("MIN_password").value;
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
    var x = document.getElementById("MIN_password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

function checkMinistry() {
    // Get the selected value from the dropdown
    var ministry = document.getElementById("Ministry").value;
    
    // Get the error message element
    var errorElement = document.getElementById("nameerror");
    
    // Check if the selected value is "None"
    if (ministry == "None") {
        // Set the error message and style
        errorElement.innerHTML = "Please select a valid Ministry.";
  
        return false; // Prevent form submission
    } 
    else {
       
        errorElement.innerHTML = "";

    }
}

function checkGender() {
    var genders = document.getElementsByName("Min_gender");
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
    var dateInput = document.getElementById("Min_dob").value;
    var errorElement = document.getElementById("dateError");

    // Check if the date is empty
    if (!dateInput) {
        errorElement.innerHTML = "Please enter a date.";
        return false;
    }
    var date = new Date(dateInput);
    if (isNaN(date.getTime())) {
        errorElement.innerHTML = "Invalid date format.";
        return;
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
    var nid = document.getElementById("Min_nid").value;
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

function checkEmail() {
    var email = document.getElementById("Min_email").value;
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
    var fileInput = document.getElementById("MIN_NID_front");
    var errorElement = document.getElementById("fronterror");
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

    // Clear error if valid
    errorElement.innerHTML = ""; // Clear error message
}

function checkNidBack() {
    var fileInput = document.getElementById("MIN_NID_Back");
    var errorElement = document.getElementById("backerror");
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

    // Clear error if valid
    errorElement.innerHTML = ""; // Clear error message
}

function checkUserPic() {
    var fileInput = document.getElementById("MIN_userpic");
    var errorElement = document.getElementById("picerror");
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

    // Clear error if valid
    errorElement.innerHTML = ""; // Clear error message
}
  
  


 

  function validation() {
    if(checkFirstName()==false || checkLastName()==false ||checkPassword()==false ||checkMinistry()==false || checkGender()==false || checkEmail()==false || checkDate()==false || checkNID()==false|| checkNidFront()==false || checkNidBack()==false || checkUserPic()==false){
        return false;
    }
  } 