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
			<?php $i=1; include ("blocks/menu.php"); ?>			
		</div>
		<div id="content">
			<div id="left">
				<?php include ("blocks/left.php"); ?>
			</div>			
			<div id="center">
				<div id="achievment">
					<?php foreach($progress as $item) :?>
						<p><?=$item['title'];?><span> <?=$item['quantity'];?></span></p>
					<?php endforeach;?>
				</div>
				<div class="clear"></div>
				<div id="contentNews">
					<h1>Логотип ДИНАМО</h1>
					<article>	
						<div id="logotip"></div>
						<h2>Гімн "Динамо"</h2>
						<p>	Стадион, как вулкан, раскален докрасна<br>
							И терпения чаша испита до дна,<br>
							Но взорвутся трибуны и выйдите вы –<br>
							Гладиаторы боя, герои молвы.<br>
							И начнется великая драма, а в ней<br>
							Никогда не предскажешь, кто будет сильней.<br>
							И замрет от волнения главный стратег,<br>
							Вместе с нами отчаянно веря в успех…<br>
							<br>
							ПРИСПІВ<br>
							ДИНАМО-ДИНАМО О-О-О!<br>
							ДИНАМО-ДИНАМО О-О-О!<br>
							ДИНАМО-ДИНАМО О-О-О!<br>
							ДИНАМО-ДИНАМО О-О-О!<br>
							<br>
							Это поле от пахоты вашей черно,<br>
							Сколько горького пота впитало оно,<br>
							Часто падали вы на траву в забытьи,<br>
							И, как знаки судьбы, были жесты судьи.<br>
							Но сегодня игра так похожа на бой –<br>
							Нужно выстоять, выдержать, вытерпеть боль<br>
							И зубами скрипя, когда слов уже нет,<br>
							Пробиваться сквозь тернии к звездам побед.<br>
							<br>
							ПРИСПІВ<br>
							<br>
							Пусть Фортуна бывала жестокой подчас,<br>
							Но она лишь упорнее делала вас,<br>
							И жестокие травмы забыть не дадут,<br>
							Что победа – награда за каторжный труд.<br>
							И опять, как Везувий, ревет стадион,<br>
							Снова верит, и ждет, и надеется он,<br>
							Бьется пламя страстей и волнуется кровь,<br>
							И, забыв обо всем, мы скандируем вновь.<br>
							<br>
							ПРИСПІВ<br>
							<br>
							<span class="author">Музика: Вадима Лащука</span><br>

							<span class="author">Слова: Анатолія Матвійчука</span>
						</p>
					</article>
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