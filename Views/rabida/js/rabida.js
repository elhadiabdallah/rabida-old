$(document).ready(function () {    
/******************************************************************************************************/
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function () {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
            document.getElementById("rbd_profile_nav_id").style.top = "60px";


        } else {
            document.getElementById("rbd_profile_nav_id").style.top = "0";

        }
        prevScrollpos = currentScrollPos;
    }
 });