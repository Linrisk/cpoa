$(function() {
	margin_bottom = 20;
	let size = $(window).height() - $('.toresize')[0].getBoundingClientRect().top - margin_bottom;
	$('.toresize').height(size)
})
	