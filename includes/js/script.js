
$("#username").focusout(function() {
 // ajax call will go here
	 $.get( 'username_chk.php',
	 { username: $("#username").val() },
	 function(response) {
	 if (response == "Taken") {
	  $('#username_error_box').html("This username is taken.");
	 }
	 });
});
