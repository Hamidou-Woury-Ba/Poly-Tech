<header>
	<h1>ACTUALITES POLYTECHNICIENNES</h1>
	<div id="divUL">
		<ul>
		<li><a href="index.php">Accueil</a></li>
		<?php 
		if(isset($categorie)){
			foreach ($categorie as $categories) { ?>
				<li><a href="index.php?action=categorie&id=<?= $categories->id ?>"><?= $categories->libelle?></a></li>
				<?php }
		} else{?>
			<div>Aucune categorie trouvé</div>
		<?php }
		?>
		</ul>
	</div>	
</header>