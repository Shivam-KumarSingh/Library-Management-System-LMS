document.addEventListener("DOMContentLoaded", function() {
    const searchbookbutton = document.getElementById("searchbutton");

    searchbookbutton.addEventListener("click", function() {
        if (confirm("Are you sure you want to delete?") == true) {
            alert("Book deleted successfully.");
        }
    });
});
