$("document").ready(function(){
	$(".article").toggleClass("article-shadow");
	$(".article > a").mousedown(function(){
		$(this).parent().toggleClass("article-shadow");
	});
	$(".article > a").mouseup(function(){
		$(this).parent().toggleClass("article-shadow");
	});
});
