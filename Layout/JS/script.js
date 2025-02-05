function searchData(query) {
    var searchResults = document.getElementById("searchResults");

    if (query.length > 0) {
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "../Modle/search.php", true); 
        
        
        var formData = new FormData();
        formData.append("query", query);

        xhr.onload = function () {
            if (xhr.readyState==4 &&   xhr.status == 200) {
                searchResults.innerHTML = xhr.responseText;
                searchResults.style.display = "block";
            } else {
                console.error("Error searching data");
            }
        };


        xhr.send(formData);
    } else {
        searchResults.style.display = "none";
    }
}

function changepage(url) {
    window.location.href = url;
}