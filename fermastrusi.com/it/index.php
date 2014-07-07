<!doctype html>
<html>
<head>
<meta charset="UTF-8" />
<title> Ferma Strusi </title>
<link href="css/style.css" type="text/css" rel="stylesheet" /> 
<link rel="icon" type="image/x-icon" href="favicon.ico" />
<script type="text/javascript" src="js/jquery.js" > </script>
<script type="text/javascript" src="js/cycle.js" > </script>
<script>
$('#s7').cycle({ 
    fx:    'scrollRight', 
    delay: -3000 
});
</script>

<!-- accordion -->
<link href="js/jquery-ui-1.10.3.custom/css/ui-lightness/jquery-ui-1.10.3.custom.min.css" type="text/css" rel="stylesheet" /> 
<script type="text/javascript" src="js/jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.min.js" > </script>
	<script>
	$(function() {		
		$( "#accordion" ).accordion({ 
        event: "click",
        active: false,
        collapsible: true,
        autoHeight: false,
    });
		// Hover states on the static widgets
		$( "#dialog-link, #icons li" ).hover(
			function() {
				$( this ).addClass( "ui-state-hover" );
			},
			function() {
				$( this ).removeClass( "ui-state-hover" );
			}
		);
	});
	</script>

		
<!-- fancybox -->
<script type="text/javascript" src="Fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
<link rel="stylesheet" href="Fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="Fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
<link rel="stylesheet" href="Fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
<script type="text/javascript" src="Fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="Fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
<link rel="stylesheet" href="Fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
<script type="text/javascript" src="Fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
<script type="text/javascript">
$(document).ready(function() {
	$(".fancybox").fancybox({
		openEffect	: 'none',
		closeEffect	: 'none'
	});
});
</script>



</head>

<body>
<div id="wrapper" style="position : relative">

<div id="slideshow1">
	<div id="napis" style="background-image: url('widgety/napis3.png'); height:123px;width:600px;position:absolute; top:35px; float : left; z-index : 25;"> </div>
	<div id="inner1" class="innerSlide1">
	<img src="slideshow/1200_200/2.JPG" style="width:1000px;height:130px;" />
	</div>
	<div id="inner2" class="innerSlide1" style = "display:none;" >
	<img src="slideshow/1200_200/1.JPG" style="width:1000px;height:130px;" />
	</div>
	<div id="inner3" class="innerSlide1" style = "display:none;">
	<img src="slideshow/1200_200/3.JPG" style="width:1000px;height:130px;" />
	</div>
</div>


<div id="top" class="effect7"> 
<table id="flagi">
<tr>
<td><a href="#" > <img src="flags/uk.jpg" style="width:30px; text-align:right; padding : 0px 2px; margin : 0px;" /> </a></td>
<td><a href="#" > <img src="flags/polish.jpg" style="width:30px; text-align:right; padding : 0px 2px; margin : 0px;" /> </a></td>
<td><a href="#" > <img src="flags/italian.jpg" style="width:30px; text-align:right; padding : 0px 2px; margin : 0px;" /> </a></td>
<td>
<form method="get" action="http://www.google.com/search" id="szukaj">
<input type="text" name="q" size="15" maxlength="255" value="" placeholder="search" />
<input type="submit" value="szukaj"/>
<input type="hidden" name="sitesearch" value="http://www.localhost"/>
</form>
</td>
</tr>
</table>
</div>

<table id="layout" style="margin-left:20px;margin-top:10px;">
<tr>
<td style="width:280px; vertical-align: top;" class="box effect8" style="background-color:transparent;">

<!--	<img src="widgety/logo.png" style="width : 200px; margin : 10px 20px;" /> -->
<!--		<img src="widgety/logoJ.jpg" style="width : 150px;  margin : 10px 20px;" /> -->
	<div >
		<div id="nav" style="background-image:url('widgety/logoJ150.jpg'); background-position:top; background-repeat:no-repeat; padding-top: 200px;">	
			<ul>
			<li><a href="##" class="button">Informacje</a> </li>
			<li><a href="##" class="button">Oferta</a></li>
			<li><a href="##" class="button">Galeria</a></li>
			<li><a href="##" class="button">Przepiórki</a></li>
			<li><a href="##" class="button">Przepisy</a></li>
			<li><a href="##" class="button">Kontakt</a></li>	
			</ul>

		</br>	

		<img src="widgety/feather.jpg" style="width:200px;" /> 
	
	
		<br>	
		<div id="front_info">
		<table style="margin-left:15px;">
			<tr>
			<td><div style="width:30px;height:24px;background:url('widgety/info.gif')">   </div></td>
			<td><div style="line-height:24px;"> Ferma Strusi Afrykańskich  </div></td>
			</tr>	
			<tr>
			<td><div style="width:30px;height:24px;background:url('widgety/koperta.gif')">   </div></td>
			<td style="line-height :27px;"><div style=""> Rączka 6 </br> 48-317 Korfantów  </div></td>
			</tr>
			<tr>
			<td><div style="width:30px;height:24px;background:url('widgety/telefon.gif')">   </div></td>
			<td><div style="line-height:24px;"> +48 530 086 057  </div></td>
			</tr>
			<tr>
			<td><div style="width:30px;height:24px;background:url('widgety/email.gif')">   </div></td>
			<td><div style="line-height:24px;"> fermastrusi@gmail.com  </div></td>
			</tr>
		</table>
		<br>
		 Odwiedzin :
		<img src="http://buycialisgeneric.com/count.php?c_style=46&id=1383757463" border=0 alt="">
		</div>
		</div>

	</div>
	

	
</td>
	
