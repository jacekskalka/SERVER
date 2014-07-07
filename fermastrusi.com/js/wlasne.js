
$(document).ready( function() {

var active = "Informacje";
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

	if ( change=="Informacje"){ $('#slider').data('nivoslider').start();} else {  $('#slider').data('nivoslider').stop(); }
	
	 if (change=="Przepisy") { $("#layout").animate({ height: "1250px" },500);
		$(function() {		// accordion
		$( "#accordion" ).accordion({ 
		event: "click",
		active: false,
		collapsible: true,
		autoHeight: false,
		});
			$( "#dialog-link, #icons li" ).hover(
				function() {
					$( this ).addClass( "ui-state-hover" );
				},
				function() {
					$( this ).removeClass( "ui-state-hover" );
				}
			);
		});	 }
	 else  { $("#layout").animate({ height: "920px" },500); }   // do poprawki 
	 
	 if (change=="Oferta") {
			$('.ofertaListing').click(function(){
			if (oferta_active !== "" ){
			$("#"+oferta_active+"").hide();
			}
			oferta = $(this).children(0).html();
			var kolor_tla = $(this).parent().css("background-color"); 
			$(kolor).css("background-color",kolor_tla);

			if(oferta =='Jaja strusie'){ oferta='Jaja_strusie';}
			if(oferta =='Jaja przepiórcze'){ oferta='Jaja_przepiórcze';}
			if(oferta =='Wydmuszki z jaj'){ oferta='Wydmuszki_z_jaj';}
			if(oferta =='Połówki skorup jaj'){ oferta='Połówki_skorup_jaj';}
			if(oferta =='Odłamki skorupek'){ oferta='Odłamki_skorupek';}
			if(oferta =='Pióra strusie'){ oferta='Pióra_strusie';}
			if(oferta =='Skóry strusie'){ oferta='Skóry_strusie';}
			if(oferta =='Przepiórki'){ oferta='Przepiórki';}

			$("#"+oferta+"").show();
			oferta_active = oferta;
			$(this).parent().css("background-color","white");
			kolor = $(this).parent();
			});
	 }	
	 if (change=="Galeria"){
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

	if ( change=="Ptaki Ozdobne"||change =="Ptaki_Ozdobne") { change = "Ptaki_Ozdobne"; 

			$(".fancybox2").fancybox({ openEffect	: 'none', closeEffect	: 'none'});
			$(".fancybox3").fancybox({ openEffect	: 'none', closeEffect	: 'none'});
			$(".fancybox4").fancybox({ openEffect	: 'none', closeEffect	: 'none'});
			$(".fancybox5").fancybox({ openEffect	: 'none', closeEffect	: 'none'});
			$(".fancybox6").fancybox({ openEffect	: 'none', closeEffect	: 'none'});
			$(".fancybox7").fancybox({ openEffect	: 'none', closeEffect	: 'none'});
			$(".fancybox8").fancybox({ openEffect	: 'none', closeEffect	: 'none'});
			$(".fancybox9").fancybox({ openEffect	: 'none', closeEffect	: 'none'});
			$(".fancybox10").fancybox({ openEffect	: 'none', closeEffect	: 'none'});
			$(".fancybox11").fancybox({ openEffect	: 'none', closeEffect	: 'none'});
			$(".fancybox12").fancybox({ openEffect	: 'none', closeEffect	: 'none'});
			$(".fancybox13").fancybox({ openEffect	: 'none', closeEffect	: 'none'});
			$(".fancybox14").fancybox({ openEffect	: 'none', closeEffect	: 'none'});
	
		$("#layout").animate({ height: "2150px" },500);
	} //else  { $("#layout").animate({ height: "920px" },500); }  
	 
	if (change=="Przepiórki"){
	 	$(".fancyboxP").fancybox({
		openEffect	: 'none',
		closeEffect	: 'none'
		});
		$("#layout").animate({ height: "1250px" },500);
	} //else  { $("#layout").animate({ height: "920px" },500); }
	 
	 
	$("#"+active+"").animate({
	marginLeft: "-700px"
	},500, function(){
	$("#"+change+"").animate({
	marginLeft: "0px"
	},500);
	});

	active = change;
});


// Slideshow1 - fade in/out - na samej gorze

// setInterval(function() {
	// switch (aktualny) {
		// case "#inner1" : $(aktualny).fadeOut("slow"); 
						 // $(nastepny).fadeIn("slow");
						 // aktualny = "#inner2";
						 // nastepny = "#inner3";
						 // break;
		// case "#inner2":  $(aktualny).fadeOut("slow"); 
						 // $(nastepny).fadeIn("slow");
						 // aktualny = "#inner3";
						 // nastepny = "#inner1";
						 // break;
		// case "#inner3":  $(aktualny).fadeOut("slow"); 
						 // $(nastepny).fadeIn("slow");
						 // aktualny = "#inner1";
						 // nastepny = "#inner2";  
						 // break;
	// }
// }, 3500);



});
