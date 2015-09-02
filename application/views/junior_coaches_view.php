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
			<?php $j=4; include ("blocks/menu.php"); ?>			
		</div>
		<div id="content">
			<div id="left">
				<?php include ("blocks/left.php"); ?>
			</div>			
			<div id="center">
				<div class='titleNews'>Старший тренер</div>
					
					<?php foreach($head_coaches as $item) :?>
						<div class='coach'>
							<img src="<?=base_url().$item['img'];?>" alt=''/>
							<h4><?=$item['name'];?></h4>											
							<p><?=$item['country'];?></p>
						 </div>
					<?php endforeach;?>
					
				<div class="clear"></div>
				<div class='titleNews'>Асистент тренера</div>	
					
					<?php foreach($assistant_coaches as $item) :?>
						<div class='coach'>
							<img src="<?=base_url().$item['img'];?>" alt=''/>
							<h4><?=$item['name'];?></h4>											
							<p><?=$item['country'];?></p>
						 </div>
					<?php endforeach;?>
						
				<div class="clear"></div>
				<div class='titleNews'>Тренер воротарів</div>	
					
					<?php foreach($goalkeeper_coaches as $item) :?>
						<div class='coach'>
							<img src="<?=base_url().$item['img'];?>" alt=''/>
							<h4><?=$item['name'];?></h4>											
							<p><?=$item['country'];?></p>
						 </div>
					<?php endforeach;?>
						
				<div class="clear"></div>
				<div class='titleNews'>Начальник команди</div>	
					
					<?php foreach($physical_coaches as $item) :?>
						<div class='coach'>
							<img src="<?=base_url().$item['img'];?>" alt=''/>
							<h4><?=$item['name'];?></h4>											
							<p><?=$item['country'];?></p>
						 </div>
					<?php endforeach;?>			
			</div>
		</div>
		<div class="clear"></div>		
		<footer>
			<? include ("blocks/footer.php"); ?>
		</footer>
	</div>
</body>
</html>