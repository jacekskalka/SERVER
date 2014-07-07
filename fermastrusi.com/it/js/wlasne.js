$(document).ready( function() {
var active = "Presentazione";
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
	
	if ( change=="Presentazione"){ $('#slider').data('nivoslider').start();} else {  $('#slider').data('nivoslider').stop(); }
	
		 if (change=="Offerta") { $('#slider').off(".nivoSlider"); //?
			$('.ofertaListing').click(function(){
			if (oferta_active !== "" ){
			$("#"+oferta_active+"").hide();
			}
			oferta = $(this).children(0).html();
			
			var kolor_tla = $(this).parent().css("background-color"); 
			$(kolor).css("background-color",kolor_tla);

			if(oferta =='Le uova'){ oferta='Le_uova';}
			if(oferta =='Uova di quaglia'){ oferta='Uova_di_quaglia';}
			if(oferta =='Il Guscio'){ oferta='Il_Guscio';}
			if(oferta =='La  meta` di guscio'){ oferta='La_meta_di_guscio';}
			if(oferta =='Pezzi di guscio'){ oferta='Pezzi_di_guscio';}
			if(oferta =='Le piume'){ oferta='Le_piume';}
			if(oferta =='La pelle'){ oferta='La_pelle';}
			if(oferta =='Quaglia'){ oferta='Quaglia';}
			if(oferta =='La carne'){ oferta='La_carne';}

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
	 

	 if (change=="Galleria"){ 
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
