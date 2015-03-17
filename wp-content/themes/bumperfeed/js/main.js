// JavaScript Document

// codekit pre-prends





function showNotifications() {

	$('html').click(function() {
		$('#top-notification ul').hide();
	});

	$('#top-notification').click(function(event){
	    event.stopPropagation();
	    $(this).children('ul').toggle();

	});
}

function firstLoad() {
	showNotifications();

}


$(function() {
	firstLoad();
});

