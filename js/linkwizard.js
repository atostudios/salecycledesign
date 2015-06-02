
jQuery(document).ready(function($){

console.log("Start");
var newHTML;

function getHtmlPlease() {
//Gets HTML//
var yourHTML = editor.getValue();

//Link Number variable for existing Link placeholders
var oldLinkNumber = 1;

//Creates placeholder string with link number//
var oldLinkString = '\\['+'\\['+'Link'+'\\]'+'\\]'+oldLinkNumber+'\\|';


//This regular expression enables it replace multiple instances of the same numbered placeholder//
var clearHTML = yourHTML.replace(new RegExp(oldLinkString, 'gi'), '');

console.log(clearHTML);
var count = (clearHTML.match(/href/gi) || []).length;
//This loops the expression and increases the number each time// 
for (x = 2;x < 200; x++){
	
	var oldLinkStringx = '\\['+'\\['+'Link'+'\\]'+'\\]'+x+'\\|';
	clearHTML = clearHTML.replace(new RegExp(oldLinkStringx, 'gi'), '');
}


console.log(clearHTML, x);

//This takes the HTML with the cleared placeholders and starts adding them 

newHTML = clearHTML;

//reg ex instances

//Replaces 
var sessionPlaceholder = 'href="' + '\\[' + '\\[session';
var itemPlaceholder = 'href="' + '\\[' + '\\[item';
var recItem = 'href="' + '\\[' + '\\[rec';
var customField = 'href="' + '\\[' + '\\[cust';

newHTML = newHTML.replace(new RegExp(sessionPlaceholder, 'gi') , 'href="[[Link]]'+ '-' + '|[[session');
newHTML = newHTML.replace(new RegExp(itemPlaceholder, 'gi') , 'href="[[Link]]'+ '-' + '|[[item');
newHTML = newHTML.replace(new RegExp(recItem, 'gi') , 'href="[[Link]]'+ '-' + '|[[rec');
newHTML = newHTML.replace(new RegExp(customField, 'gi') , 'href="[[Link]]'+ '-' + '|[[cust');
newHTML = newHTML.replace(/href=""/gi, 'href="[[Link]]'+ '-' + '|"');
newHTML = newHTML.replace(/href="h/gi, 'href="[[Link]]'+ '-' + '|h');
newHTML = newHTML.replace(/href="w/gi, 'href="[[Link]]'+ '-' + '|w');




console.log(count, 'hello');

 for(i = 1; i <= count; i++){
	
	newHTML = newHTML.replace('href="[[Link]]-|', 'href="[[Link]]'+ i +'|');

}

//Prints to Input field
console.log(count);


var newLinkNumber = count + parseInt(linknumber);

var jsonobj = {
	links : newLinkNumber
}

$.ajax({
		type: 'POST',
        url: 'linkcount.php',
        data: {jsonobj: jsonobj},
        success:function(data, textStatus, jqXHR){
            console.log('AJAX SUCCESS');
        }, 
        complete : function(data, textStatus, jqXHR){
            console.log('AJAX COMPLETE');
            getLinks(function(data){
			console.log(data);
		
			getLinks(function(data){
	console.log(data);
	linknumber = data["links"].toString();
			$('.copied').html('Counted ' + count + ' links <br /> Linkwizard has unleashed its magic on ' + linknumber + ' links.');
			 $('.copied').fadeIn("fast").delay(800).fadeOut("slow");
			})
			})
        }
})


output.setValue(newHTML);



}








document.getElementById("convert").onclick = function() {getHtmlPlease()};





function getLinks (callback) {
	var url = "links.json";
	$.getJSON(url, callback)
}

var linknumber;

getLinks(function(data){
	console.log(data);
	linknumber = data["links"].toString();
			})






console.log("End");


var client = new ZeroClipboard( document.getElementById("copy-button") );

client.on( "ready", function( readyEvent ) {
  // alert( "ZeroClipboard SWF is ready!" );

    client.on( 'copy', function(event) {
           client.setText( newHTML );
           $('.copied').html('Copied to clipboard');
           $('.copied').fadeIn("fast").delay(800).fadeOut("slow");
        } );

  client.on( "aftercopy", function( event ) {
    // `this` === `client`
    // `event.target` === the element that was clicked
 	

   
  } );
} );

})