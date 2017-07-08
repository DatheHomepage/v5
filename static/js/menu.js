$(document).ready(function () {
    /* Menü unterpunkt erweitern */
    $(".expand").click(function (e) {
        $(this).toggleClass("expanded");
        $(this).children("ul:first").slideToggle({duration: 250, easing: "linear"}); // Untergeordnete UL ausklappen
        e.stopPropagation(); // Event stoppen, damit nichts anderes bewegt wird
    });

    /* Menüleiste öffnen */
    $(".navbar-link").click(function () {
        $(this).toggleClass("active");
        $("#navbar").toggleClass("active");
    });
});