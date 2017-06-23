$(document).ready(function () {
    $(".navbar-link").click(function () {
        
        l = $("#navbar");
        l.toggleClass("active");
        $("#main").toggleClass("active");
        console.log("Open Sidebar");
    });
});