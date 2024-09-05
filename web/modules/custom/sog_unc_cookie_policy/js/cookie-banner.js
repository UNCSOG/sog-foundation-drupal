( function ( $ ) {
	$( document ).ready( function() {
		// console.log( 'Hello from the sog_profiles JS file! Paste new jQuery code in this file!' );

        cookie_init();
	});

    function cookie_init() {
        $('.cookie-banner-button').on("click",function() {
            $('#cookie-banner').slideUp(500,function() {
                $('#cookie-banner').remove();
            });
    
            var date = new Date();
    
            date.setDate(date.getDate()+ 60);
    
            document.cookie = "cookie_accepted=1; expires=" + date.toUTCString() + "; path=/";
        });
    }
})( jQuery );
