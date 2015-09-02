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
				<div class='titleNews'>Добавити тренера</div>
				<div class="add">
					<form name="add_coaches" action="<?= base_url().'coaches/add';?>" method="post">
						<div>
							<p>Імя та призвище<br />
								<input type="text" name="name" value="<?= set_value('name'); ?>"><br />
								<strong><?=form_error('name');?></strong>
							</p>
							<p>Країна<br />
								<input type="text" name="country" value="<?=set_value('country');?>" /><br />
								<strong><?=form_error('country');?></strong>
							</p>
							<p>Зображення<br />
								<input type="text" name="img" value="<?=set_value('img');?>" /><br />
								<strong><?=form_error('img');?></strong>
							</p>
							<p>Посада<br />
								<input type="text" name="position" value="<?=set_value('position');?>" /><br />
								<strong><?=form_error('position');?></strong>
							</p>
							<p>
								<label>Виберіть команду<br />
									<select name="team" >
										<option value="1"<?=set_value('team','1', TRUE);?>>1</option>
										<option value="2"<?=set_value('team','2');?>>2</option>
									</select>
								</label>
								<strong><?=form_error('team');?></strong>
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