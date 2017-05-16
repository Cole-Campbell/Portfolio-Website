function downFunction() {
    var x = document.getElementById("main-top-nav");
    var icon = document.getElementById("menu-status");
    if (x.className === "top-nav") {
        x.className += " responsive";
        icon.className = "fa fa-times";
    } else {
        x.className = "top-nav";
        icon.className = "fa fa-bars";
    }
}

$('html').click(function(){
    //
});

$('#main-top-nav').click(function(event){
    event.stopPropagation();
})