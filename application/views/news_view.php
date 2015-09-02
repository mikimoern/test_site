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
			<?php $i=2; include ("blocks/menu.php"); ?>			
		</div>
		<div id="content">
			<div id="left">
				<?php include ("blocks/left.php"); ?>
			</div>			
			<div id="center">
				<div class='titleNews'>Новини</div>
	
					<?php foreach($news as $item) :?>
						<section>
							<div class='article_img'>
								<img src='<?=base_url().$item['image'];?>' alt='' />
							</div>
							<h2><?=$item['title'];?></h2>
							<p><?=$item['description'];?></p>
							<a class='more' href="<?=base_url().'one_news/'.$item['id'];?>">Прочитати</a> 
							<div class='clear'></div>
						<div class='article_info'>
							<ul>
								<li>
									<img src='<?=base_url();?>images/icon_user.png' alt='' />
								</li>
								<li>Переглядів: <?=$item['view'];?></li>
								<li><?=$item['date'];?></li>
							</ul>
						<div class='clear'></div>
						</div>
						</section>
					<?php endforeach;?>
					<?=$this->pagination->create_links();?>
			</div>
		</div>
		<div class="clear"></div>
		<footer>
			<? include ("blocks/footer.php"); ?>
		</footer>
	</div>
</body>
</html>