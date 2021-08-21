// Add your JS customizations here

jQuery(document).ready(function ($) {
	$("#close-btn").click(function () {
		event.preventDefault();
		$("#top-bar-wrapper").remove();
	});
});
