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
				<div class='titleNews'>Видалити тренера</div>
				<form action = "<?=base_url().'coaches/delete';?>" method="post"> 
					<?php foreach($coaches_list as $item) :?>
						<p><?="<input name='id' type='radio' value='$item[id]'>$item[name]";?></p>
					<?php endforeach;?>	
					<p><input type = "submit" name = "delete_button" value = "Видалити"></p>
				</form>			
			</div>
		</div>
		<div class="clear"></div>
		<footer>
			<? include ("blocks/footer.php"); ?>
		</footer>
	</div>
</body>
</html>