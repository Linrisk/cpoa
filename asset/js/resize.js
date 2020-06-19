$(function() {
	margin_bottom = 50;
	let size = $(window).height() - $('.toresize')[0].getBoundingClientRect().top - margin_bottom;
	$('.toresize').height(size)
})
	