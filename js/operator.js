$(document).ready(function() {
    //Dodavanje vrednosti u edit user modal

    var location = document.location.href.substring(document.location.href.lastIndexOf("/") + 1, document.location.href.length)

    var tabs = document.getElementById("pills-tabContent").children;
    var nav = document.getElementById("pills-tab").children;
    if (location == 'home.php?msg=reportCompleted'
    ) {

        tabs[2].classList.add("active");
        tabs[2].classList.add("show");
        tabs[0].classList.remove("active");
        tabs[1].classList.remove("active");

        nav[2].children[0].classList.add("active");
        nav[0].children[0].classList.remove("active");
        nav[1].children[0].classList.remove("active");
    };
});