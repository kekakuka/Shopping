window.onload = function () { check(); };
var displayMenu = document.getElementById("displayMenu");
function check() {
    displayMenu.style.display = localStorage.getItem("display");
    localStorage.setItem("display", "compact");
}
function check2() {
    if (displayMenu.style.display === "inline") {
        displayMenu.style.display = "none";
    }
    else if (displayMenu.style.display === "none") {
        displayMenu.style.display = "inline";
    }
    else {
        displayMenu.style.display = "compact";
    }
}

