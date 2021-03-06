<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>FC Dinamo Kiev</title>
	<link rel="stylesheet" href="<?= base_url();?>css/style.css">
	<link rel="shortcut icon" type="image/x-icon" href="<?= base_url();?>images/logomin.png">
</head>
<body>
	<div id="wrapper">
		<header>
			<?php include ("blocks/header.php"); ?>
		</header>
		<div id="top">
			<?php $j=7; include ("blocks/menu.php"); ?>			
		</div>
		<div id="content">
			<div id="left">
				<?php include ("blocks/left.php"); ?>
			</div>			
			<div id="center">
				<div class="titleNews">ЗОЛОТІ ІМЕНА</div>
				<div class="gold_names">
					<p class="golds">Олег Блохін 1975 р</p>
					<img src="<?=base_url();?>files/gold/blokhin.jpg" alt="Олег Блохін" />
					<p>Оле?г Володи?мирович Блохі?н ( 5 листопада 1952, Київ) — радянський футболіст і український футбольний тренер. 
						Найрезультативніший бомбардир радянського футболу — 319 голів у залік клубу Григорія Федотова. 
						Лауреат Ювілейної нагороди УЄФА як найвидатніший український футболіст 50-річчя (1954–2003).</p>
				</div>
				<div class="gold_names">
					<p class="golds">Ігор Бєланов 1986 р</p>
					<img src="<?=base_url();?>files/gold/belanov.jpg" alt="Ігор Бєланов" />
					<p>Ігор Іванович Бєланов ( 25 вересня 1960, Одеса) — радянський та український футболіст, нападник. 
						Лауреат «Золотого м'яча» 1986 р. Віце-чемпіон Європи-1988. Володар Кубка кубків-1986. 
						Заслужений майстер спорту СРСР (1986).</p>
				</div>
				<div class="gold_names">
					<p class="golds">Андрій Шевченко 2004 р</p>
					<img src="<?=base_url();?>files/gold/sheva.jpg" alt="Олег Блохін" />
					<p>Андрій Миколайович Шевченко ( 29 вересня 1976, с. Двірківщина, Яготинський район, Київська область) — 
						український футболіст, виступав за київське «Динамо», «Мілан» та лондонське «Челсі». Заслужений майстер 
						спорту України з 2003 року. Нагороджений найвищою державною відзнакою — «Герой України». 2003 року став 
						першим українцем, який виграв Лігу чемпіонів. Володар «Золотого м'яча» 2004 — призу, який вручають 
						найкращому футболісту Європи. Один з найрезультативніших бомбардирів єврокубкових турнірів за всі сезони[2]. 
						Найкращий бомбардир національної збірної України в історії. Тричі ставав найкращим бомбардиром Ліги 
						чемпіонів, двічі — чемпіонату Італії. Другий бомбардир за всю історію «Мілана».</p>
				</div>					
			</div>
		</div>
		<div class="clear"></div>		
		<footer>
			<? include ("blocks/footer.php"); ?>
		</footer>
	</div>
</body>
</html>