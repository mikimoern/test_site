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
			<?php $j=6; include ("blocks/menu.php"); ?>			
		</div>
		<div id="content">
			<div id="left">
				<?php include ("blocks/left.php"); ?>
			</div>			
			<div id="center">
				<div id="history_coach">
					<div class="titleNews">ТРЕНЕРИ</div>
					<table>
						<tr>
							<th>Період праці</th>
							<th>Головний тренер</th>
							<th>Кращий результат</th>										
						</tr>
					
					<?php foreach($coaches as $item) :?>
						<tr>
							<td><?=$item['period'];?></td>
							<td><?=$item['name'];?></td>	
							<td><?=$item['result'];?></td>
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