<?php 
/**
 * file: cartoon.php
 **/
require_once "header.php"; 
?>

<!-- will display the cartoon here -->
<div id="cartoon"></div>

<script>

// get a CKCD cartoon from a json file
$.ajax({
    url: "js/xkcd.json",
    jsonp: "callback",
    dataType: "json",
 
    data: {
        format: "json"
    },
    success: function( response ) {
 	
    	// ... testing, testing ...
        //console.log( response ); // server response
		console.log( response.img ); // the img url
		
		$('#cartoon').append( '<img src="' + response.img + '">' );
	
    }
});

</script>

<?php require_once "footer_xkcd.php"; ?>