<td style="width: 700px; vertical-align: top; overflow:hidden;">	
<div id="content" style="position:relative; width : 680px;  " >
		<div id="Informacje" style="position:absolute; z-index:1; margin-left : 0; width:650px;" >
			
			
			<!-- <img style="margin-left:80px;" src="info/info.png"/> -->
			
			
			<div id="galeria_cycle"> 
				<div id="cycle_plugin" style="margin : 30px; text-align: center;" >
					
					<div id="s7" class="pics" style="border-top-left-radius:30px;border-bottom-right-radius:30px"> 
				 
					<div class="cycle" style=""> <img src="info/1.jpg"  /> </div>
					<div class="cycle" style=""> <img src="info/2.jpg"  /> </div>
					<div class="cycle" style=""> <img src="info/3.jpg"  /> </div>
					<div class="cycle" style=""> <img src="info/4.jpg"  /> </div>
					<div class="cycle" style=""> <img src="info/5.jpg"  /> </div>
					
					</div> 
				</div>
			</div>
			
			
			<hr/ style="margin-left: 30px;">
			<div id="zawartosc" style="margin : 20px;"> 
			<p>
			Hodowlą strusi afrykańskich zajmujemy się od 2007roku.  Wtedy to w październiku 2007r. do malowniczej miejscowości Rączka (woj. opolskie, gmina Korfantów) przyjechało 6 strusi. Z biegiem czasu zyskując coraz to nowe doświadczenia hodowla stale powiększa się, a aktualnie liczy ok. 150sztuk młodzieży oraz stado podstawowe - 12 reproduktorów. 
			<br>
			<br>
			Wzrost liczebności stada jest możliwy dzięki ciągłej modernizacji fermy. W 2008r. wybudowany został dodatkowy pawilon dla reproduktorów. Obecnie również możemy poszczycić się wylęgarnią wyposażoną w nowoczesny sprzęt do inkubacji jaj, a także pomieszczeniem do odchowu piskląt (z ogrzewaniem podłogowym).  
			<br>
			<br>
			Warto podkreślić ekologiczny wymiar hodowli. Strusie na naszej fermie karmione są wyłącznie paszami roślinnymi, głównie zbożami pochodzącymi z upraw okolicznych rolników oraz wysokobiałkowymi zielonkami, zgodnie z zaleceniami specjalistów ds. żywienia strusi.
			Dodatkowo ferma objęta jest ścisłym nadzorem weterynaryjnym Powiatowego Inspektoratu Weterynarii w Nysie oraz miejscowego lekarza weterynarii.  Okresowo ptaki badane są w kierunku Salmonellozy, ptasiej grypy. 
			<br>
			<br>
			</p>
			</div>
		</div>
	
		<div id="Oferta" style="position:absolute; z-index:20; margin-left : -700px;  width:650px; "> 
	
			<ul id="listaOfert">
			<li style="background-color:white"><a href="##" class="ofertaListing"><p style="display : none">Mieso</p><img src="widgety/buttons/mieso.png"/></a></li>
			<li><a href="##" class="ofertaListing"><p style="display : none">Jaja strusie</p><img src="widgety/buttons/jaja.png"/> </a></li>
			<li><a href="##" class="ofertaListing"><p style="display : none">Wydmuszki z jaj</p><img src="widgety/buttons/wydmuszki.png"/></a></li>
			<li><a href="##" class="ofertaListing"><p style="display : none">Połówki skorup jaj</p><img src="widgety/buttons/polowki.png"/></a></li>
			<li><a href="##" class="ofertaListing"><p style="display : none">Odłamki skorupek</p><img src="widgety/buttons/odlamki.png"/></a></li>
			<li><a href="##" class="ofertaListing"><p style="display : none">Pióra strusie</p><img src="widgety/buttons/piora.png"/></a></li>
			<li><a href="##" class="ofertaListing"><p style="display : none">Skóry strusie</p><img src="widgety/buttons/skory.png"/></a></li>
			<li><a href="##" class="ofertaListing"><p style="display : none">Jaja przepiórcze</p><img src="widgety/buttons/jajaPrzepiorcze.png"/></a></li>
			<li><a href="##" class="ofertaListing"><p style="display : none">Przepiórki</p><img src="widgety/buttons/przepiorki.png"/></a></li>
			</ul>
			
			
			<div id="Mieso" class="Oferta" style = "z-index:15; display : block;">
			<h1 style="text-align : center">Mięso strusie</h1>
			<img src="oferta/mieso.jpg" style="width : 350px; float : left; padding : 20px;"/>
			<p class="opis"> 
			Mięso strusia posiada wysokie walory dietetyczne i odżywcze. Struś nie jest ptakiem hodowanym na masową skalę,  a mięso z niego pozyskiwane jest bezpieczne pod względem zdrowotnym. 
			</p>
			<p class="opis">
			Mięso strusie jest niskokaloryczne, zawiera stosunkowo niewielką ilość cholesterolu oraz korzystny profil kwasów tłuszczowych. Pod tym względem mięso strusie jest zbliżone do mięsa indyczego. Spośród mięs dostępnych na rynku, mięso strusie charakteryzuje się najniższą zawartością tłuszczu (0,9% w mięsie surowym). Ponadto mięso strusie zawiera najwyższą zawartość wielonienasyconych kwasów tłuszczowych – około 35%.
			</p>
			<p class="opis">
			Dodatkowo mięso strusie zawiera stosunkowo dużo kwasu arachidonowego, niezbędnego do prawidłowej budowy układu nerwowego. Dodatkowo wzmacnia on odporność organizmu, a jego niedobór zwiększa ryzyko wystąpienia alergii oraz chorób autoimmunologicznych (reumatoidalne zapalenie stawów, toczeń). Białko zawarte w mięsie strusim jest wysokiej wartości biologicznej, zawiera wszystkie niezbędne aminokwasy konieczne do prawidłowego rozwoju oraz wzrostu organizmu. Mięso strusie odznacza się również niską zawartością sodu – 43 mg/100 g – oraz stosunkowo wysokim stężeniem żelaza – 2,4 mg/100 g tkanki.
			</p>			
			</div>
			
			<div id="Jaja_strusie" class="Oferta" style = "z-index:15">
			<h1 style="text-align : center">Jaja strusie</h1>
			<img src="oferta/jaja.jpg" style="width : 350px; float : left; padding : 20px;"/>
			<p class="opis"> 
			Jajo strusia waży około 1650 g i w przybliżeniu zawiera 1000 g białka oraz 320 g żółtka, stanowiąc dużą porcję cennych, potrzebnych składników odżywczych. Zawartość cholesterolu w żółtku jest porównywalna z zawartością cholesterolu w jajku kurzym.
			Warto podkreślić duży udział w żółtku jaja strusiego wielonienasyconego kwasu tłuszczowego. W związku z czym jaja strusie w porównaniu z innymi jajkami są bardziej dietetyczne.
			</p>
			</div>
			
			<div id="Wydmuszki_z_jaj" class="Oferta" style = "z-index:15">
			<h1 style="text-align : center">Wydmuszki z jaj</h1>
			<p class="opis"> 
			Idealne nie tylko do wykonania przepięknych pisanek, ale także do zdobionych półmisków na owoce, szkatułek, witraży, obrazów czy grafik.
			</p>
			</div>
			
			<div id="Połówki_skorup_jaj" class="Oferta" style = "z-index:15">
			<h1 style="text-align : center">Połówki skorup jaj</h1>
			<p class="opis"> 
			Oryginalny stroik, doniczka, dekoracja stołu? – tylko z połówkami skorup jaj strusich!			
			</p>
			</div>

			<div id="Odłamki_skorupek" class="Oferta" style = "z-index:15">
			<h1 style="text-align : center">Odłamki skorupek</h1>
			<p class="opis"> 
			Odłamki skorupek wykorzystywane są do produkcji oryginalnej biżuterii oraz amuletów szczęścia - bowiem noszenie przy sobie skorupy strusiego jaja ma taką moc jak noszenie kawałka kości słoniowej!
			</p>
			</div>
			
			<div id="Pióra_strusie" class="Oferta" style = "z-index:15">
			<h1 style="text-align : center">Pióra strusie</h1>
			<p class="opis"> 
			Wykorzystywane są zarówno w plastyce, zdobnictwie czy krawiectwie. Dodatkowo dzięki ich własnością antyelektrostatycznym, używa się ich również do usuwania kurzu. Co więcej pióra strusie przynoszą szczęście (w przeciwieństwie do piór pawich)!
			</p>
			</div>

			<div id="Skóry_strusie" class="Oferta" style = "z-index:15">
			<h1 style="text-align : center">Skóry strusie</h1>
			<p class="opis"> 
			(surowe oraz garbowane)		
			</p>
			<p class="opis"> 
			Skóry strusie uważane są za produkt luksusowy. Cenione głównie dzięki dużej wytrzymałości i odporności na działanie wody, jak również za oryginalną fakturę zewnętrzną. Wytwarza się z niej całą galanterię skórzaną. Buty, torebki, paski, portfele… prawdziwy dotyk luksusu!
			</p>
			</div>
			
			<div id="Jaja_przepiórcze" class="Oferta" style = "z-index:15">
			<h1 style="text-align : center">Jaja przepiórcze</h1>
			<img src="oferta/jajaPrzepiorcze.jpg" style="width : 350px; float : left; padding : 20px;"/>
			<p class="opis">
			Jaja przepiórcze są wartościowym elementem zdrowej i zbilansowanej diety. Charakteryzują się one znakomitym smakiem oraz dużym udziałem żółtka w stosunku do całego jaja. Mają działanie prozdrowotne ze względu na dużą zawartość składników odżywczych. Skład chemiczny przepiórczych jaj jest bogaty w substancje wspomagające prawidłowe funkcjonowanie całego ludzkiego organizmu.  Zawierają łatwo przyswajalne i pełnowartościowe białka oraz charakteryzują się dużą zawartością aminokwasów (treoniny, metioniny) oraz mikroelementów, np. wapnia, miedzi, cynku, żelaza, fosforu, witaminy B1, B2, B12, karotenu. Dodatkowo jaja przepiórcze zawierają mniej tłuszczu oraz cholesterolu. 
			<ul style = " list-style-type:circle;">
			<li> Wspomagają leczenie cukrzycy, astmy, zaburzeń nerwowych, anemii, chorób nerek i wątroby.  </li>
			<li> Stymulują rozwój umysłowy dzieci i młodzieży, dzięki dużej zawartości fosforu </li>
			<li> Wykazują działanie antydepresyjne - poprawiają samopoczucie i dodają energii </li>
			<li> Wzmacniają układ odpornościowy organizmu </li>
			<li> Wpływają korzystnie na słabe włosy - maski i odżywki do włosów z jaj przepiórczych wzmacniają strukturę włosów, chroniąc końcówki przed rozdwajaniem </li>
			<li> Poprawiają przemianę materii - niezbędne w diecie odchudzającej </li>
			<li> Znane są ze swoich właściwości afrodyzjakalnych </li>
			<li> Stosowane w diecie u osób z nadciśnieniem i innymi chorobami sercowo-naczyniowymi oraz u osób  uczulonych na białko jaja kurzego (jaja przepiórcze są wolne od alergenów) </li>
			</ul>
			</p>
			</div>

			<div id="Przepiórki" class="Oferta" style = "z-index:15">
			<h1 style="text-align : center">Mieso Przepiórcze</h1>
			<img src="oferta/miesoPrzepiorcze.jpg" style="width : 350px; float : left; padding : 20px;"/>
			<p class="opis"> 
			Mięso z przepiórki ma jasnoróżowy kolor i delikatny smak. Jest chude i bogate w witaminy, dlatego zalecane jest głównie w diecie niemowląt i dzieci, osób starszych oraz rekonwalescentów.
			Tuszkę z przepiórki możemy gotować, piec, dusić, nadziewać mięsnym, ziołowym lub owocowym farszem. Powstają z niej smaczne zupy, rosoły oraz potrawki. Najlepiej jednak smakuje jako samodzielne danie. 
			<b> Smakosze mięsa drobiowego sądzą, że przepiórce jako przysmakowi nie dorównuje żaden inny gatunek drobiu. <b>
			Mięso przepiórki w smaku przypomina nieco miękkie mięso kurczaka, ale jest delikatniejsze i ma bardziej intensywny zapach. Należy uważać na to, że mięso zawiera mało wody, dlatego może się zbyt szybko wysuszyć podczas pieczenia. Aby temu zapobiec można owinąć zwierzę plastrami boczku lub słoniny albo piec w rękawie do pieczenia, dzięki czemu sos zapobiegnie nadmiernemu wyschnięciu mięsa.
			<br><br>
			W SPRZEDAŻY:<br>
			- jaja przepiórcze konsumpcyjne<br>
			- jaja przepiórcze lęgowe<br>
			- tuszki przepiórcze<br>
			- pisklęta i młodzież<br>
			- rodziny do dalszej hodowli<br> 
			
			</p>
			</div>
	
	
	
	</div>
	
	
	
	<div id="Przepisy" style="position:absolute; z-index:20; margin-left : -700px;  width:650px; min-height:1000px; background-image:url('test/przepisy.jpg');background-position:center bottom;background-repeat:no-repeat; ">
	
	<div id="accordion" style="margin-left : 20px;">
		
			<h3>Jajecznica z jaj strusich</h3>
			<div>
			<p class="opis" >
			<h4>Składniki</h4><br>
			<ul>	
			<li>• 2 jajo strusie </li>
			<li>• masło </li>
			<li>• sól, pieprz</li>
			<li>• (- cebula, szczypiorek)</li>
			<li>•  wiertarka</li>
			</ul>
			<h4>Przygotowanie</h4><br>
			Cebulę smażymy na małym ogniu do przyrumienia. Następnie wbijamy razem strusie jajo i pozostałe składniki (z wyjątkiem szczypioru). Mieszamy intensywnie tak, by jajecznica nie przywarła do naczynia, aż do momentu uzyskania pożądanej konsystencji. 
			Gotową potrawę posypujemy posiekanym szczypiorem.
			</p>
			</div>
			
			<h3>Rosół z przepiórek</h3>
			<div><p class="opis" >
			<h4>Przygotowanie</h4><br>
			Tuszkę przepiórki zalać zimną wodą, wstawić na niewielki ogień, zagotować. Po zagotowaniu zmniejszyć ogień do minimum, dodać włoszczyznę, marchewki, pietruszkę, seler i kawałek pora, a także wszystkie przyprawy z wyjątkiem magii. Gotować na maleńkim ogniu bez przykrycia do czasu, aż przepiórka będzie miękka. Pod koniec gotowania dodać odrobinę magii do smaku. 
			W międzyczasie ugotować makaron. 
			Rosół podawać z ugotowanym makaronem, talarkami marchewki i drobno posiekaną natką pietruszki.
			</p></div>
			
			<h3>Przepiórka pieczona</h3>
			<div><p class="opis" >
			<h4>Składniki:</h4><br>
			<ul>	
			<li>• 2 przepiórki </li>
			<li>• 5 dag słoniny </li>
			<li>• 2 zmiażdżone ząbki czosnku</li>
			<li>• mielone jagody jałowca</li>
			<li>• mielona kolendra</li>
			<li>• sól</li>
			<li>• pieprz</li>
			</ul>
			<h4>Przygotowanie</h4><br>
			Tuszki natrzeć czosnkiem, posypać solą, jałowcem i kolendrom. Obłożyć dokładnie cienkimi plasterkami słoniny, związać ciasno bawełnianą nicią, pozostawić w cieple minimum 10 minut. Piekarnik rozgrzać do temperatury 180ºC. Mięso ułożyć na blasze, piec do zrumienienia.
			</p></div>
			
			<h3>Przepiórki duszone w śmietanie</h3>
			<div><p class="opis" >
			<h4>Przygotowanie</h4><br>
			Naszpikować przepiórkę, posolić i obrumienić na maśle, potem przekrajać, włożyć znów do rondelka, podlać śmietaną rozbitą z łyżką mąki i dusić pod pokrywą. Zamiast w śmietanie można także dusić w sosie maderowym - zrumieniwszy na maśle łyżkę, mąki, wlać kieliszek madery lub portweinu, podlać bulionem i dusić, przewracając przepiórki, aby dobrze nasiąkły tym sosem.
			</p></div>
						
			<h3>Faszerowane przepiórki</h3>
			<div><p class="opis" >
			<h4>Składniki:</h4><br>
			4 przepiórki <br>
			sól i świeżo mielony czarny pieprz <br>
			4 łyżki gotowanego ryżu <br>
			4 suszone morele, drobniutko posiekane <br>
			1 szczypta mielonego imbiru <br>
			½ łyżeczki otartej skórki pomarańczowej <br>
			1 łyżka orzechów piniowych <br>
			stopione masło <br>
			4 łyżki białego wina <br>
			sok z połowy pomarańczy <br>
			koniak <br>
			<br>
			<h4>Przygotowanie</h4><br>
			Wytrzyj przepiórki i natrzyj wewnątrz i na zewnątrz solą i pieprzem. Połącz ryż, posiekane morele, imbir, startą skórkę pomarańczową oraz orzeszki. Dodaj odrobinę stopionego masła, żeby farsz nie był sypki. Nafaszeruj przepiórki mieszaniną i ułóż na patelni. Posmaruj przepiórki stopionym masłem przy użyciu pędzla. Upiecz w duchówce – najpierw przez 8-10 min w temperaturze 230 stopni C, a następnie 15 min w temperaturze 150 stopni C, często podlewając gęstą, odparowaną mieszaniną wina, soku pomarańczowego i 4 łyżek płynnego masła. Wyłóż przepiórki na półmisek i przechowaj w cieple. Sprawdź smak płynu pozostałego z pieczenia w patelni, ewentualnie dopraw, a następnie polej przepiórki – najpierw sosem, a potem podgrzanym koniakiem i podpal. Natychmiast podawaj.
			</p></div>
			

			<h3>Przepiórki w jarzynach   </h3>
			<div><p class="opis" >
			<h4>Składniki:</h4><br>
			2 przepiórki, 100 g słoniny, 1 marchewka, 0.25 selera, 1 cebula, 100 g pomidorów, 200 g kapusty włoskiej, sól, pieprz, otarta skórka z cytryny, 1 łyżka soku z cytryny, 1 łyżeczka cukru, 0.5 szkl. białego wytrawnego wina, 50 g masła.	
			<h4>Przygotowanie</h4><br>
			<br>Sprawione i umyte przepiórki natrzeć solą, zostawić na godzinę w chłodnym miejscu, następnie owinąć plasterkami słoniny, polać stopionym masłem i upiec, często polewając sosem spod pieczeni. W miarę potrzeby skrapiać wodą. Kapustę drobno posiekać, marchewkę, seler i cebulę pokroić w plasterki. W rondlu stopić masło, włożyć warzywa, dodać sól, pieprz, skórkę z cytryny, wlać wino i dusić ok. 20 min. Dodać obrane ze skórki i pokrojone w ćwiartki pomidory oraz zdjętą z przepiórek, pokrojoną w kosteczkę słoninę. Doprawić do smaku solą, cukrem i sokiem z cytryny. Lekko wymieszać. Pokrojone na połówki przepiórek, ułożyć na wysmarowanym masłem żaroodpornym półmisku, obłożyć duszonymi jarzynami, wstawić na kilka minut do nagrzanego piekarnika.
			</p></div>
			
			<h3>Przepiórki zapiekane z pieczarkami i serem   </h3>
			<div><p class="opis" >
			<h4>Składniki:</h4><br>
			<br>2 przepiórki, 30 dag pieczarek, 20 dag cebuli, 2 łyżki tłuszczu do smażenia, parę łyżek wytrawnego białego wina, 10 dag ostrego żółtego sera, 0.5 szkl. śmietany, 1 łyżka masła do wysmarowania naczynia.
			<h4>Przygotowanie</h4><br>
			<br>Przepiórki podzielić na porcje, posolić. Pieczarki oczyścić, umyć, osączyć z wody, pokrajać w plastry i podsmażyć na tłuszczu, odparować płyn, dodać pokrajaną w plastry cebulę, posolić, oprószyć pieprzem i smażyć ciągle mieszając do lekkiego zrumienienia. Pieczarki i cebulę wyjąć. Mięso obsmażyć na tłuszczu pozostałym ze smażenia pieczarek, przełożyć do rondla, podlać winem i dusić ok. 20 min. pod przykryciem. Żaroodporne naczynie wysmarować masłem, położyć porcje przepiórek, obłożyć cebulą, pieczarkami i utartym żółtym serem, zalać śmietaną i zapiec w dobrze nagrzanym piekarniku. Podawać z drążonymi lub młodymi ziemniakami, cykorią, zieloną sałatą.
			</p></div>
			
			
			<h3>Przepiórki w pomarańczach   </h3>
			<div><p class="opis" >
			<h4>Składniki:</h4><br>
		            <br>2 - 4 przepiórki, 2 - 4 plasterki boczku lub słoniny, 2 pomarańcze umyte, obrane, wypestkowane i odwłóknione (przed obraniem ocieramy skórkę), 2 łyżeczki otartej skórki z pomarańczy, pół kostki masła, 2 ząbki czosnku, po 1 łyżeczce tymianku, rozmarynu i majeranku, sól, pieprz, 1 pomarańcza do przybrania. Do sosu: 0.5 l bulionu z dziczyzny lub z kostki rosołowej, 100 ml białego wytrawnego wina, 2 łyżki galaretki z żurawin, borówek, ewentualnie z agrestu lub porzeczek, 1 łyżka mąki ziemniaczanej.

			<h4>Przygotowanie</h4><br>
			<br>Na rozgrzanej, suchej patelni prażymy zioła, dodajemy masło, a kiedy się roztopi, wyciskamy przez prasę czosnek. Mieszamy i odstawiamy na bok. Oczyszczone, umyte i osuszone tuszki nacieramy z zewnątrz i wewnątrz solą i pieprzem, a następnie stopionym masłem z ziołami. Owijamy plastrami boczku lub słoniny. Przepiórki wkładamy do odkrytej brytfanny i wstawiamy do nagrzanego do 200°C piekarnika. Pieczemy ok. 30 min., podlewając sosem z pieczenia. Zdejmujemy z przepiórek boczek lub słoninę i odkładamy je na bok. Do brytfanny wkładamy cząstki pomarańczy i wszystko pieczemy jeszcze ok. 15 - 20 min., ciągle podlewając powstałym sosy. Wyjmujemy przepiórki z brytfanny i trzymamy w cieple. Sos z pieczenia razem z pomarańczami przekładamy do rondelka, dodajemy bulion, wino, galaretkę, otartą skórkę pomarańczową i gotujemy na wolnym ogniu ok. 10 min. Na końcu sos zagęszczamy mąką ziemniaczaną rozrobioną w małej ilości wody. Całość zagotowujemy. Przepiórki serwujemy obłożone cząstkami pomarańczy i plasterkami chrupiącej słoniny lub boczku. Sos podajemy oddzielnie w sosjerce.

			</p></div>
			
			<h3> Przepiórki duszone z ryżem  </h3>
			<div><p class="opis" >
			<h4>Składniki:</h4><br>
		            <br>8 przepiórek
			<br>	200 g ryżu
			<br>	8 plasterków słoniny
			<br>	80 g masła
			<br>	60 g tartego parmezanu
			<br>	10 g maki
			<br>	1 gałązka bazylii
			<br>	1 gałązka szałwii
			<br>	1 gałązka zielonej pietruszki i 1 seler naciowy
			<br>	3 łyżki wazowe rosołu
			<br>	1 kieliszek wina marsala
			<br>	30 g białych trufli w plasterkach
			<br>	sol
			<br>	pieprz
			<br>
			<h4>Przygotowanie</h4><br>
			<br>Przepiórki oczyścić, umyć, obłożyć plasterkami słoniny i obwiązać, a następnie włożyć do rondla z 10 g masła i całymi gałązkami ziół. Przyprawić sola, pieprzem i dusić na małym ogniu, dolewając stopniowo wino. W tym czasie w innym rondelku rozpuścić masło, zagęścić je mąka i zalać rosołem podgrzać i dobrze wymieszać, a następnie przelać do rondla z przepiórkami i dusić jeszcze 15 minut. Gotowe przepiórki wyjąć z rondla i trzymać w cieple, aby pozostały gorące. Z sosu usunąć gałązki ziół, zebrać tłuszcz i sos przecedzić. Ryz ugotować, odcedzić i dokładnie wymieszać z reszta masła i parmezanem. Przepiórki podawać ułożone na ryżu, polane gorącym sosem i posypane plasterkami trufli. 

			</p></div>
			
			<h3> Szaszłyki z przepiórczych jaj  </h3>
			<div><p class="opis" >
			<h4>Składniki:</h4><br>
						<br>	•	12 jajek przepiórczych 
			<br>	•	12 pomidorków koktajlowych 
			<br>	•	12 czarnych oliwek 
			<br>	•	12 marynowanych pieczarek 
			<br>	•	szczypior 
			<br>
			<h4>Przygotowanie</h4><br>
            Jajka ugotować na twardo, ostudzić, obrać ze skorupek. Pomidorki umyć, oliwki, pieczarki osączyć z zalewy, szczypior pociąć na 3-cm kawałki. Nakłuwać kolejno na drewniane patyczki do szaszłyków: pomidorki, jajka, oliwki, pieczarki, szczypior.

			</p></div>
			
			<h3> Strusie jajo faszerowane  </h3>
			<div><p class="opis" >
			<h4>Składniki:</h4><br>
					<br>
			<br>	•	1 jajko strusie
			<br>	•	2 pęczki natki pietruszki
			<br>	•	2 pęczki szczypiorku
			<br>	•	80 g tartej bułki
			<br>	•	100 g masła
			<br>	•	sól, pieprz
			<br>
			<h4>Przygotowanie</h4><br>
			<br>Jajko strusia gotujemy w osolonej wodzie na twardo około 2 godzin. Po wyjęciu i ostudzeniu dzielimy piłką do metalu wzdłuż na pół, uważając, żeby nie uszkodzić skorupy. Delikatnie wyjmujemy żółtko i białko z obu połówek. Dokładnie siekamy i mieszamy z posiekaną natką pietruszki i posiekanym szczypiorem oraz z tartą bułką. Doprawiamy solą i pieprzem. Połówki skorup od wewnątrz smarujemy masłem. Resztę masła siekamy i dodajemy do farszu. Farsz nakładamy do wysmarowanych skorup. Wyrównujemy i wstawiamy do piekarnika nagrzanego do 120ºC. Zapiekamy około 30-40 minut. Podajemy w skorupach na półmiskach.

			</p></div>
			
			<h3>Delikatna pieczeń ze strusiny  </h3>
			<div><p class="opis" >
			<h4>Składniki:</h4><br>
					<br>
			<br>	1,5 kg delikatnego mięsa strusiego, 
			<br>	125 g boczku, pociętego w paski, 
			<br>	1 szklanka wody, 
			<br>	0,5 szklanki wina lub 2 łyżki octu, 
			<br>	1 łyżka soli, 
			<br>	0,5 łyżeczki pieprzu, 
			<br>	2 posiekane ząbki czosnku. 
			<br>
			<h4>Przygotowanie</h4><br>
				Zmieszać sól z pieprzem i wetrzeć w boczek. Zrobić nacięcia w 
				mięsie strusim i powkładać w nie boczek i czosnek.  Umieścić 
				mięso z wodą i winem w szybkowarze i gotować przez około 1 h. 
				Następnie upiec w piekarniku.
			</p></div>
			
			
			<h3> Risotto ze strusiem i grzybami  </h3>
			<div><p class="opis" >
			<h4>Składniki:</h4><br>
					<br>
			<br> -	200 gram mięsa ze strusia pokrojonego w kostki 
			<br> - 	400 gram grzybów mieszanych lub prawdziwków 
			<br> - 	250 gram ryżu 
			<br> -	Olej z oliwek 
			<br> -	Czosnek 
			<br> -	Sól, pieprz 
			<br> -	Pietruszka 
			<br> -	Kostka rosołowa 
			<br> -	Pół szklanki białego wytrawnego wina 
			<br>
			<h4>Przygotowanie</h4><br>
				Gotować grzyby pocięte w talarki w 2 łyżkach oleju z oliwek z 
				dwoma ząbkami czosnku i łyżką pietruszkowej miazgi. Osolić. W 
				między czasie podsmażyć przez 10 min mięso strusie w 2 łyżkach 
				oliwy z oliwek dodając do smaku soli i pieprzu. Jak już grzyby 
				będą gotowe, dołożyć je do mięsa strusiego. Mieszać by nabrało 
				smaku. Następnie dolać pół szklanki białego wina. Pozwolić na 
				powolne parowanie wina, a następnie dodać kostkę rosołową cały 
				czas mieszając. Dołożyć ryż by nabrał smaku i mieszać kilka 
				chwil. 
				Podawać na gorąco
			</p></div>
			
			
			<h3>  Sznycel ze strusia z migdałami </h3>
			<div><p class="opis" >
			<h4>Składniki:</h4><br>
						<br>	4 sznycle ze strusia po 175g, 
				<br>	1 łyżeczka soli, 
				<br>	2 łyżki mąki, 
				<br>	50 g masła, 
				<br>	100 g płatków migdałowych, 
				<br>	2 połówki brzoskwiń z puszki, 
				<br>	1 łyżeczka pieprzu mielonego białego, 
				<br>	1 łyżeczka papryki mielonej słodkiej. 
				<br>
			<h4>Przygotowanie</h4><br>
			Mięso umyć, osuszyć, usunąć wszystkie błony, sznycle natrzeć z 
			obu stron pieprzem. Sól wymieszać z mąką i papryką, obtoczyć w 
			niej sznycle. Nadmiar mąki otrzepać. Połowę masła rozgrzać w 
			dużej patelni i smażyć na nim sznycle po l minucie  z każdej 
			strony. Zdjąć sznycle z patelni i obtoczyć je w płatkach 
			migdałowych. Migdały dobrze przycisnąć do mięsa. Pozostałe 
			mięso włożyć na patelnię smażyć sznycle ponownie z  każdej 
			strony po 3-4 minuty. Ułożyć sznycle na podgrzanym półmisku i 
			przechowywać w cieple. Osączone połówki z brzoskwini pokroić 
			w plasterki i podgrzać krótko na patelni. Sznycle podawać 
			udekorowane pokrojonymi brzoskwiniami. Odpowiednim 
			dodatkiem jest bagietka i młoda sałata.
			</p></div>
			
			
			<h3> Struś w morelach    </h3>
			<div><p class="opis" >
			<h4>Składniki:</h4><br>
					<br>500 g morel, 
			<br>500 g strusiny, 
			<br>3 łyżki oleju, 1 szklanka śmietany, 
			<br>4 cebule, 
			<br>1 łyżka masła, 
			<br>Sól, pieprz, cukier. 
			<br>
			<h4>Przygotowanie</h4><br>
			Morele opłukać, osuszyć i podzielić na ćwiartki pozbawiając 
			pestek. Mięso opłukać, osuszyć, natrzeć solą i pieprzem, 
			obsmażyć na gorącym oleju. Cebulę obrać, przekroić  na pół, 
			dodawać do mięsa i usmażyć, aż się zeszkli. Mięso przełożyć 
			wraz z cebulą do rondla, dodać 1/4 moreli i masło, dusić chwilę 
			pod przykryciem. Dodać śmietanę i dalej dusić 15-20 min na 
			małym ogniu. Gdy mięso będzie miękkie, wyjąć, pokroić, 
			pozostałe morele wrzucić do sosu. Całość doprawić solą, cukrem i 
			pieprzem od smaku. Mięso podawać w sosie.
			</p></div>
			
			<h3>Strusina po farmersku   </h3>
			<div><p class="opis" >
			<h4>Składniki:</h4><br>
						<br>
			<br>Duży filet z mięsa strusiego, 
			<br>Pepperoni łagodne (ok. 10 szt.), 
			<br>Grzyby suszone (ok. 5 dag), 
			<br>Pomidory suszone na słońcu (produkt oryginalny) zamiennie 
			<br>pomidory i Ketchup do smaku, 
			<br>Cebulki marynowane, 
			<br>Oliwa z oliwek, 
			<br>3 ząbki czosnku, 
			<br>Zioła prowansalskie, 
			<br>Pieprz, sól do smaku, 
			<br>Nać pietruszki. 
			<br>
			<h4>Przygotowanie</h4><br>
			<br>Filet natrzeć ziołami i rozgniecionym czosnkiem. Na rozgrzaną oliwę wrzucić filet. Smażyć z jednej strony i z drugiej strony około 30 minut. Pokrojoną paprykę pepperoni, suszone pomidory, cebulki oraz wcześniej sparzone grzyby wrzucić do pieczeni  podlewając wodą. Całość dusić około 40 min na wolnym ogniu. Wywar (sos) przyprawić do smaku (zagęścić jogurtem albo mąką). Mięso kroić skośnie w poprzek włókien. Polać gorącym 
			sosem. Całość udekorować natką pietruszki. Podawać  z ryżem zabarwionym na żółto szafranem.  
			</p></div>
			
			<h3> Stek ze strusia z sosem czosnkowym  </h3>
			<div><p class="opis" >
			<h4>Składniki:</h4><br>
						<br>
			<br><br>Marynata:   
			<br>4 ząbki czosnku, 
			<br>3 łyżki oliwy z oliwek, 
			<br>1 łyżka musztardy francuskiej, 
			<br>2 łyżki przyprawy grilowej, 
			<br><br>Sos: 
			<br>1/2 l. jogurtu naturalnego, 
			<br>4 łyżki majonezu, 
			<br>Szczypta cukru, 
			<br>Papryka ostra i słodka do smaku, 
			<br>1 główka czosnku (rozgnieść), 
			<br>2 drobno starte ogórki konserwowe, 
			<br>Sól, pieprz, do smaku. 
			<br>Wszystkie produkty połączyć, dobrze wymieszać. Sos powinien być bardzo ostry.  

			<br>
			<h4>Przygotowanie</h4><br>
			Mięso oczyścić z błony zewnętrznej, pokroić skośnie w poprzek włókien steki o grubości 1-1,5 cm. Przygotować marynatę (wszystkie składniki połączyć). Mięso marynować minimum 4 
			godziny. Steki smażyć na rozgrzanej oliwie na średnim ogniu około 4 min. z jednej strony. Następnie zmniejszyć  ogień i przewrócić na drugą stronę. Smażyć ok. 5 min.
			</p></div>
			
			<h3>  Porady w przygotowywaniu mięsa strusiego </h3>
			<div><p class="opis" >
			<h4>Przygotowanie i pieczenie mięsa strusiego wymaga 
			podporządkowania się kilku regułom, bez których nie uda nam się 
			uzyskać pożądanego efektu smakowego: </h4>
			<br><br>
			<h4>1. Jak większość mięs czerwonych, strusina powinna  najpierw 
			zostać ścięta (lekko podsmażona), po czym pieczona  wg 
			upodobań. Najlepiej jest piec ją na niewielkiej ilości tłuszczu (olej 
			lub masło) w średniej temperaturze. </h4> 
			<br><br>
			<h4>2. Po podsmażeniu mięsa (świadczy o tym kolor mięsa) w 
			średniej temperaturze, należy założyć 15 minut pieczenia dla 
			każdych 500 g (zwłaszcza dotyczy dużych porcji) pieczonych w 
			piekarniku (średnio w temperaturze 150-170°C), średnia grubość 
			steku powinna wynosić 2-2,5 cm. Strusinę powinno podawać się 
			różową. </h4>
			<br><br>
			<h4>3. W trakcie pieczenia w piekarniku strusinę należy  często 
			podlewać jej własnym sosem. </h4>
			<br><br>
			<h4>4. Nie należy nigdy nakłuwać mięsa. </h4> 
			<br><br>
			<h4>5. Strusinę najlepiej podawać jest na talerzach bądź naczyniach 
			uprzednio ogrzanych.</h4>

			</p></div>
		
	</div>
	</div>
	

	
	
	
	<div id="Galeria" style="position:absolute; z-index:20; margin-left : -700px;  width:650px; padding-left : 30px; "> 
		<div id="Galeria1" class="gal" style="height:800px;width : 650px;position:absolute;top:55px; ">
			<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/0.jpg"><img src="zdjecia/TB/0.jpg" alt="" /></a> </div>
			<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/1.jpg"><img src="zdjecia/TB/1.jpg" alt="" /></a> </div>
			<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/2.jpg"><img src="zdjecia/TB/2.jpg" alt="" /></a> </div>
			<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/3.jpg"><img src="zdjecia/TB/3.jpg" alt="" /></a> </div>
			<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/4.jpg"><img src="zdjecia/TB/4.jpg" alt="" /></a> </div>
			<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/5.jpg"><img src="zdjecia/TB/5.jpg" alt="" /></a> </div>
			<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/6.jpg"><img src="zdjecia/TB/6.jpg" alt="" /></a> </div>
			<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/7.jpg"><img src="zdjecia/TB/7.jpg" alt="" /></a> </div>
			<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/8.jpg"><img src="zdjecia/TB/8.jpg" alt="" /></a> </div>
			<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/9.jpg"><img src="zdjecia/TB/9.jpg" alt="" /></a> </div>
			<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/10.jpg"><img src="zdjecia/TB/10.jpg" alt="" /></a> </div>
			<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/11.jpg"><img src="zdjecia/TB/11.jpg" alt="" /></a> </div>
			<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/12.jpg"><img src="zdjecia/TB/12.jpg" alt="" /></a> </div>
			<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/13.jpg"><img src="zdjecia/TB/13.jpg" alt="" /></a> </div>
			<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/14.jpg"><img src="zdjecia/TB/14.jpg" alt="" /></a> </div>
			<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/15.jpg"><img src="zdjecia/TB/15.jpg" alt="" /></a> </div>
			<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/16.jpg"><img src="zdjecia/TB/16.jpg" alt="" /></a> </div>
			<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/17.jpg"><img src="zdjecia/TB/17.jpg" alt="" /></a> </div>
		</div>
		
		<div id="Galeria2" class="gal" style="height:800px;width : 750px;position:absolute;top:55px;  display : none;">		
		<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/19.jpg"><img src="zdjecia/TB/19.jpg" alt="" /></a> </div>
		<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/20.jpg"><img src="zdjecia/TB/20.jpg" alt="" /></a> </div>
		<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/21.jpg"><img src="zdjecia/TB/21.jpg" alt="" /></a> </div>
		<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/22.jpg"><img src="zdjecia/TB/22.jpg" alt="" /></a> </div>
		<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/23.jpg"><img src="zdjecia/TB/23.jpg" alt="" /></a> </div>
		<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/24.jpg"><img src="zdjecia/TB/24.jpg" alt="" /></a> </div>
		<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/25.jpg"><img src="zdjecia/TB/25.jpg" alt="" /></a> </div>
		<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/26.jpg"><img src="zdjecia/TB/26.jpg" alt="" /></a> </div>
		<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/27.jpg"><img src="zdjecia/TB/27.jpg" alt="" /></a> </div>
		<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/28.jpg"><img src="zdjecia/TB/28.jpg" alt="" /></a> </div>
		<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/29.jpg"><img src="zdjecia/TB/29.jpg" alt="" /></a> </div>
		<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/30.jpg"><img src="zdjecia/TB/30.jpg" alt="" /></a> </div>
		<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/31.jpg"><img src="zdjecia/TB/31.jpg" alt="" /></a> </div>
		<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/32.jpg"><img src="zdjecia/TB/32.jpg" alt="" /></a> </div>
		<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/33.jpg"><img src="zdjecia/TB/33.jpg" alt="" /></a> </div>
		<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/34.jpg"><img src="zdjecia/TB/34.jpg" alt="" /></a> </div>
		<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/35.jpg"><img src="zdjecia/TB/35.jpg" alt="" /></a> </div>
		<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/36.jpg"><img src="zdjecia/TB/36.jpg" alt="" /></a> </div>	
		</div>
		
		<div id="Galeria3" class="gal" style="height:800px;width : 750px;position:absolute;top:55px;  display : none;">		
		<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/37.jpg"><img src="zdjecia/TB/37.jpg" alt="" /></a> </div>
		<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/38.jpg"><img src="zdjecia/TB/38.jpg" alt="" /></a> </div>
		<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/39.jpg"><img src="zdjecia/TB/39.jpg" alt="" /></a> </div>
		<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/40.jpg"><img src="zdjecia/TB/40.jpg" alt="" /></a> </div>
		<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/41.jpg"><img src="zdjecia/TB/41.jpg" alt="" /></a> </div>
		<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/42.jpg"><img src="zdjecia/TB/42.jpg" alt="" /></a> </div>
		<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/43.jpg"><img src="zdjecia/TB/43.jpg" alt="" /></a> </div>
		<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/44.jpg"><img src="zdjecia/TB/44.jpg" alt="" /></a> </div>
		<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/45.jpg"><img src="zdjecia/TB/45.jpg" alt="" /></a> </div>
		<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/46.jpg"><img src="zdjecia/TB/46.jpg" alt="" /></a> </div>
		<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/47.jpg"><img src="zdjecia/TB/47.jpg" alt="" /></a> </div>
		<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/48.jpg"><img src="zdjecia/TB/48.jpg" alt="" /></a> </div>
		<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/49.jpg"><img src="zdjecia/TB/49.jpg" alt="" /></a> </div>
		<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/50.jpg"><img src="zdjecia/TB/50.jpg" alt="" /></a> </div>
		<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/51.jpg"><img src="zdjecia/TB/51.jpg" alt="" /></a> </div>
		<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/52.jpg"><img src="zdjecia/TB/52.jpg" alt="" /></a> </div>
		<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/18.jpg"><img src="zdjecia/TB/18.jpg" alt="" /></a> </div>	
		<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/53.jpg"><img src="zdjecia/TB/53.jpg" alt="" /></a> </div>	
		</div>
		
		<div id="Galeria4" class="gal" style="height:800px;width : 750px;position:absolute;top:55px;  display : none;">		
		<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/54.jpg"><img src="zdjecia/TB/54.jpg" alt="" /></a> </div>
		<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/55.jpg"><img src="zdjecia/TB/55.jpg" alt="" /></a> </div>
		<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/56.jpg"><img src="zdjecia/TB/56.jpg" alt="" /></a> </div>
		<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/57.jpg"><img src="zdjecia/TB/57.jpg" alt="" /></a> </div>
		<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/58.jpg"><img src="zdjecia/TB/58.jpg" alt="" /></a> </div>
		<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/59.jpg"><img src="zdjecia/TB/59.jpg" alt="" /></a> </div>
		<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/60.jpg"><img src="zdjecia/TB/60.jpg" alt="" /></a> </div>
		<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/61.jpg"><img src="zdjecia/TB/61.jpg" alt="" /></a> </div>
		<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/62.jpg"><img src="zdjecia/TB/62.jpg" alt="" /></a> </div>
		<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/63.jpg"><img src="zdjecia/TB/63.jpg" alt="" /></a> </div>
		<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/64.jpg"><img src="zdjecia/TB/64.jpg" alt="" /></a> </div>
		<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/65.jpg"><img src="zdjecia/TB/65.jpg" alt="" /></a> </div>
		<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/66.jpg"><img src="zdjecia/TB/66.jpg" alt="" /></a> </div>
		<div class="ramka"> <a class="fancybox" rel="gallery1" href="zdjecia/67.jpg"><img src="zdjecia/TB/67.jpg" alt="" /></a> </div>
		</div>
		
		
		
		<div id="Pagination" style="float:right;top:0px;>
		<ul id="galeriaPagination">
		<li><a id="g4" href="##">4</a></li>
		<li><a id="g3" href="##">3</a></li>
		<li><a id="g2" href="##">2</a></li>
		<li><a id="g1" href="##">1</a></li>
		</ul>
		</div>
	</div>
	
	<div id="Przepiórki" style="position:absolute; z-index:20; margin-left : -700px;  width:650px; "> 
		<h3>Przepiórki</h3><br>
		<div style="margin : 20px; -moz-column-count:2; /* Firefox */ -webkit-column-count:2; /* Safari and Chrome */ column-count:2;">		
	
		Na naszej fermie znajduje się również hobbystyczna przydomowa hodowla przepiórek, ukierunkowana na pozyskiwanie jaj oraz tuszek. 
		W ostatnich latach obserwowany jest w Polsce duży wzrost zainteresowania przepiórkami. Przyczyn tego zjawiska należy szukać w dążeniu ludzi do odżywiania się zdrową żywnością oraz w korzystnych cechach tego ptaka: wysokiej produkcyjności, małych potrzebach lokalowych, krótkim okresie odchowu piskląt, ładnym wyglądzie oraz żywym i wesołym usposobieniu.
		Japońska Przepiórka (Coturnix japonica) pochodzi z Azji Wschodniej. To potomek dzikich przepiórek, żyjących na łąkach i polach uprawnych.
		Proces udomowienia ptaków rozpoczął się już w XIV wieku, kiedy były one popularne jako ptaki łowne. Następnie zaczęto je hodować ze względu na ich walory dietetyczne.
		Na skutek selekcji prowadzącej do maksymalnej nieśności samice przepiórki zatraciły instynkt wysiadywania jaj, stąd uzyskanie nowych pokoleń możliwe jest tylko w inkubatorach.
		<br>
		U przepiórek występuje wyraźne zróżnicowanie pomiędzy płciami - kogutki są mniejsze (ok. 120 g) od kurek, które ważą przeciętnie 160 g. Samce mają ciemniejszą, rdzawą barwę piór głowy i kołnierza, co jest widoczne już w trzecim tygodniu życia. Przepiórki japońskie selekcjonowane były przede wszystkim w kierunku produkcji nieśnej i osiągnęły rezultaty nie spotykane u innych ptaków. Jajo przepiórki waży od 8 do 12 gramów, przeciętnie 10 g. W porównaniu z masę ciała kury, przepiórka znosi jaja ponad dwukrotnie cięższe (jajo kurze stanowi przeciętnie 3% masy ciała nioski, a jajo przepiórcze ponad 6% masy przepiórki). 
		Imponująca jest również nieśność przepiórek, w ciągu roku jedna kurka znosi przeciętnie 280 jajek.
		<br>
		Fantastyczną cechą przepiórek japońskich jest niesamowicie szybka przemiana materii. Pisklęta przepiórek wylęgają się po 17 dniach inkubacji (kurczęta po 21 dniach), rosną i opierzają się bardzo szybko. Po trzech dniach mają już lotki i na całym ciele pałki piór. Po pierwszym tygodniu życia zanika puch na grzbiecie, a po trzech tygodniach opierzenie ptaków jest wystarczające, aby na podstawie koloru upierzenia rozróżnić płeć. Dojrzałość płciową uzyskuje już w 6 tygodniu życia, co jest zupełnym ewenementem wśród drobiu. Możliwym jest uzyskanie w okresie jednego roku 4 pokoleń przepiórek.
		<br>
		Przepiórki to fascynujące ptaki, dające nam zdrowe, smaczne jaja i pyszne mięso które gości na najbardziej wykwintnych stołach całego świata.  
		<br>
		<br>
		W SPRZEDAŻY:
		<br>
		- jaja przepiórcze konsumpcyjne
		<br>
		- jaja przepiórcze lęgowe
		<br>
		- tuszki przepiórcze
		<br>
		- pisklęta i młodzież
		<br>
		- rodziny do dalszej hodowli

		</div>
	</div>
	
	<div id="Kontakt"  style="position:absolute; z-index:50; top:50px; margin-left : -700px; float:left; width:650px; height: 800px; padding:20px;">
	    
		   
			
		<a class="innerKontakt" href="##">Kontakt</a> | <a class="innerKontakt" href="##">Formularz</a>	
		<br>
		<br>
			<div id="infoKontakt">
				<table id="dKontaktowe">
				<tr><td><strong>info</strong></td><td>Ferma Strusi Afrykańskich</td><tr>
				<tr><td><b>adres</b></td><td>Rączka, 648-317 Korfantów </td><tr>
				<tr><td><b>email</b></td><td>fermastrusi@gmail.com </td><tr>
				<tr><td><b>tel</b></td><td>+48 530 086 057 </td></tr>
				</table>
				</br>
				</br>
				<table id="mapa" cellspacing="0" cellpadding="0" border="0"><tr><td><iframe src="http://www.yourmapmaker.com/preview.php?a=Rączka , Poland,Poland&w=550&h=390&n=&z=14&t=Map" height="390" width="550" scrolling="no" frameborder="0">
				</iframe></td></tr><tr><td align="left"><a style="font:8px arial;text-decoration:none;cursor:default;color:#5C5C5C;" href="http://www.yourmapmaker.com">http://www.yourmapmaker.com</a>
				</td></tr></table>
			</div>
			
			<div id="Form" style="display:none;">
				<form id="captcha-form" method="POST">
				<br><input type="text" name="imie" placeholder="   Imie" /><br>
				<br><input type="text" name="nazwisko" placeholder="   Nazwisko" /><br>				
				<br><input type="tel" name="telefon" placeholder="  Telefon" /><br>				
				<br><input type="email" name="email" placeholder="  Email" /><br>				
				<br><input type="text" name="adres" placeholder="  Adres" /><br>									
				<br><textarea rows="10" cols="60" placeholder="  Zapytanie"></textarea><br>
				
				<div id="messages"></div>
				<canvas id="captcha" width="100" height="37"></canvas>
				<a href="#" id="refresh" title="Refresh"></a>
				<input type="text" id="ccaptcha" name="captcha"/>
				
				<br><input type="submit" value="wyslij" />			
				</form>
			</div>
	</div>

