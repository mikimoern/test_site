<div class="block">
	<div class="header">Команда</div>
	<div class="content">
		<nav>
			<div>
				<p>Перша команда</p>
				<div>
					<a <?php if (isset ($j)){
						if ($j==1) {
							echo "class='active'";
						}
					} ?> href="<?=base_url().'players';?>">Гравці</a>
				</div>
				<div>
					<a <?php if (isset ($j)){
						if ($j==2) {
							echo "class='active'";
						}
					} ?> href="<?=base_url().'coaches';?>">Тренери</a>
				</div>
				<p>Динамо-2</p>
				<div>
					<a <?php if (isset ($j)){
						if ($j==3) {
							echo "class='active'";
						}
					} ?> href="<?=base_url().'junior_players';?>">Гравці</a>
				</div>
				<div>
					<a <?php if (isset ($j)){
						if ($j==4) {
							echo "class='active'";
						}
					} ?> href="<?=base_url().'junior_coaches';?>">Тренери</a>
				</div>
			</div>
		</nav>
	</div>
</div>
<div class="block">
	<div class="header">Історія</div>
	<div class="content">
		<nav>
			<div>
				<a <?php if (isset ($j)){
						if ($j==5) {
							echo "class='active'";
						}
					} ?> href="<?=base_url().'achievement';?>">Клубні досягнення</a>
			</div>
			<div>
				<a <?php if (isset ($j)){
						if ($j==6) {
							echo "class='active'";
						}
					} ?> href="<?=base_url().'history_coaches';?>">Легендарні наставники</a>
			</div>
			<div>
				<a <?php if (isset ($j)){
						if ($j==7) {
							echo "class='active'";
						}
					} ?> href="<?=base_url().'gold_names';?>">Золоті імена</a>
			</div>
		</nav>
	</div>
</div>
<div class="block">
	<div class="header">Клуб</div>
	<div class="content">
		<nav>
			<div>
				<a <?php if (isset ($j)){
						if ($j==8) {
							echo "class='active'";
						}
					} ?> href="<?=base_url().'management';?>">Менеджмент</a>
			</div>
			<div>
				<a <?php if (isset ($j)){
						if ($j==9) {
							echo "class='active'";
						}
					} ?> href="<?=base_url().'sponsors';?>">Партнери</a>
			</div>
		</nav>
	</div>
</div>