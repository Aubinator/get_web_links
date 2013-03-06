
function VerificationUrl()
{
var ValeurAdresse;


{
	 ValeurAdresse= document.getElementById('adresse').value;
	 
}
	 
	// alert(ValeurAdresse);
	 return ValeurAdresse;
 
} 
 
function affich_href() 
{ 
var list_href="" ; 

$("a").each(function(i){list_href+= $(this).attr("href")+"<br/>" }); 
$("#liens").append( list_href ); 

} 