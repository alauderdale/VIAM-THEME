jQuery(document).ready(function($){

	var localDev = true;

	if(localDev == true) {
		loadReload();
	}

		//fancybox if/when needed
		$('.fancybox').fancybox();
		
		// $('.fb-video').fancybox({
	 //        padding: 0,
	 //        helpers: {
	 //            media: {}
	 //        }
	 //   });

	$('.tooltip-up').tooltip({html:true});

	$( "#js-menu-button-open,#js-menu-button-close" ).click(function() {
        $( ".main-nav-container" ).toggleClass( "fixed-nav" );
        $( ".menu-drop" ).toggleClass( "menu-show" );
        $( "html" ).toggleClass( "nav-open" );
    });

    //company tabs
    $('#myTab a').click(function (e) {
      e.preventDefault()
      $(this).tab('show')
    })
    //get the first one set up
    $( "#company_tabs ul li:first-of-type" ).addClass( "active" );
    $( ".tab-pane:first-of-type" ).addClass( "in active" );


});