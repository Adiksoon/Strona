<?php
    $pageName = $_GET['action'] ?? null;
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="pl">

<head>
	<meta charset="utf-8"/>
	<title>Kącik Kinomaniaka</title>
	<meta name="description" content="
		Strona internetowa prezentuje moje ulubione filmy i seriale, oferując inspirujące tytuły z różnych gatunków. Zapraszam Cię do odkrywania wyjątkowych dzieł, które mnie zainspirowały i poruszyły."/>
	<meta name="keywords" content="filmy,ulubione,tytuły,gatuki filmowe, inspirować, recenzje, opinie, premiera"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<meta name="author" content="Adrian Zygarowski"/>
	<link rel="stylesheet" href="style.css" type="text/css"/>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Jersey+25&family=Lobster&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/fontello.css" type="text/css"/>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Teko:wght@300..700&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Teko:wght@300..700&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Permanent+Marker&family=Teko:wght@300..700&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Permanent+Marker&family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Teko:wght@300..700&display=swap" rel="stylesheet">
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Fjalla+One&family=Permanent+Marker&family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Teko:wght@300..700&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">

	
</head> 


<body>



	<div id="container">
		<div class="header">
			<div src="img/tloo.jpg"class="tlo" ></div>
			<div class="logo">
				<a href="?action=StronaGlowna">
				<img src="img/logo.png" class="logo" alt="Logo">
				</a>
					
			</div>
				
		<div class="name">
		<a href="?action=StronaGlowna" >Kącik Kinomana</a></div>
		
		</div>
		
		<div class="nav">
				<ol>
					<li><a href="?action=Seriale" >Seriale</a></li>
					<li><a href="?action=Filmy" >Filmy</a></li>
				</ol>
				
				
			
		</div>
		<?php if($pageName === "Filmy"): ?>
			<div class="content_filmy">
				<div class="sidebar">
					<img src="img/lewy-sidebar.png" class="sidebar sidebarL2">
					<img src="img/prawy-sidebar.png" class="sidebar sidebarR2">
				</div>
				<h1>TOP 5 - moich ulubionych filmów </h1>
			</div>
			
			<ul class="filmy">
				<li>
					<div class="harry">
						
						
						<img src="img/harry.jpg" class="harry" alt="HarryPotter"> 
				
						<a href="?action=harry" target="_blank">
						<h1>Harry Potter</h1>
						</a>
						<p>"Harry Potter" to kultowa seria filmowa, która opowiada o przygodach młodego czarodzieja w magicznej szkole Hogwart. Harry wraz ze swoimi przyjaciółmi, Hermioną i Ronem, stawia czoła niebezpieczeństwom i tajemnicom świata czarodziejów, w tym mrocznemu lordowi Voldemortowi. Filmy zdobyły uznanie za wspaniałe aktorstwo, magiczną atmosferę oraz niezwykłe wciągające przygody." </p>
						
						<h2>001</h2>
					
					</div>
				</li>	
				
				<li>
					<div class="ring">
						<img src="img/ring.jpg" class="ring" alt="WładcaPierścienia"> 
						<a href="?action=ring" target="_blank">
						<h1>Władca Pierścieni</h1>
						</a>
						<p>"Władca Pierścieni" to kultowa trylogia filmowa, która przenosi widzów do magicznego świata Śródziemia, gdzie grupa bohaterów wyrusza w niebezpieczną podróż, by zniszczyć potężny Pierścień Władzy i powstrzymać ciemne siły Saurona. Filmy zdobyły uznanie za epicką oprawę wizualną, fantastyczne kreacje postaci oraz niezwykle emocjonującą fabułę, która wciąga widza od pierwszej do ostatniej minuty.</p>
						
						<h2>002</h2>
					
					</div>
				</li>	
				
				
				<li>
					<div class="klik">
						<img src="img/klik.jpg" class="klik" alt="Klik i robisz co chcesz"> 
						<a href="?action=klik" target="_blank">
						<h1>Klik</h1>
						</a>
						<p>"Klik i robisz, co chcesz" to komedia fantastyczna, która opowiada historię zwykłego faceta, który odkrywa magiczny pilot do zdalnego sterowania życiem. Wkrótce odkrywa, że może manipulować rzeczywistością, co prowadzi do absurdalnych i nieprzewidywalnych sytuacji. Film zachwyca nie tylko wspaniałymi efektami specjalnymi, ale także inteligentnym humorem i przesłaniem o wartości życia i wyborów.</p>	
						
						<h2>003</h2>
					</div>
				</li>	
				
				<li>
					<div class="batman">
						<img src="img/batman.jpg" class="batman" alt="batman mroczny rycerz"> 
						<a href="?action=batman" target="_blank">
						<h1>Mroczny Rycerz</h1>
						</a>
						<p>"Batman: Mroczny Rycerz" to ikoniczna seria filmowa, która ukazuje mroczną i skomplikowaną postać Batmana oraz jego walkę ze zorganizowanym przestępstwem w Gotham City. Filmy zdobyły uznanie za wybitne aktorstwo, zwłaszcza za interpretację Jokerem przez Heatha Ledgera, głęboko rozbudowane postaci oraz niezwykle wciągającą fabułę, która porusza trudne moralne dylematy i analizuje psychologiczne aspekty postaci.
						</p>
						<h2>004</h2>
					</div>
				</li>	
				
				<li>
					<div class="forrest">
						<img src="img/forrest.jpg" class="forrest" alt="Forrest Gump"> 
						<a href="?action=forrest" target="_blank">
						<h1>Forrest Gump</h1>
						</a>
						<p>"Forrest Gump" to klasyczny film kinowy, który opowiada historię prostego człowieka o niezwykłych przeżyciach życiowych. Główny bohater, Forrest, przypadkowo bierze udział w wielu kluczowych wydarzeniach historycznych, jednocześnie starając się zrozumieć świat wokół siebie. Film zdobył uznanie za znakomite aktorstwo Toma Hanksa, poruszające przesłanie oraz niezwykłą podróż emocjonalną przez współczesną historię Ameryki.</p>
						<h2>005</h2>
					
					</div>
				</li>
					<div class="ankieta">

						<a href="?action=ankieta_filmy" target="_blank">
						<h1>Podaj swoje top 5 ulubionych filmów!</h1>
						</a>
					
					</div>
					
			</ul>	
		<?php elseif($pageName === "Seriale"): ?>
			<div class="content_seriale">
				<div class="sidebar">
					<img src="img/lewy-sidebar.png" class="sidebar sidebarL2">
					<img src="img/prawy-sidebar.png" class="sidebar sidebarR2">
				</div>
				<h1>TOP 5 - moich ulubionych seriali </h1>
			</div>
			
			<ul class="seriale">
				<li>
					<div class="breaking">
						
						
						<img src="img/breakingbad.jpg" class="breaking" alt="BreakingBad"> 
				
						<a href="?action=breaking" target="_blank">
						<h1>Breaking Bad</h1>
						</a>
						<p>"Breaking Bad" to kultowy serial telewizyjny, który opowiada historię nauczyciela chemii, który zaczyna produkować metamfetaminę, aby zapewnić finansową przyszłość swojej rodzinie po wykryciu u niego raka.Serial zdobył uznanie za wybitne aktorstwo, głęboko rozbudowane postaci oraz niezwykle wciągającą fabułę.</p>
						
						<h2>001</h2>
					
					</div>
				</li>	
				
				<li>
					<div class="suits">
						<img src="img/suits.jpg" class="suits" alt="Suits"> 
						<a href="?action=suits" target="_blank">
						<h1>Suits</h1>
						</a>
						<p>"Suits" to popularny serial telewizyjny, który opowiada historię niekonwencjonalnego prawnika i młodego geniusza, którzy prowadzą działalność prawniczą w Nowym Jorku. Pełen intryg i zwrotów akcji, serial zdobył dużą popularność dzięki charakterystycznym postaciom i inteligentnym dialogom.</p>
						
						<h2>002</h2>
					
					</div>
				</li>	
				
				
				<li>
					<div class="prison">
						<img src="img/prisonbreak.jpg" class="prison" alt="PrisonBreak"> 
						<a href="?action=prison" target="_blank">
						<h1>Prison Break</h1>
						</a>
						<p>"Prison Break" to popularny serial telewizyjny, który opowiada historię grupy więźniów planujących ucieczkę z więzienia, angażując w ten proces różnorodne strategie i spryt. Pełen napięcia i zwrotów akcji, serial wciąga widzów w emocjonującą podróż przez świat przestępczości i zdrady.</p>	
						
						<h2>003</h2>
					</div>
				</li>	
				
				<li>
					<div class="bojack">
						<img src="img/bojack.jpg" class="bojack" alt="bojack"> 
						<a href="?action=bojack" target="_blank">
						<h1>BoJack Horseman</h1>
						</a>
						<p>"BoJack Horseman" to serial animowany, który zgrabnie łączy czarny humor z refleksją nad ludzkimi emocjami i relacjami. Jego niekonwencjonalna forma pozwala na głębsze zrozumienie życiowych trudności bohaterów.
						</p>
						<h2>004</h2>
					</div>
				</li>	
				
				<li>
					<div class="narcos">
						<img src="img/narcos.jpg" class="narcos" alt="narcos"> 
						<a href="?action=narcos" target="_blank">
						<h1>Narcos</h1>
						</a>
						<p>"Narcos" to serial telewizyjny, który opowiada historię narkotykowego imperium Pablo Escobara i jego kartelu narkotykowego w Kolumbii. Zyskał ogromną popularność dzięki wciągającej fabule oraz wspaniałej rekonstrukcji wydarzeń z lat 80. i 90.</p>
						<h2>005</h2>
					
					</div>
				</li>
					<div class="ankieta">

						<a href="?action=ankieta" target="_blank">
						<h1>Podaj swoje top 5 ulubionych seriali!</h1>
						</a>
					
					</div>
			</ul>		
			
		<?php elseif ($pageName === "StronaGlowna"): ?>	
			<div class="content">			
		
			<div class="sidebar">
				<img src="img/lewy-sidebar.png" class="sidebar sidebarL">
				<img src="img/prawy-sidebar.png" class="sidebar sidebarR">
			</div>
			
			
			<div class="socials">
				<div class="me">
					<img src="img/ja.png" class="me">
				</div>
				
				<div class="kontakt">
				Znajdziesz mnie:
				</div>
				
				<div class="socialdivs">
					<a href="https://www.facebook.com" target="_blank" >
						<div class="fb">
							<i class="icon-facebook-squared"></i>
						</div>
					</a>
					
					<a href="https://www.instagram.com" target="_blank">
						<div class="ig">
							<i class="icon-instagram"></i>
						</div>
					</a>
					
					<a href="https://twitter.com/?lang=pl" target="_blank">
						<div class="tw">
							<i class="icon-twitter-squared"></i>
						</div>
					</a>	
					<a href="https://pl.linkedin.com" target="_blank">
						<div class="linkedin">
							<i class="icon-linkedin-squared"></i>
						</div>
					</a>	
					
				</div>
			</div>
				
			<div class="text">
			
				<h1> O mnie!</h1>
				<p>Cześć! Mam na imię Adrian! Zapraszam Cię na moją stroną poświęconą w głównej mierzę filmom i serialom.</p>
				<p>Czy kiedykolwiek czuliście tę ekscytację, kiedy zasiadaliście wygodnie przed ekranem, gotowi zanurzyć się w świacie wykreowanym przez filmową sztukę? Czy jesteście kinomaniakami pragnącymi odkrywać nowe tytuły, głębsze znaczenia i inspirujące historie?</p>
				<p>Stworzyłem tę stronę właśnie dla takich osób jak Wy. Żebyście nie tylko mokli się skonfrontować z moimi subiektywnymi opiniami i recenzjami na temat najlepszych dzieł na jakie udało mi się trafić ale jednocześnie znaleźli coś dla siebie. Całość wzbogacona jest w postaci dwóch osobnych rankinków podzielonych na filmy i seriale.</p>
				<p>Parę słów o mnie...</p>
				<p>Na co dzień jestem studentem Politechniki Gdańskiej. Większość swojego czasu spędzam na nauce. Kocham piłkę nożną i Roberta Lewandowskiego a aktywność szkolną często przeplatam sportami szczególnie w zime nartami. Moim marzeniem jest zwiedzić cały świat i zostać najlepszy automatykiem na tej planecie!</p>
				<p>Dziękuję ci za odwiedzenie mojej strony i mam nadzieję, że znajdziesz tutaj filmy czy seriale które umilą Ci niejeden wieczór!</p>
			</div>
			
			
		<div class="oscar">
			<p> Odliczanie do następnej gali oscarów:</p>
			<img src="img/oscar.png" class="oscarIMG" alt="Oscar statue">

		</div>
		<div class="odliczanie">
			
	
 <?php

			$time1 = mktime(0, 0, 0, 3, 2, 2025);
			$time2 = time();
			$time = $time1 - $time2;

			if ($time < 0) {
				echo 'Już się odbyła';
			} 	else {
            $days = ceil($time / 86400);
				echo  $days  . "dni";
			}

 ?>
	
			
		</div>
			
		<div class="matma">
		
		<a href="?action=matma" ><img src="img/reklama.png" class="matma"></a>
		
		</div>
		</div>
			
			
	
		<?php elseif ($pageName === "breaking"): ?>		
			<div class="content_breaking">
				
			
				<img src="img/breakingbad-tło .jpg" class="breakingtło">
				<img src="img/breakingbad.jpg" class="breakinglogo">
			
				<h1>Breaking Bad</h1><h2>2008 - 2013</h2>
				
				<div class="recenzje">
					<a href="https://www.filmweb.pl/serial/Breaking+Bad-2008-430668" target="_blank">
						<img src="img/filmweb.png"  class="filmweb">
					</a>

					<a href="https://www.imdb.com/title/tt0903747/ target="_blank">
					<img src="img/inbd.png"  class="imdb">
					</a>
				</div>
				
				<div class="gwiazdki">
					
					<ul>
					
						<li>
							<h1>Fabuła i scenariusz</h1>
							<img src="img/5gwiazdek.png" alt="Ocena 5 gwiazdek">
						</li>
						
						<li>
							<h1>Obsada i gra aktorska</h1>
							<img src="img/5gwiazdek.png" alt="Ocena 5 gwiazdek">
						</li>
					
						<li>
							<h1>Scenografia i reżyseria</h1>
							<img src="img/5gwiazdek.png" alt="Ocena 5 gwiazdek">
						</li>
					</ul>
					
				</div>
				
				
				<div class="tekst">
					<p>"Breaking Bad" to bezsprzecznie arcydzieło telewizyjne, które wyróżnia się wśród wielu produkcji swoją doskonałą realizacją i niezrównaną głębią tematyczną. W roli krytyka, uznaję ten serial za najlepszy z prostego powodu: mistrzowskiego połączenia wspaniałej fabuły, doskonałych aktorów oraz przemyślanych dialogów, które składają się na niezapomniany obraz telewizyjnego dzieła sztuki."

					<p><b>"Akapit 1</b>: <i>Fabuła i scenariusz (5/5 gwiazdek)</i>:
					W "Breaking Bad" fabuła i scenariusz są absolutnie porywające. Każdy wątek jest starannie skonstruowany, a narracja prowadzi widza przez gąszcz emocji i 		nieoczekiwanych zwrotów akcji. Fabuła jest niezwykle oryginalna i pełna napięcia, dostarczając widzom niezapomnianych przeżyć na każdym kroku."</p>
					</br>
					<p><b>"Akapit 2</b>: <i>Obsada i gra aktorska (5/5 gwiazdek)</i>:
					Bryan Cranston i Aaron Paul dostarczają niezapomnianych występów aktorskich, które są kluczowym elementem sukcesu "Breaking Bad". Ich autentyczność i zaangażowanie w role sprawiają, że postacie stają się żywe i wiarygodne. Wspierani przez resztę obsady, tworzą zespół aktorski, który trzyma widza w napięciu od pierwszego do ostatniego odcinka." </p>
					</br>
					<p><b>"Akapit 3</b>:<i> Scenografia i reżyseria (5/5 gwiazdek)</i>:
					Scenografia i reżyseria "Breaking Bad" są na najwyższym poziomie. Każdy ujęcie jest starannie zaplanowane, a styl reżyserski dodaje głębi i intensywności historii. Świetnie dobrana muzyka i doskonałe wykonanie techniczne podkreślają atmosferę serialu, czyniąc go niezapomnianym doświadczeniem dla widza."</p>
					<p> To właśnie te wszystkie elementy sprawiają, że "Breaking Bad" nie tylko zasługuje na tytuł najlepszego serialu w historii, ale także pozostaje moim ulubionym serialem, który zawsze będę polecał z pełnym przekonaniem."</p>
				</div>
			</div>
				

		
		
			
		<?php elseif ($pageName === "suits"): ?>		
			<div class="content_suits">
				
			
				<img src="img/suits-tlo.jpg" class="suitstło">
				<img src="img/Suits.jpg" class="suitslogo">
			
				<h1>Suits</h1><h2>2011 - 2019</h2>
				
				<div class="recenzje">
					<a href="https://www.filmweb.pl/serial/Skazany+na+%C5%9Bmier%C4%87-2005-236096" target="_blank">
						<img src="img/filmweb.png"  class="filmweb">
					</a>

					<a href="https://www.imdb.com/title/tt0455275/?ref_=nv_sr_srsg_0_tt_8_nm_0_q_prison" target="_blank">
					<img src="img/inbd.png"  class="imdb">
					</a>
				</div>
				
				<div class="gwiazdki">
					
					<ul>
					
						<li>
							<h1>Fabuła i scenariusz</h1>
							<img src="img/5gwiazdek.png" alt="Ocena 5 gwiazdek">
						</li>
						
						<li>
							<h1>Obsada i gra aktorska</h1>
							<img src="img/5gwiazdek.png" alt="Ocena 5 gwiazdek">
						</li>
					
						<li>
							<h1>Scenografia i reżyseria</h1>
							<img src="img/4,5gwiazdki.png" alt="Ocena 4.5 gwiazdek">
						</li>
					</ul>
					
				</div>
				
				
				<div class="tekst">
					<p>"Suits" to bez wątpienia arcydzieło telewizyjne, które wyróżnia się spośród wielu produkcji swoją doskonałą realizacją i głębią tematyczną. W mojej ocenie jako krytyka, uznaję ten serial za jedno z najwybitniejszych z prostego powodu: mistrzowskiego połączenia wspaniałej fabuły, doskonałych aktorów oraz przemyślanych dialogów, które tworzą niezapomniany obraz telewizyjnego dzieła sztuki.</p>
					<p>
					<b>Akapit 1</b>: <i>Fabuła i scenariusz (5/5 gwiazdek)</i>:
					W "Suits" fabuła i scenariusz są absolutnie porywające. Każdy wątek jest starannie skonstruowany, a narracja prowadzi widza przez gąszcz emocji i nieoczekiwanych zwrotów akcji. Fabuła jest niezwykle oryginalna i angażująca, dostarczając widzom niezapomnianych przeżyć na każdym kroku.</p>
			
					<p><b>Akapit 2</b>: <i>Obsada i gra aktorska (5/5 gwiazdek)</i>:
					W "Suits" Gabriel Macht i Patrick J. Adams dostarczają niezapomnianych występów aktorskich, które są kluczowym elementem sukcesu tego serialu. Ich autentyczność i zaangażowanie w role sprawiają, że postacie stają się żywe i wiarygodne. Wspierani przez resztę obsady, tworzą zespół aktorski, który trzyma widza w napięciu od pierwszego do ostatniego odcinka. </p>
					</br>
					<b><p>Akapit 3 </b>: <i>Scenografia i reżyseria (4,5/5 gwiazdek)</i>:
					Scenografia i reżyseria "Suits" są na bardzo wysokim poziomie. Choć nieco ustępują one innym elementom serialu, to wciąż są kluczowymi czynnikami tworzącymi niezapomnianą atmosferę. Każdy ujęcie jest starannie zaplanowane, a styl reżyserski dodaje głębi i intensywności historii.</p>
					<p> To właśnie te wszystkie elementy sprawiają, że "Suits" nie tylko zasługuje na miano jednego z najlepszych seriali w historii, ale także pozostaje moim drugim ulubionym serialem, który zawsze będę polecał z pełnym przekonaniem.</p>
				</div>
			</div>	
				
				
				
				
		<?php elseif ($pageName === "prison"): ?>	
		
			<div class="content_prison">
				
			
				<img src="img/prisonbreaktlo.jpg" class="prisontło">
				<img src="img/PrisonBreak.jpg" class="prisonlogo">
			
				<h1>Prison Break</h1><h2>2005 - 2009</h2>
				
				<div class="recenzje">
					<a href="https://www.filmweb.pl/serial/W+garniturach-2011-585726" target="_blank">
						<img src="img/filmweb.png"  class="filmweb">
					</a>

					<a href="https://www.imdb.com/title/tt1632701/?ref_=nv_sr_srsg_0_tt_8_nm_0_q_suits" target="_blank">
					<img src="img/inbd.png"  class="imdb">
					</a>
				</div>
				
				<div class="gwiazdki">
					
					<ul>
					
						<li>
							<h1>Fabuła i scenariusz</h1>
							<img src="img/4,5gwiazdki.png" alt="Ocena 4.5 gwiazdek">
						</li>
						
						<li>
							<h1>Obsada i gra aktorska</h1>
							<img src="img/5gwiazdek.png" alt="Ocena 5 gwiazdek">
						</li>
					
						<li>
							<h1>Scenografia i reżyseria</h1>
							<img src="img/4,5gwiazdki.png" alt="Ocena 4.5 gwiazdek">
						</li>
					</ul>
					
				</div>
				
				
				<div class="tekst">
					<p>"Prison Break" to bezsprzecznie arcydzieło telewizyjne, które wyróżnia się wśród wielu produkcji swoją doskonałą realizacją i niezrównaną głębią tematyczną. W roli krytyka, uznaję ten serial za jeden z najlepszych z prostego powodu: mistrzowskiego połączenia wspaniałej fabuły, doskonałych aktorów oraz przemyślanych dialogów, które składają się na niezapomniany obraz telewizyjnego dzieła sztuki.</p>
					<p>
					<b>Akapit 1:</b> <i>Fabuła i scenariusz (4,5/5 gwiazdek) </i>:
					W "Prison Break" fabuła i scenariusz są bardzo solidne. Choć nieco traci na intensywności w ostatnich sezonach, to wciąż dostarcza niezapomnianych emocji i zwrotów akcji. Pomysł na fabułę jest oryginalny, a sposób jej prowadzenia angażuje widza od pierwszego do ostatniego odcinka.</p>
					</br>
					<p><b>Akapit 2:</b> <i>Obsada i gra aktorska (5/5 gwiazdek)</i>:
					Dominic Purcell i Wentworth Miller dostarczają niezapomnianych występów aktorskich, które są kluczowym elementem sukcesu "Prison Break". Ich autentyczność i zaangażowanie w role sprawiają, że postacie stają się żywe i wiarygodne. Wspierani przez resztę obsady, tworzą zespół aktorski, który trzyma widza w napięciu od początku do końca. </p>
					</br>
					<p><b>Akapit 3:</b> <i> Scenografia i reżyseria (4,5/5 gwiazdek) </i>:
					Scenografia i reżyseria "Prison Break" są na bardzo wysokim poziomie. Każdy ujęcie jest starannie zaplanowane, a styl reżyserski dodaje głębi i intensywności historii. Niemniej jednak, w ostatnich sezonach można zauważyć pewne spadki jakości w tym względzie, co nieco osłabia ostateczne wrażenia z oglądania.</p>
					<p> To właśnie te wszystkie elementy sprawiają, że "Prison Break" nie tylko zasługuje na miano jednego z najlepszych seriali w historii, ale także pozostaje moim trzecim ulubionym serialem, który zawsze będę polecał z pełnym przekonaniem.</p>
				</div>
			</div>	
		
		<?php elseif ($pageName === "bojack"): ?>	
		
			<div class="content_bojack">
				
			
				<img src="img/bojack-tlo.jpg" class="suitstło">
				<img src="img/bojack.jpg" class="suitslogo">
			
				<h1>BoJack Horseman</h1><h2>2014 - 2020</h2>
				
				<div class="recenzje">
					<a href="https://www.filmweb.pl/serial/BoJack+Horseman-2014-718443" target="_blank">
						<img src="img/filmweb.png"  class="filmweb">
					</a>

					<a href="https://www.imdb.com/title/tt3398228/?ref_=nv_sr_srsg_0_tt_5_nm_3_q_bojack" target="_blank">
					<img src="img/inbd.png"  class="imdb">
					</a>
				</div>
				
				<div class="gwiazdki">
					
					<ul>
					
						<li>
							<h1>Fabuła i scenariusz</h1>
							<img src="img/5gwiazdek.png" alt="Ocena 5 gwiazdek">
						</li>
						
						<li>
							<h1>Obsada i gra aktorska</h1>
							<img src="img/3gwiazdki.png" alt="Ocena 5 gwiazdek">
						</li>
					
						<li>
							<h1>Scenografia i reżyseria</h1>
							<img src="img/5gwiazdek.png" alt="Ocena 4 gwiazdek">
						</li>
					</ul>
					
				</div>
				
				
				<div class="tekst">
					<p>"BoJack Horseman" to bezsprzecznie arcydzieło telewizyjne, które wyróżnia się wśród wielu produkcji swoją doskonałą realizacją i niezrównaną głębią tematyczną. W roli krytyka, uznaję ten serial za jeden z najlepszych z prostego powodu: mistrzowskiego połączenia wspaniałej fabuły, doskonałych aktorów oraz przemyślanych dialogów, które składają się na niezapomniany obraz telewizyjnego dzieła sztuki.</p>
					<p><b>Akapit 1:</b> <i>Fabuła i scenariusz (5/5 gwiazdek)</i>: W "BoJack Horseman" fabuła i scenariusz osiągają najwyższe możliwe standardy. Każdy epizod dostarcza głębokich refleksji i emocjonalnych zwrotów akcji, tworząc niezwykle satysfakcjonujące doświadczenie dla widza.</p>
					</br>
					<p><b>Akapit 2:</b> <i>Obsada i gra aktorska (3/5 gwiazdek)</i>: Głosy Willa Arnetta, Amy Sedaris i Aaron Paula są solidne, jednakże niekiedy brakuje im głębi i dynamiki. Pomimo tego, że nie osiągają poziomu niektórych innych elementów serialu, wciąż przyczyniają się do jego ogólnej jakości.</p>
					</br>
					<p><b>Akapit 3:</b> <i>Scenografia i reżyseria (4/5 gwiazdek)</i>: Scenografia i reżyseria "BoJack Horseman" są bardzo solidne, choć czasem można dostrzec pewne niedoskonałości. Niemniej jednak, tworzą one charakterystyczny styl serialu i pomagają w kreowaniu jego unikalnej atmosfery.</p>
					<p>To właśnie te wszystkie elementy sprawiają, że "BoJack Horseman" nie tylko zasługuje na miano jednego z najlepszych seriali w historii, ale także pozostaje moim czwartym ulubionym serialem, który zawsze będę polecał z pełnym przekonaniem.</p>
				</div>
			</div>	
		
		<?php elseif ($pageName === "narcos"): ?>	
		
		
		<div class="content_narcos">
				
			
				<img src="img/narcos-tlo.jpg" class="suitstło">
				<img src="img/narcos.jpg" class="suitslogo">
			
				<h1>Narcos</h1><h2>2015 - 2017</h2>
				
				<div class="recenzje">
					<a href="https://www.filmweb.pl/serial/Narcos-2015-680486" target="_blank">
						<img src="img/filmweb.png"  class="filmweb">
					</a>

					<a href="https://www.imdb.com/title/tt2707408/?ref_=nv_sr_srsg_0_tt_8_nm_0_q_narcos" target="_blank">
					<img src="img/inbd.png"  class="imdb">
					</a>
				</div>
				
				<div class="gwiazdki">
					
					<ul>
					
						<li>
							<h1>Fabuła i scenariusz</h1>
							<img src="img/5gwiazdek.png" alt="Ocena 5 gwiazdek">
						</li>
						
						<li>
							<h1>Obsada i gra aktorska</h1>
							<img src="img/4gwiazdki.png" alt="Ocena 4 gwiazdki">
						</li>
					
						<li>
							<h1>Scenografia i reżyseria</h1>
							<img src="img/4gwiazdki.png" alt="Ocena 4 gwiazdek">
						</li>
					</ul>
					
				</div>
				
				
				<div class="tekst">
					<p>"Narcos" to bezsprzecznie arcydzieło telewizyjne, które wyróżnia się wśród wielu produkcji swoją doskonałą realizacją i niezrównaną głębią tematyczną. W roli krytyka, uznaję ten serial za jeden z najlepszych z prostego powodu: mistrzowskiego połączenia wspaniałej fabuły, doskonałych aktorów oraz przemyślanych dialogów, które składają się na niezapomniany obraz telewizyjnego dzieła sztuki.</p>

					<p><b>Akapit 1:</b> <i>Fabuła i scenariusz (5/5 gwiazdek)</i>:
					W "Narcos" fabuła i scenariusz osiągają mistrzowski poziom. Każdy epizod prowadzi widza przez burzliwą historię narkotykowego imperium, dostarczając niezapomnianych emocji i nieoczekiwanych zwrotów akcji. Pomysł na fabułę jest niezwykle oryginalny, a sposób jej przedstawienia angażuje od pierwszej do ostatniej sceny.</p>
					</br>
					<p><b>Akapit 2:</b> <i>Obsada i gra aktorska (4/5 gwiazdek)</i>:
					W "Narcos" aktorzy dostarczają solidnych występów, które są kluczowym elementem tej produkcji. Ich zaangażowanie w role sprawia, że postacie stają się wiarygodne i interesujące. Pomimo tego, że nieco traci na intensywności w porównaniu z innymi elementami serialu, to nadal stanowi istotną część jego sukcesu.</p>
					</br>
					<p><b>Akapit 3:</b> <i>Scenografia i reżyseria (4/5 gwiazdek)</i>:
					Scenografia i reżyseria "Narcos" prezentują bardzo wysoki poziom wykonania. Każde ujęcie jest starannie zaplanowane, a styl reżyserski dodaje głębi i intensywności historii. Niemniej jednak, pewne spadki jakości w ostatnich sezonach mogą nieco osłabić ostateczne wrażenia z oglądania.</p>

					<p>To właśnie te wszystkie elementy sprawiają, że "Narcos" nie tylko zasługuje na miano jednego z najlepszych seriali w historii, ale także pozostaje moim czwartym ulubionym serialem, który zawsze będę polecał z pełnym przekonaniem.</p>
				</div>
			</div>	
		
		
		<?php elseif ($pageName === "harry"): ?>		
			<div class="content_harry">
				
			
				<img src="img/harry-tło.jpg" class="breakingtło">
				<img src="img/harry.jpg" class="breakinglogo">
			
				<h1>Harry Potter</h1><h2>2001 - 2011</h2>
				
				<div class="recenzje">
					<a href="https://www.filmweb.pl/world/Harry+Potter-7" target="_blank">
						<img src="img/filmweb.png"  class="filmweb">
					</a>

					<a href="https://www.imdb.com/title/tt0241527/?ref_=nv_sr_srsg_0_tt_4_nm_4_q_harry" target="_blank">
					<img src="img/inbd.png"  class="imdb">
					</a>
				</div>
				
				<div class="gwiazdki">
					
					<ul>
					
						<li>
							<h1>Fabuła i scenariusz</h1>
							<img src="img/5gwiazdek.png" alt="Ocena 5 gwiazdek">
						</li>
						
						<li>
							<h1>Obsada i gra aktorska</h1>
							<img src="img/5gwiazdek.png" alt="Ocena 5 gwiazdek">
						</li>
					
						<li>
							<h1>Scenografia i reżyseria</h1>
							<img src="img/5gwiazdek.png" alt="Ocena 5 gwiazdek">
						</li>
					</ul>
					
				</div>
				
				
				<div class="tekst">
				<p>"Harry Potter" to bezsprzecznie arcydzieło filmowe, które wyróżnia się wśród wielu produkcji swoją doskonałą realizacją i niezrównaną głębią tematyczną. W mojej osobistej ocenie, jest to nie tylko jedna z najlepszych serii filmowych, ale także moje ulubione filmy, które zawsze będę polecał z pełnym przekonaniem.</p>
				<p><b>Akapit 1:</b> <i>Fabuła i scenariusz (5/5 gwiazdek)</i>: Filmy "Harry Potter" osiągają doskonałość pod względem fabuły i scenariusza. Każdy z siedmiu filmów oferuje wspaniałe połączenie magii, przygody i emocji. Narracja prowadzi widza przez świat czarodziejów, dostarczając niezapomnianych doświadczeń na każdym etapie podróży Harry'ego Pottera.</p>
				</br>
				<p><b>Akapit 2:</b> <i>Obsada i gra aktorska (5/5 gwiazdek)</i>: Daniel Radcliffe, Emma Watson i Rupert Grint dostarczają niezapomnianych występów aktorskich, które są kluczowym elementem sukcesu filmów "Harry Potter". Ich wiarygodność i zaangażowanie w kreowanie postaci sprawiają, że świat czarodziejów staje się bardziej realistyczny i przekonujący dla widzów. Wspierani przez znakomitą obsadę, tworzą zespół aktorski, który zachwyca od pierwszego do ostatniego filmu.</p>
				</br>
				<p><b>Akapit 3:</b> <i>Scenografia i reżyseria (5/5 gwiazdek)</i>: Scenografia i reżyseria filmów "Harry Potter" są na najwyższym poziomie. Każdy detal, od magicznych miejsc po efekty specjalne, został starannie zaplanowany i wykonany. Styl reżyserski dodaje głębi i intensywności całej historii, tworząc niezapomniane wrażenia dla widzów. Nie ma wątpliwości, że zarówno scenografia, jak i reżyseria, przyczyniły się do stworzenia magicznego świata Harry'ego Pottera, który porusza serca milionów fanów na całym świecie.</p>
				</div>
			</div>
		
		<?php elseif ($pageName === "klik"): ?>		
			<div class="content_klik">
				
			
				<img src="img/klik-tło.jpg" class="breakingtło">
				<img src="img/klik.jpg" class="breakinglogo">
			
				<h1>Klik</h1><h2>2006</h2>
				
				<div class="recenzje">
					<a href="https://www.filmweb.pl/film/Klik%3A+I+robisz%2C+co+chcesz-2006-146417" target="_blank">
						<img src="img/filmweb.png"  class="filmweb">
					</a>

					<a href="https://www.imdb.com/title/tt0389860/?ref_=nv_sr_srsg_0_tt_8_nm_0_q_klik" target="_blank">
					<img src="img/inbd.png"  class="imdb">
					</a>
				</div>
				
				<div class="gwiazdki">
					
					<ul>
					
						<li>
							<h1>Fabuła i scenariusz</h1>
							<img src="img/5gwiazdek.png" alt="Ocena 5 gwiazdek">
						</li>
						
						<li>
							<h1>Obsada i gra aktorska</h1>
							<img src="img/5gwiazdek.png" alt="Ocena 5 gwiazdek">
						</li>
					
						<li>
							<h1>Scenografia i reżyseria</h1>
							<img src="img/4gwiazdki.png" alt="Ocena 4 gwiazdek">
						</li>
					</ul>
					
				</div>
				
				
				<div class="tekst">
					
				<p>"Klik i robisz, co chcesz" to bezsprzecznie arcydzieło filmowe, które wyróżnia się wśród wielu produkcji swoją doskonałą realizacją i niezrównaną głębią tematyczną. W roli krytyka, uznaję ten film za jedno z najlepszych z prostego powodu: mistrzowskiego połączenia wspaniałej fabuły, doskonałych aktorów oraz przemyślanych dialogów, które składają się na niezapomniany obraz filmowego dzieła sztuki.</p>

				<p><b>Akapit 1:</b> <i>Fabuła i scenariusz (5/5 gwiazdek)</i>: "Klik i robisz, co chcesz" osiąga doskonałość w kategorii fabuły i scenariusza. Każdy wątek jest starannie skonstruowany, a narracja prowadzi widza przez gąszcz emocji i nieoczekiwanych zwrotów akcji. Pomysł na fabułę jest oryginalny i angażujący, dostarczając widzom niezapomnianych przeżyć na każdym kroku.</p>
		
				<p><b>Akapit 2:</b> <i>Obsada i gra aktorska (5/5 gwiazdek)</i>: W "Klik i robisz, co chcesz" aktorzy dostarczają niezapomnianych występów, które są kluczowym elementem sukcesu tego filmu. Ich autentyczność i zaangażowanie w role sprawiają, że postacie stają się żywe i wiarygodne. Wspierani przez resztę obsady, tworzą zespół aktorski, który trzyma widza w napięciu od początku do końca.</p>
				</br>
				<p><b>Akapit 3:</b> <i>Scenografia i reżyseria (4/5 gwiazdek)</i>: Scenografia i reżyseria "Klik i robisz, co chcesz" są na bardzo wysokim poziomie, choć nieco ustępują innym elementom filmu. Każdy ujęcie jest starannie zaplanowane, a styl reżyserski dodaje głębi i intensywności historii. Niemniej jednak, w niektórych momentach można zauważyć pewne niedociągnięcia, co nieco osłabia ostateczne wrażenia z oglądania.</p>

				<p>To właśnie te wszystkie elementy sprawiają, że "Klik i robisz, co chcesz" nie tylko zasługuje na miano jednego z najlepszych filmów w historii, ale także pozostaje moim ulubionym filmem, który zawsze będę polecał z pełnym przekonaniem.</p>
				</div>
			</div>
			<?php elseif ($pageName === "ring"): ?>		
			<div class="content_ring">
				
			
				<img src="img/ring-tło.jpg" class="breakingtło">
				<img src="img/ring.jpg" class="breakinglogo">
			
				<h1>Władca Pierścieni</h1><h2>2001 - 2003</h2>
				
				<div class="recenzje">
					<a href="https://www.filmweb.pl/world/W%C5%82adca+Pier%C5%9Bcieni-4" target="_blank">
						<img src="img/filmweb.png"  class="filmweb">
					</a>

					<a href="https://www.imdb.com/title/tt0120737/?ref_=nv_sr_srsg_3_tt_8_nm_0_q_w%25C5%2582adca%2520" target="_blank">
					<img src="img/inbd.png"  class="imdb">
					</a>
				</div>
				
				<div class="gwiazdki">
					
					<ul>
					
						<li>
							<h1>Fabuła i scenariusz</h1>
							<img src="img/5gwiazdek.png" alt="Ocena 5 gwiazdek">
						</li>
						
						<li>
							<h1>Obsada i gra aktorska</h1>
							<img src="img/5gwiazdek.png" alt="Ocena 5 gwiazdek">
						</li>
					
						<li>
							<h1>Scenografia i reżyseria</h1>
							<img src="img/5gwiazdek.png" alt="Ocena 5 gwiazdek">
						</li>
					</ul>
					
				</div>
				
				
				<div class="tekst">
					<p>"Władca Pierścieni" to bezsprzecznie arcydzieło filmowe, które wyróżnia się wśród wielu produkcji swoją doskonałą realizacją i niezrównaną głębią tematyczną. W roli krytyka, uznaję ten film za mój ulubiony z prostego powodu: mistrzowskiego połączenia wspaniałej fabuły, doskonałych aktorów oraz przemyślanych dialogów, które składają się na niezapomniany obraz kinematograficznego dzieła sztuki.</p>

					<p><b>Akapit 1:</b> <i>Fabuła i scenariusz (5/5 gwiazdek) </i>: W "Władca Pierścieni" fabuła i scenariusz są niezrównane. Każdy wątek jest starannie skonstruowany, a narracja prowadzi widza przez niezwykłe podróże i nieoczekiwane zwroty akcji. Fabuła jest pełna głębi i emocji, dostarczając widzom niezapomnianych przeżyć na każdym kroku.</p>
					</br>
					<p><b>Akapit 2:</b> <i>Obsada i gra aktorska (5/5 gwiazdek)</i>: Elijah Wood, Ian McKellen i reszta obsady dostarczają niezapomnianych występów aktorskich, które są kluczowym elementem sukcesu "Władcy Pierścieni". Ich autentyczność i zaangażowanie w role sprawiają, że postacie stają się żywe i wiarygodne. Wspierani przez resztę obsady, tworzą zespół aktorski, który trzyma widza w napięciu od początku do końca.</p>
					</br>
					<p><b>Akapit 3:</b> <i>Scenografia i reżyseria (5/5 gwiazdek) </i>: Scenografia i reżyseria "Władcy Pierścieni" są na najwyższym poziomie. Każdy kadr jest starannie zaplanowany, a styl reżyserski dodaje głębi i intensywności historii. Doskonale dopracowane sceny i wspaniałe wykonanie techniczne podkreślają atmosferę filmu, czyniąc go niezapomnianym doświadczeniem dla widza.</p>
					<p> To właśnie te wszystkie elementy sprawiają, że "Władca Pierścieni" nie tylko zasługuje na miano jednego z najlepszych filmów w historii, ale także pozostaje moim ulubionym filmem, który zawsze będę polecał z pełnym przekonaniem.</p>
				</div>
			</div>
			<?php elseif ($pageName === "batman"): ?>		
			<div class="content_batman">
				
			
				<img src="img/batman-tło .jpg" class="breakingtło">
				<img src="img/batman.jpg" class="breakinglogo">
			
				<h1>Mroczny rycerz</h1><h2>2008</h2>
				
				<div class="recenzje">
					<a href="https://www.filmweb.pl/film/Mroczny+Rycerz-2008-236351" target="_blank">
						<img src="img/filmweb.png"  class="filmweb">
					</a>

					<a href="https://www.imdb.com/title/tt0468569/?ref_=nv_sr_srsg_0_tt_6_nm_1_q_Mroczy%2520ry" target="_blank">
					<img src="img/inbd.png"  class="imdb">
					</a>
				</div>
				
				<div class="gwiazdki">
					
					<ul>
					
						<li>
							<h1>Fabuła i scenariusz</h1>
							<img src="img/5gwiazdek.png" alt="Ocena 5 gwiazdek">
						</li>
						
						<li>
							<h1>Obsada i gra aktorska</h1>
							<img src="img/5gwiazdek.png" alt="Ocena 5 gwiazdek">
						</li>
					
						<li>
							<h1>Scenografia i reżyseria</h1>
							<img src="img/5gwiazdek.png" alt="Ocena 5 gwiazdek">
						</li>
					</ul>
					
				</div>
				
				
				<div class="tekst">
				<p>"Batman: Mroczny Rycerz" to bezsprzecznie arcydzieło filmowe, które wyróżnia się wśród wielu produkcji swoją doskonałą realizacją i niezrównaną głębią tematyczną. W moim osobistym rankingu, ten film zajmuje szczególne miejsce jako mój ulubiony, i to z pełnym przekonaniem.</p>

				<p><b>Akapit 1:</b> <i>Fabuła i scenariusz (5/5 gwiazdek) </i>:
				W "Batmanie: Mroczny Rycerz" fabuła i scenariusz są absolutnie porywające. Każdy wątek jest starannie skonstruowany, a narracja prowadzi widza przez gąszcz emocji i nieoczekiwanych zwrotów akcji. Fabuła jest niezwykle oryginalna i niesamowicie angażująca, dostarczając widzom niezapomnianych przeżyć na każdym kroku.</p>
				</br>
				<p><b>Akapit 2:</b> <i>Obsada i gra aktorska (5/5 gwiazdek)</i>:
				Christian Bale jako Batman oraz Heath Ledger jako Joker dostarczają niezapomnianych występów aktorskich, które są kluczowym elementem sukcesu "Batman: Mroczny Rycerz". Ich autentyczność i zaangażowanie w role sprawiają, że postacie stają się żywe i wiarygodne. Wspierani przez resztę obsady, tworzą zespół aktorski, który trzyma widza w napięciu od początku do końca.</p>
				</br>
				<p><b>Akapit 3:</b> <i>Scenografia i reżyseria (4/5 gwiazdek)</i>:
				Scenografia i reżyseria "Batmana: Mrocznego Rycerza" są na bardzo wysokim poziomie, jednakże nieco ustępują innym elementom filmu. Każde ujęcie jest starannie zaplanowane, a styl reżyserski dodaje głębi i intensywności historii. Niemniej jednak, pomimo drobnych mankamentów, film ten wciąż pozostaje niezapomnianym doświadczeniem dla widza.</p>

				To właśnie te wszystkie elementy sprawiają, że "Batman: Mroczny Rycerz" nie tylko zasługuje na miano jednego z najlepszych filmów w historii kina, ale także pozostaje moim ulubionym filmem, który zawsze będę polecał z pełnym przekonaniem.
				</div>
			</div>
			<?php elseif ($pageName === "forrest"): ?>		
			<div class="content_forrest">
				
			
				<img src="img/forrest-tło .jpg" class="breakingtło">
				<img src="img/forrest.jpg" class="breakinglogo">
			
				<h1>Forrest Gump</h1><h2>1994</h2>
				
				<div class="recenzje">
					<a href="https://www.filmweb.pl/film/Forrest+Gump-1994-998" target="_blank">
						<img src="img/filmweb.png"  class="filmweb">
					</a>

					<a href="https://www.imdb.com/title/tt0109830/?ref_=nv_sr_srsg_3_tt_3_nm_5_q_for" target="_blank">
					<img src="img/inbd.png"  class="imdb">
					</a>
				</div>
				
				<div class="gwiazdki">
					
					<ul>
					
						<li>
							<h1>Fabuła i scenariusz</h1>
							<img src="img/5gwiazdek.png" alt="Ocena 5 gwiazdek">
						</li>
						
						<li>
							<h1>Obsada i gra aktorska</h1>
							<img src="img/5gwiazdek.png" alt="Ocena 5 gwiazdek">
						</li>
					
						<li>
							<h1>Scenografia i reżyseria</h1>
							<img src="img/5gwiazdek.png" alt="Ocena 5 gwiazdek">
						</li>
					</ul>
					
				</div>
				
				
				<div class="tekst">
					<p>"Forrest Gump" to bezsprzecznie arcydzieło filmowe, które wyróżnia się wśród wielu produkcji swoją doskonałą realizacją i niezrównaną głębią tematyczną. W roli krytyka, uznaję ten film za jedno z najlepszych z prostego powodu: mistrzowskiego połączenia wspaniałej fabuły, doskonałych aktorów oraz przemyślanych dialogów, które składają się na niezapomniany obraz kinematograficznego dzieła sztuki.</p>

					<p><b>Akapit 1:</b> <i>Fabuła i scenariusz (5/5 gwiazdek) </i>: "Forrest Gump" zachwyca nie tylko swoją niesamowitą historią, ale także mistrzowsko skonstruowanym scenariuszem. Każdy moment filmu jest przemyślany i poruszający, prowadząc widza przez burzliwą historię życia tytułowego bohatera. Fabuła jest niezwykle oryginalna i trzyma widza w napięciu od pierwszych chwil do finału.</p>
					</br>
					<p><b>Akapit 2:</b> <i>Obsada i gra aktorska (5/5 gwiazdek)</i>: Tom Hanks w roli Forresta Gumpa dostarcza niezapomnianego występu aktorskiego, który jest kluczowym elementem sukcesu tego filmu. Jego autentyczność i zaangażowanie w postać sprawiają, że bohater staje się nie tylko ikoną kina, ale także bliskim sercu widza. Wspierany przez resztę obsady, tworzy zespół aktorski, który wciąga i porusza widza na głębokim poziomie emocjonalnym.</p>
					</br>
					<p><b>Akapit 3:</b> <i> Scenografia i reżyseria (4/5 gwiazdek) </i>: Scenografia i reżyseria "Forrest Gump" są na bardzo wysokim poziomie, chociaż nieco ustępują innym elementom filmu. Każde ujęcie jest starannie zaplanowane, a styl reżyserski dodaje głębi i intensywności historii. Jednakże, w niektórych momentach można zauważyć pewne niedociągnięcia, które nieco osłabiają ostateczne wrażenia z oglądania.

					To właśnie te wszystkie elementy sprawiają, że "Forrest Gump" nie tylko zasługuje na miano jednego z najlepszych filmów w historii kina, ale także pozostaje moim ulubionym filmem, który zawsze będę polecał z pełnym przekonaniem.</p>
				</div>
			</div>
		
		<?php elseif ($pageName === "matma"): ?>	
			<div class="content_matma">
				<h1>Schemat rozwiązanie funkcji kwadratowej:</h1>
				<div class="wzory">
				
					<ul>
						<li>
						<p> Wzór funkcji kwadratowej:</p>
							<math>
							<mi>f</mi>
							<mo stretchy="false">(</mo>
							<mi>x</mi>
							<mo stretchy="false">)</mo>
							<mo>=</mo>
							<mi>a</mi>
							<msup>
							<mi>x</mi>
							<mn>2</mn>
							</msup>
							<mo>+</mo>
							<mi>b</mi>
							<mi>x</mi>
							<mo>+</mo>
							<mi>c</mi>
							</math>
							
						</li>
						
						<li>
						<p> Wzór na deltę:</p>
						   <math> 
						   <mi>Δ</mi> 
						   <mo>=</mo> 
						   <msup> 
						   <mi>b</mi> 
						   <mn>2</mn>
						   </msup> 
						   <mo>-</mo> 
						   <mn>4</mn> 
						   <mo>×</mo> 
						   <mi>a</mi> 
						   <mo>×</mo> 
						   <mi>c</mi> 
						   </math>
						
						</li>
						
						<li>
							<p> <b>Dla Δ<0 brak rozwiązań. </b></p><p>Dla Δ>0 i dla Δ=0. </p>
										<math>
											<mi>x</mi>
											<mo>=</mo>
											<mfrac>
											<mrow>
											<mo>−</mo>
											<mi>b</mi>
											<mo>±</mo>
											<msqrt>
											<mi>Δ</mi>
											</msqrt>
											</mrow>
											<mrow>
											<mn>2</mn>
											<mi>a</mi>
											</mrow>
											 </mfrac>
										</math>
	
							
						
						
						</li>
					<ul>	
				</div>
			</div>
		
		
		<?php elseif ($pageName === "ankieta"): ?>	
		
		
			
	
		<div class="ankieta_podstrona">
			<div class="content_ankieta">
				
				
					<h1>Podaj swoje top 5 seriali!</h1>
						<form action="dodaj.php" method="post">
							<ul>
								<li>
								<h2>1. Miejsce</h2>
								<input type="text" name="serial1" required/>
								</li>
								
								<li>
								<h2>2. Miejsce</h2>
								<input type="text" name="serial2" required/>
								</li>
								
								<li>
								<h2>3. Miejsce</h2>
								<input type="text" name="serial3" required/>
								</li>
								
								<li>
								<h2>4. Miejsce</h2>
								<input type="text" name="serial4" required/>
								</li>
								
								<li>
								<h2>5. Miejsce</h2>
								<input type="text" name="serial5" required/>
								</li>
							</ul>

						<input type="submit" value="Wyślij" class="przycisk"/>
					</form>
				<a href="?action=wyniki_seriali"><i><h3>Sprawdź wyniki innych ankietowanych</h3></i></a>
			</div>
		</div>
		
		<?php elseif ($pageName === "wyniki_seriali"): ?>	
		
		
		<div class="wyniki">
		
			<div class="tabela_z_wynikami">
					<?php
						$conn = new mysqli("localhost", "root", "", "kinomaniak");
						$wynik = $conn->query("SELECT * FROM seriale");

						if ($wynik->num_rows > 0) {
							echo "<table border='1'>";
							echo "<tr><th>ID</th><th>Miejsce 1</th><th>Miejsce 2</th><th>Miejsce 3</th><th>Miejsce 4</th><th>Miejsce 5</th></tr>";
							while ($wiersz = $wynik->fetch_assoc()) {
								echo "<tr>";
								echo "<td>" . $wiersz["id"] . "</td>";
								echo "<td>" . $wiersz["Miejsce_1"] . "</td>";
								echo "<td>" . $wiersz["Miejsce_2"] . "</td>";
								echo "<td>" . $wiersz["Miejsce_3"] . "</td>";
								echo "<td>" . $wiersz["Miejsce_4"] . "</td>";
								echo "<td>" . $wiersz["Miejsce_5"] . "</td>";
								echo "</tr>";
							}
							echo "</table>";
						} else {
							echo "Nie ma jeszcze żadnych odpowiedzi od ankietowanych";
						}

						$conn->close();
					?>
			</div>

			<a href="?action=ankieta"><u><h1>WRÓĆ</h1></u></a>
		</div>			
		
		
		<?php elseif ($pageName === "ankieta_filmy"): ?>	
		
		
			
	
		<div class="ankieta_podstrona">
			<div class="content_ankieta">
				
				
					<h1>Podaj swoje top 5 filmów!</h1>
						<form action="dodaj.php" method="post">
							<ul>
								<li>
								<h2>1. Miejsce</h2>
								<input type="text" name="film1" required/>
								</li>
								
								<li>
								<h2>2. Miejsce</h2>
								<input type="text" name="film2" required/>
								</li>
								
								<li>
								<h2>3. Miejsce</h2>
								<input type="text" name="film3" required/>
								</li>
								
								<li>
								<h2>4. Miejsce</h2>
								<input type="text" name="film4" required/>
								</li>
								
								<li>
								<h2>5. Miejsce</h2>
								<input type="text" name="film5" required/>
								</li>
							</ul>

							<input type="submit" value="Wyślij" class="przycisk"/>
						</form>
				<a href="?action=wyniki_filmów"><i><h3>Sprawdź wyniki innych ankietowanych</h3></i></a>
				
				<!DOCTYPE html>


				<class="svg">
				<svg width="300" height="250" xmlns="http://www.w3.org/2000/svg">

	    

	
					<circle cx="250" cy="40" r="50" fill="#black" />
					<circle cx="50" cy="40" r="50" fill="#black" />
					<rect x="50" y="150"width="200" height="200" fill="	#808080" />
					<rect x="50" y="50" width="200" height="100" fill="#696969" />
					<rect x="50" y="50" width="100" height="100" fill="#808080" />
					<rect x="50" y="150" width="100" height="50%" fill="#696969" />
					<circle cx="100" cy="100" r="20" fill="#000000" /> */ nos /*

				   
					<circle cx="100" cy="100" r="25" fill="#ffffff" />
					<circle cx="100" cy="100" r="10" fill="#000000" />
					<circle cx="200" cy="100" r="25" fill="#ffffff" />
					<circle cx="200" cy="100" r="10" fill="#000000" />
					<circle cx="150" cy="190" r="30" fill="#ffffff" />
					<circle cx="150" cy="190" r="20" fill="red" />
					<circle cx="150" cy="150" r="50" fill="#black" />
					<line x1="150" y1="150" x2="300" y2="200" stroke="black" />
					<line x1="150" y1="150" x2="300" y2="100" stroke="black" />
					<line x1="150" y1="150" x2="300" y2="150" stroke="black" />
					
					<line x1="150" y1="150" x2="0" y2="200" stroke="black" />
					<line x1="150" y1="150" x2="0" y2="100" stroke="black" />
					<line x1="150" y1="150" x2="0" y2="150" stroke="black" />
				</svg>
						


			</div>
		</div>
		
		<?php elseif ($pageName === "wyniki_filmów"): ?>	
		
		
				<div class="wyniki">
				
					<div class="tabela_z_wynikami">
						<?php
								$conn = new mysqli("localhost", "root", "", "kinomaniak");
								$wynik = $conn->query("SELECT * FROM filmy");

								if ($wynik->num_rows > 0) {
									echo "<table border='1'>";
									echo "<tr><th>ID</th><th>Miejsce 1</th><th>Miejsce 2</th><th>Miejsce 3</th><th>Miejsce 4</th><th>Miejsce 5</th></tr>";
									while ($wiersz = $wynik->fetch_assoc()) {
										echo "<tr>";
										echo "<td>" . $wiersz["id"] . "</td>";
										echo "<td>" . $wiersz["Miejsce_1"] . "</td>";
										echo "<td>" . $wiersz["Miejsce_2"] . "</td>";
										echo "<td>" . $wiersz["Miejsce_3"] . "</td>";
										echo "<td>" . $wiersz["Miejsce_4"] . "</td>";
										echo "<td>" . $wiersz["Miejsce_5"] . "</td>";
										echo "</tr>";
									}
									echo "</table>";
								} else {
									echo "Nie ma jeszcze żadnych odpowiedzi od ankietowanych";
								}

								$conn->close();
						?>
					</div>

					<a href="?action=ankieta_filmy"><u><h1>WRÓĆ</h1></u></a>
				</div>			
	
		<?php endif; ?>	
		
		
		
		
		
		<div class="footer">
			</br>
			<p>Strona ostatnio zaktualizowana: 21 kwietnia 2024</p>
			<p><a href="polityka_prywatnosci.html">Polityka prywatności</a> | <a href="warunki_uzytkowania.html">Warunki użytkowania</a></p>
			<p>© 2024 Kącik Kinomaniaka. Wszelkie prawa zastrzeżone.</p>
			<p>Współpraca: <a href="partnerzy.html">Nasi partnerzy</a></p>
		</div>


	

	<script src="jquery-3.7.1.min.js"></script>
	<script>
 
    $(document).ready(function() {
    var NavY = $('.nav').offset().top;
      
    var stickyNav = function(){
    var ScrollY = $(window).scrollTop();
           
    if (ScrollY > NavY) { 
        $('.nav').addClass('sticky');
    } else {
        $('.nav').removeClass('sticky'); 
    }
    };
      
    stickyNav();
      
    $(window).scroll(function() {
        stickyNav();
    });
    });
     
	</script>

	
   

   
   
</body>

		
</html>

