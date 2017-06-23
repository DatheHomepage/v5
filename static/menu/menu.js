$(document).ready(function () {
    $(".expand").click(function (e) {
        $(this).toggleClass("expanded");
        $(this).children("ul:first").slideToggle({duration: 250, easing: "linear"});
        e.stopPropagation();
    });

}); //$(document).ready