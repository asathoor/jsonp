<?php require_once "header.php"; ?>


<div class="jumbotron">
	<h1>A Title</h1>
</div>

<main>
	<article id="jsonp"></article>
</main>

<footer>
	&copy; GPLv3 Per Thykjaer Jensen
</footer>

<!-- get content from multimusen.dk -->
<script>

$.ajax({
    url: "http://research-wordpress.dk/wp-json/wp/v2/posts",
    jsonp: "callback",
    dataType: "json",
 
    data: {
        format: "json"
    },
    success: function( response ) {
        console.log( response ); // server response
				console.log( response[0].title.rendered ); // ok
				console.log( response.length );

			for( var i = 0; i < response.length; i++){
				console.log( response[i].title.rendered );
				$('#jsonp').append( '<div><h2>' 
					+ response[i].title.rendered 
					+ '</h2>' 
					+ '<div class="articleContent">' 
					+ response[i].content.rendered 
					+ '</div>');
			}
    }
});

</script>

<?php require_once "footer.php"; ?>