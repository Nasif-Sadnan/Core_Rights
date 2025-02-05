function checkDescription() {
    var address = document.getElementById("description").value;
    var addresserror = document.getElementById("descriptionerror");

    if (address == "") {
        addresserror.innerHTML = "Description cannot be empty.";
        return false;
    } 
    else if (address.length < 5) {
        addresserror.innerHTML = "Description must be at least 5 characters long.";
        return false;
    } 
    else {
        addresserror.innerHTML = ""; 
       
    }
}

function checkDate() {
    var dateInput = document.getElementById("COM_Time_Occured").value;
    var errorElement = document.getElementById("dateerror");

   
    if (!dateInput) {
        errorElement.innerHTML = "Please enter a date.";
        return false;
    }
    var date = new Date(dateInput);
    if (isNaN(date.getTime())) {
        errorElement.innerHTML = "Invalid date format.";
        return;
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


function checkVictimName() {
    var nameInput = document.getElementById("COM_Victim").value;
    var errorElement = document.getElementById("vicitmerror");

    
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


function checkOpponenttName() {
    var nameInput = document.getElementById("COM_Opponent").value;
    var errorElement = document.getElementById("opponenterror");

    
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


function checkOccurence() {
    var address = document.getElementById("COM_Place").value;
    var addresserror = document.getElementById("placeerror");

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

function checkDivision() 
{
    var divisionSelect = document.getElementById("COM_Division");
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
    var districtSelect = document.getElementById("COM_District");
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

function validation() {
    if(checkDescription()==false || checkDate()==false || checkVictimName()==false || checkOpponenttName()==false || checkOccurence()==false || checkDivision()==false || checkDistrict()==false){
        return false;
    }
  } 