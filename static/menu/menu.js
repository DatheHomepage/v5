$(document).ready(function() {
   $(".expand").click(function(e) {
      $(this).toggleClass("expanded");
      $(this).children("ul:first").slideToggle("300");
      e.stopPropagation();
   }); 
}); //$(document).ready