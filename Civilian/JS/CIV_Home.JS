function ShowAbout(){
    document.getElementById("About").style.display = "block";
    document.getElementById("Complain").style.display = "none";
    document.getElementById("Min_List").style.display = "none";
}

function ShowComplain(){
    document.getElementById("Complain").style.display = "block";
    document.getElementById("About").style.display = "none";
    document.getElementById("Min_List").style.display = "none";
}

function ShowMin(){
    document.getElementById("Min_List").style.display = "block";
    document.getElementById("About").style.display = "none";
    document.getElementById("Complain").style.display = "none";
}
function Updatebtn(){
    window.location.href = "../view/update.php";
}
function ShowVLN(){

}

function ShowREP(){

}