</div>
</td>
</tr>
</table>


<div id="footer" style="width: 1000px ;height:80px; text-align : center;color:white;line-height:20px;"><p> Copyright ©2013 </p> </div>

</div>


<script type="text/javascript" src="js/wlasne.js" > </script>
<!-- capcha -->
	<script type="text/javascript">
	CanvasRenderingContext2D.prototype.clear = CanvasRenderingContext2D.prototype.clear || function (preserveTransform) {
		if (preserveTransform) {
		  this.save();
		  this.setTransform(1, 0, 0, 1, 0, 0);
		}

		this.clearRect(0, 0, this.canvas.width, this.canvas.height);

		if (preserveTransform) {
		  this.restore();
		}
	};
	var captchaText;
	var captchaForm = document.getElementById('captcha-form');
	var ccaptcha = document.getElementById('ccaptcha');
	var refresh = document.getElementById('refresh');
	var captcha = document.getElementById('captcha');
	var ctx = captcha.getContext('2d');
	var messages = document.getElementById('messages');
	createCaptcha();
	captchaForm.onsubmit = function() {
		if ( ccaptcha.value.toString().toLowerCase() == captchaText.toLowerCase().split(' ').join('') ) {
			messages.innerHTML = '<div class="alert success"><strong>Sukces</strong> Captcha jest poprawna!</div>';
		} else {
			messages.innerHTML = '<div class="alert danger"><strong>Błąd</strong> Captcha jest nieprawidłowa!</div>';
		}
		return false;
	};
	refresh.onclick = function() {
		createCaptcha();
		return false;
	};
	function createCaptcha() {
		captchaText = Math.random().toString(36).substr(2, 5).toUpperCase().split('').join(' ');
		ctx.clear();
		ctx.font = 'bold 18px Tahoma';
		ctx.textAlign = 'center';
		ctx.fillStyle = '#FF3300';
		ctx.fillText( captchaText, captcha.width / 2, captcha.height / 2 + 7 );
	}

	</script>



</body>




</html>