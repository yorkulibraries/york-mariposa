// JavaScript Document

$(document).ready(function() {
						   
	$("#year_selector").click(function() {
		$("#exhibit_years").slideToggle('fast');
		$("#year_selector").toggleClass("year_selector_toggled");
		return false;
	});
});