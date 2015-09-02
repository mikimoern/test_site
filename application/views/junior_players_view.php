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
			<?php $j=3; include ("blocks/menu.php"); ?>			
		</div>
		<div id="content">
			<div id="left">
				<?php include ("blocks/left.php"); ?>
			</div>			
			<div id="center">
				<div class='titleNews'>Воротарі</div>
					
					<?php foreach($junior_goalkeepers as $item) :?>
						<div class='coach'>
							<img src="<?=base_url().$item['img'];?>" alt=''/>
							<h4><?=$item['number'];?></h4>
							<h4><?=$item['name'];?></h4>											
							<p><?=$item['country'];?></p>
						 </div>
					<?php endforeach;?>
					
				<div class="clear"></div>
				<div class='titleNews'>Захисники</div>	
					
					<?php foreach($junior_protectors as $item) :?>
						<div class='coach'>
							<img src="<?=base_url().$item['img'];?>" alt=''/>
							<h4><?=$item['number'];?></h4>
							<h4><?=$item['name'];?></h4>											
							<p><?=$item['country'];?></p>
						 </div>
					<?php endforeach;?>
						
				<div class="clear"></div>
				<div class='titleNews'>Півзахисники</div>	
					
					<?php foreach($junior_midfields as $item) :?>
						<div class='coach'>
							<img src="<?=base_url().$item['img'];?>" alt=''/>
							<h4><?=$item['number'];?></h4>
							<h4><?=$item['name'];?></h4>											
							<p><?=$item['country'];?></p>
						 </div>
					<?php endforeach;?>
						
				<div class="clear"></div>
				<div class='titleNews'>Нападники</div>	
					
					<?php foreach($junior_attackers as $item) :?>
						<div class='coach'>
							<img src="<?=base_url().$item['img'];?>" alt=''/>
							<h4><?=$item['number'];?></h4>
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