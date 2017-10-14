$(function() {
	$("[data-background-image]").each(function() {
		$(this).css("background-image", "url(" + $(this).attr("data-background-image") + ")");
	});

	$(".background-image").each(function() {
		$(this).css("background-image", "url(" + $(this).find("img").attr("src") + ")");
	});

})