function openNav() {
    document.getElementById ("mobileNav").style.width = "100%";
    document.getElementById ("container").style.filter = "blur(5px)";
}

function closeNav() {
    document.getElementById ("mobileNav").style.width = "0%";
    document.getElementById ("container").style.filter = "blur(0px)";
}

window.onresize = function (){
    if(window.innerWidth >= 600){
        closeNav();
    }
}