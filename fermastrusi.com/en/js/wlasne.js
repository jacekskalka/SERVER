$(document).ready( function() {
var active = "Home";
var change = "";
var przepis ="";
var przepis_active ="";
var oferta ="";
var oferta_active ="";
var  aktualny = "#inner1";
var  nastepny = "#inner2";
var kolor = "#listaOfert li:first";

			$('#slider').nivoSlider({
			currentSlide: 0,
			currentImage: '',
			totalSlides: 0,
			running: true,
			paused: false,
			stop: false,
			controlNavEl: false
			});
	
$('.button').click(function(){
	change = $(this).html();
	
		if ( change=="Home"){ $('#slider').data('nivoslider').start();} else {  $('#slider').data('nivoslider').stop(); }
		
		 if (change=="Offer") { 
			$('.ofertaListing').click(function(){
			if (oferta_active !== "" ){
			$("#"+oferta_active+"").hide();
			}
			oferta = $(this).children(0).html();
			var kolor_tla = $(this).parent().css("background-color"); 
			$(kolor).css("background-color",kolor_tla);

			if(oferta =='Ostrich eggs'){ oferta='Ostrich_eggs';}
			if(oferta =='Blown ostrich eggs'){ oferta='Blown_ostrich_eggs';}
			if(oferta =='Half egg shells'){ oferta='Half_egg_shells';}
			if(oferta =='Fragments of shell'){ oferta='Fragments_of_shell';}
			if(oferta =='Ostrich feathers'){ oferta='Ostrich_feathers';}
			if(oferta =='Ostrich leather'){ oferta='Ostrich_leather';}
			if(oferta =='Quail eggs'){ oferta='Quail_eggs';}
			if(oferta =='quails'){ oferta='quails';}

			$("#"+oferta+"").show();
			oferta_active = oferta;
			$(this).parent().css("background-color","white");
			kolor = $(this).parent();
			});
	 } 
	 
	 
	
	 // if (change=="Recipes") { $("#layout").animate({ height: "1150px" },500);
		// $(function() {		// accordion
		// $( "#accordion" ).accordion({ 
		// event: "click",
		// active: false,
		// collapsible: true,
		// autoHeight: false,
		// });
		
			// $( "#dialog-link, #icons li" ).hover(
				// function() {
					// $( this ).addClass( "ui-state-hover" );
				// },
				// function() {
					// $( this ).removeClass( "ui-state-hover" );
				// }
			// );
		// });	 
		// } else  { $("#layout").animate({ height: "920px" },500);  }   // do poprawki 
	 

	 if (change=="Gallery"){ 
	 	$(".fancybox").fancybox({
		openEffect	: 'none',
		closeEffect	: 'none'
		});
 
			$("#g4").click(function(){
			$(".gal").fadeOut("slow" );
			$("#Galeria4").fadeIn("slow" );
			});
			$("#g3").click(function(){
			$(".gal").fadeOut("slow" );
			$("#Galeria3").fadeIn("slow" );
			});
			$("#g2").click(function(){
			$(".gal").fadeOut("slow" );
			$("#Galeria2").fadeIn("slow" );
			});
			$("#g1").click(function(){
			$(".gal").fadeOut("slow" );
			$("#Galeria1").fadeIn("slow" );
			});
			
	 }		

	$("#"+active+"").animate({marginLeft: "-700px"},500,function(){$("#"+active+"").hide(); $("#"+change+"").show();$("#"+change+"").animate({marginLeft: "0px"},500);});	
	active = change;
 });

});
