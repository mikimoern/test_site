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
				<div class='titleNews'>Добавити новину</div>
				<div class="add">
					<form name="add_news" action="<?= base_url().'admin_news';?>" method="post">
						<div>
							<p>Назва<br />
								<input type="text" name="title" value="<?= set_value('title'); ?>"><br />
								<strong><?=form_error('title');?></strong>
							</p>
							<p>Дата (xxxx-xx-xx xx:xx:xx)<br />
								<input type="text" name="date" value="<?php $date = date("Y-m-d H:i:s"); echo $date; ?>" /><br />
								<strong><?=form_error('date');?></strong>
							</p>
							<p>Зображення<br />
								<input type="text" name="image" value="<?=set_value('image');?>" /><br />
								<strong><?=form_error('image');?></strong>
							</p>
							<p>Зображення для новини<br />
								<input type="text" name="big_img" value="<?=set_value('big_img');?>" /><br />
								<strong><?=form_error('big_img');?></strong>
							</p>
							<p>Короткий опис (с тегами)<br />
								<textarea name="description" cols="80" rows="5"><?=set_value('description');?></textarea><br />
								<strong><?=form_error('description');?></strong>
							</p>
							<p>Текс новини (с тегами)<br />
								<textarea name="text" cols="80" rows="15"><?=set_value('text');?></textarea><br />
								<strong><?=form_error('text');?></strong>
							</p>
							<p><input type="submit" name="add_button" value="Добавити" /></p>

						</div>
					</form>
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