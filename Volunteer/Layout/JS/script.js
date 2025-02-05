$(document).ready(function () {
    $("#searchInput").keyup(function () {
        var query = $(this).val();

        if (query.length > 0) {
            $.ajax({
                url: "../Modle/search.php",
                method: "POST",
                data: { query: query },
                success: function (data) {
                    $("#searchResults").html(data).show();
                }
            });
        } else {
            $("#searchResults").hide();
        }
    });

    $("#ministryBtn").click(function () {
        window.location.href = "../View/Ministry_List.php"; // Redirect to the new page
    });
});
