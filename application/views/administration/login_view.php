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
			<div id="center">
				<div id="auth_admin">
					<h3>Вход в панель адміністратора</h3>

					<form action = "<?=base_url()."administration/login";?>" method="post">
					<p>Логин<br>
						<input type="text" name="login" value="<?=set_value('login');?>"><br>
						<strong><?=form_error('login');?></strong>
					</p>
					<p>Пароль<br>
						<input type="password" name="pass"><br>
						<strong><?=form_error('pass');?></strong>
					</p>
					<p><input type = "submit" name = "enter_button" value = "Увійти"></p>
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