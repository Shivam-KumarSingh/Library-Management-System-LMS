document.addEventListener("DOMContentLoaded", function(){ 
    const booksButton = document.getElementById("books");
    const homepageContainer = document.getElementById("homepage");
    const booksinContainer = document.getElementById("booksin");
    booksButton.addEventListener("click", function() {
        homepageContainer.style.display = "none";
        booksinContainer.style.display = "block";
    });
});
document.addEventListener("DOMContentLoaded", function(){ 
    const studentsButton = document.getElementById("students");
    const homepageContainer = document.getElementById("homepage");
    const studentsinContainer = document.getElementById("studentsin");
    studentsButton.addEventListener("click", function() {
        homepageContainer.style.display = "none";
        studentsinContainer.style.display = "block";
    });
});
document.addEventListener("DOMContentLoaded", function(){ 
    const issueButton = document.getElementById("issue/return");
    const homepageContainer = document.getElementById("homepage");
    const issueinContainer = document.getElementById("issuein");
    issueButton.addEventListener("click", function() {
        homepageContainer.style.display = "none";
        issueinContainer.style.display = "block";
    });
});
document.addEventListener("DOMContentLoaded", function() {
    
const addbookButton = document.getElementById("addbook");

    addbookButton.addEventListener("click", function() {
        window.open("./addbook.php");
    });
});

document.addEventListener("DOMContentLoaded", function() {
    
    const updatebookButton = document.getElementById("updatebook");
    
        updatebookButton.addEventListener("click", function() {
            window.open("./updatebook.php");
        });
    });
document.addEventListener("DOMContentLoaded", function() {
    const deletebookbutton = document.getElementById("deletebook");

    deletebookbutton.addEventListener("click", function() {
        window.open("./delete.php","_blank");
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const addstudentbutton = document.getElementById("addstudent");

    addstudentbutton.addEventListener("click", function() {
        window.open("./addstudent.php","_blank");
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const removestudentbutton = document.getElementById("removestudent");

    removestudentbutton.addEventListener("click", function() {
        window.open("./removestudent.php","_blank");
    });
});
document.addEventListener("DOMContentLoaded", function() {
    const searchbookbutton = document.getElementById("searchbooks");

    searchbookbutton.addEventListener("click", function() {
        window.open("./searchbook.php","_blank");
        });
});
document.addEventListener("DOMContentLoaded", function() {
    const issuebookbutton = document.getElementById("issuebooks");

    issuebookbutton.addEventListener("click", function() {
        window.open("./searchbook.php","_blank");
        });
});
document.addEventListener("DOMContentLoaded", function() {
    const returnbookbutton = document.getElementById("returnbook");

    searchbookbutton.addEventListener("click", function() {
        window.open("./1.php","_blank");
        });
});