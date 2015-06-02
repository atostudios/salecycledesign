jQuery(document).ready(function($){
//Clipboard

var client = new ZeroClipboard( document.getElementsByClassName("copy") );

client.on( "ready", function( readyEvent ) {
  // alert( "ZeroClipboard SWF is ready!" );

} );
})