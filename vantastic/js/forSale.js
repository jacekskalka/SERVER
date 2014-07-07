$( document ).ready(function() {
/*UP-DOWN SLIDE*/
 active_menu = "#a";
 active_vanmenu = "#menu1 li:first";
 $( ".vanmenu" ).click(function() {
	 x =  "#" + $(this).attr('data');
	 //hover
	 $(active_vanmenu).removeClass('bg');	 
	 active_vanmenu = $(this).parent();	 
	 $(active_vanmenu).addClass('bg');
	 
	 if (active_menu==""){$(x).slideDown( 200, function() {active_menu =x;});}
	 else{ $(active_menu).slideUp( 200, function() { $(x).slideDown( "slow", function() {active_menu =x; });});}
	 $(".gallery > div").css("display","none");
	 
 });

 /* GALLERY CHANGE ON CLICK */
active_gallery ="#ag1";
clicked_gallery="";
clicked_this="";
$(".fancybox1a").fancybox({ openEffect	: 'none', closeEffect	: 'none'});

$(".subList li").click(function(){

$(this).siblings().removeClass('underscore'); // underscore 
$(this).addClass('underscore');

van_letter = $(this).parent().parent().attr('id'); // returns a,b or c
number = $(this).children().html(); // returns number
clicked_gallery = "#" + van_letter + "g" + number;
$(clicked_gallery).show();
$(active_gallery).hide();

$(".fancybox" +number+van_letter).fancybox({ openEffect	: 'none', closeEffect	: 'none'});
active_gallery = clicked_gallery; 

 
 });
 /*
 blink = false;
 while(true){
 blink = !blink;
 alert(blink);
 }*/
 
 
 
});
