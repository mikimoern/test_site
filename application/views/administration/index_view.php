<!DOCTYPE HTML>
<html>
<head>
	<title>Головна сторінка адміністратора</title>
	<link rel="stylesheet" href="<?= base_url();?>css/style.css">
	<meta charset="utf-8">
	<link rel="shortcut icon" type="image/x-icon" href="<?= base_url();?>images/logomin.png">
</head>
<body>
	<div id="wrapper">
		<header>
			<? include ("blocks/header.php"); ?>
		</header>
		<div id="top">
			<? include ("blocks/admin_menu.php"); ?>			
		</div>	
		<div id="content">
			<div id="left">
				<? include ("blocks/admin_left.php"); ?>
			</div>			
			<div id="center">
				<article>
					<h2>Вітаємо в адмін панелі</h2>
					<p>Загальна кількість новин: <?=$total_news;?></p>
					<p>Загальна кількість гравців: <?=$total_players;?></p>
					<p>Загальна кількість тренерів: <?=$total_coaches;?></p>
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