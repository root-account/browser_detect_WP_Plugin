jQuery(document).ready(function(){

	var html_data = '<div class="outdated_browser"> \
	<i class="material-icons">clear</i>\
	<span>YOUR BROWSER IS OUT-OF-DATE. </span>\
	<br/><p>Please use one of the links below to update your browser to view this website correctly.</p><br/>\
	<a href="https://www.google.com/chrome/?brand=CHBD&gclid=EAIaIQobChMIlKzf6-2P2gIVa7XtCh0mEAtoEAAYASAAEgJ0cvD_BwE&gclsrc=aw.ds&dclid=CIDlhO7tj9oCFesR0wodUgMF7g" target="_blank"> CHROME</a>\
	<a href="https://www.mozilla.org/en-US/firefox/new/" target="_blank"> FIREFOX</a>\
	<a href="https://www.microsoft.com/en-za/windows/microsoft-edge" target="_blank"> EDGE</a>\
	<a href="https://support.apple.com/downloads/safari" target="_blank"> SAFARI</a>\
	</div>';

	jQuery( "body" ).prepend(html_data);


	jQuery('.outdated_browser i').on("click", function(){
		jQuery('.outdated_browser').css("display", "none");
	});


});
