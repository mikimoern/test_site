<nav>
	<ul id="topmenu">
		<li>
			<a <?php if (isset ($i)){
				if ($i==1) {
					echo "class='active'";
				}
			} ?> href="<?=base_url().'pages';?>">Головна</a>	
		</li>
		<li>
			<a <?php if (isset ($i)){
				if ($i==2) {
					echo "class='active'";
				}
			} ?> href="<?=base_url().'news';?>">Новини</a>	
		</li>
		<li>
			<a <?php if (isset ($i)){
				if ($i==3) {
					echo "class='active'";
				}
			} ?> href="<?=base_url().'stadiums';?>">НСК</a>	
		</li>
		<li>
			<a <?php if (isset ($i)){
				if ($i==4) {
					echo "class='active'";
				}
			} ?> href="<?=base_url().'standings';?>">Турнірна таблиця</a>	
		</li>
		<li>
			<a <?php if (isset ($i)){
				if ($i==5) {
					echo "class='active'";
				}
			} ?> href="<?=base_url().'contacts';?>">Контакти</a>	
		</li>
	</ul>
</nav>
<div id="search">
	<form name="search" action="<?=base_url().'search/news';?>" method="post">
		<div>
			<input type="text" name="query" id="query" placeholder="Поиск" />
			<input type="submit" name="search" id="search" value="" />
		</div>
	</form>
</div>
