<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>FC Dinamo Kiev</title>
	<link rel="stylesheet" href="<?= base_url();?>css/style.css">
	<link rel="shortcut icon" type="image/x-icon" href="<?= base_url();?>images/logomin.png">
	<script src="<?= base_url();?>js/jquery-1.10.2.min.js"></script>
	<script src="<?= base_url();?>js/jquery.bxslider.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.bxslider').bxSlider({
				pager: false,
				auto: true,
				pause: 3000
			});
		});
	</script>
</head>
<body>
	<div id="wrapper">
		<header>
			<?php include ("blocks/header.php"); ?>
		</header>
		<div id="top">
			<?php $i=3; include ("blocks/menu.php"); ?>			
		</div>
		<div id="content">
			<div id="left">
				<?php include ("blocks/left.php"); ?>
			</div>			
			<div id="center">
				<div class="titleNews">Стадіон НСК 'Олімпійський'</div>
				<div id="slider">
					<ul class="bxslider">
					  <li><img src="<?= base_url();?>images/slide1.jpg" alt="" /></li>
					  <li><img src="<?= base_url();?>images/slide2.jpg" alt="" /></li>
					  <li><img src="<?= base_url();?>images/slide5.jpeg" alt="" /></li>
					  <li><img src="<?= base_url();?>images/slide4.jpg" alt="" /></li>
					</ul>
				</div>
				<h4>Велике минуле НСК 'Олімпійський'</h4>
				<article>
					<div id="newsStadium">
						<p>У самісінькому центрі Києва, біля підніжжя Черепанової гори, розташований один з найбільших у Європі 
							комплекс спортивних споруд, який з 1996 року має назву "Національний спортивний комплекс "Олімпійський". 
							Його центральною частиною є велика спортивна арена з футбольним полем, легкоатлетичними доріжками та 
							двоярусними трибунами для глядачів.</p>
						<p>Днем народження стадіону вважається дата 12 серпня 1923 року, коли на "Червоному Стадіоні ім. Л. Троцького" 
							були проведені перші змагання першої Олімпіади Київщини. Проект стадіону був розроблений молодим інженером Л.І.
							Пільвинським. Для південної і східної трибун використали схили Черепанової гори. З уламків будівель збудували 
							північну та західну трибуни, засипавши їх землею.</p>
						<p>Особливу увагу будівництву стадіону приділяв угорський політичний діяч-інтернаціоналіст Лайош Гавро, який  
							1924 року був військовим комісаром Київської губернії. Саме йому належить ініціатива створення Червоного 
							стадіону. І завдяки Гавро це будівництво таки почалося.</p>
						<p>Назва "Червоний стадіон ім. Л. Троцького" була визначена за революційними традиціями того часу. Червоний колір 
							у назвах багатьох споруд домінував ще багато років. Ім'я Л. Троцького ( Троцький (Бронштейн) Лев Давидович – 
							Народний комісар військових і морських сил СРСР, з 1926 року за партійний ревізіонізм виведений з Політбюро 
							ЦК ВКП(б), а наприкінці 1927 року – зі складу ЦК, висланий з СРСР і вбитий за кордоном) в назві стадіону 
							значилося тільки 1923 року.</p>
						<p>У 1924 році на стадіоні було трохи розбудоване футбольне поле 120х70 метрів з орієнтацією захід-схід. 
							Навколо зовнішнього периметра поля облаштували бігові доріжки, а також звели роздягальні та душові. Так 
							поступово стадіон змінював своє обличчя.</p>			
						<p>З 1925 року на Червоному стадіоні проходила більшість матчів на першість міста. Тут святкував перемоги й 
							легендарний київський "Желдор", в якому виступали найкращі київські футболісти - Ямковий, Весеньєв, 
							Товаровський, Бардадим, Шевцов, Бойко, Долгов і Фенхель, а трохи пізніше –Гончаренко, Свиридовський, Поталов 
							та інші.</p>					
						<p>Остання реконструкція Національного спортивного комплексу "Олімпійський" розпочалася у серпні 2008 року в 
							межах підготовки  та проведення в Україні фінальної частини чемпіонату Європи 2012 року з футболу.</p>		
					</div>
				</article>		
			</div>
		</div>
		<div class="clear"></div>
		<footer>
			<? include ("blocks/footer.php"); ?>
		</footer>
	</div>
</body>
</html>