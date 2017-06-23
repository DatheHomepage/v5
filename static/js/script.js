$("document").ready(function(){
	$(".article").toggleClass("article-shadow");
	var link = $(".article > a");
	link.mousedown(function(){
		$(this).parent().toggleClass("article-shadow");
	});
	link.mouseup(function(){
		$(this).parent().toggleClass("article-shadow");
	});
});
