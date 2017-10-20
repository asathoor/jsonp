$.ajax({
    url: "js/xkcd.js",
    jsonp: "callback",
    dataType: "json",
 
    data: {
        format: "json"
    },
    success: function( response ) {
    	
    	// ... testing, testing ...
        //console.log( response ); // server response
		//console.log( response[0].title.rendered ); // ok
		//console.log( response.length );

			for( var i = 0; i < response.length; i++){
				console.log( response[i].title.rendered );
				$('#jsonp').append( '<div><h2>' 
					+ response[i].img 
					+ '</h2>' 
					+ '<div class="articleContent">' 
					+ response[i].content.rendered 
					+ '</div>');
			}
    }
});