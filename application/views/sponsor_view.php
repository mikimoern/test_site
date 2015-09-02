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
			<?php $j=9; include ("blocks/menu.php"); ?>			
		</div>
		<div id="content">
			<div id="left">
				<?php include ("blocks/left.php"); ?>
			</div>			
			<div id="center">
				<div id="sponsors">
					<div class="titleNews">ПАРТНЕРИ</div>
					<h4>Офіційні спонсори та партнери</h4>
					<table>
						<?php foreach($sponsors as $item) :?>
							<tr>
								<td><img src="<?=base_url().$item['image'];?>" ></td>
								<td><?=$item['description'];?></td>					
							</tr>
						<?php endforeach;?>
					</table>
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