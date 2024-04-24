
	<?php $titre = 'Actualite'; ?>
	
	<?php include("entete.php") ?>

	<?php include 'menu.php'; ?>
	
	<?php
		include 'database.php';

		$id = $_GET['id'];

		$req = $bdd->prepare('SELECT Article.titre, Categorie.libelle, Article.contenu FROM Article
		INNER JOIN Categorie ON Article.categorie = Categorie.id WHERE Article.categorie = :id');
		$req->execute(array(
		'id' => $id
		));?>
		
		<div>
			<?php foreach ($req as $donnee) { ?>
				<div id="listeCat">
					<h3><?= $donnee['titre']?></h3>
					<p><?= $donnee['contenu']?></p>
				</div>
			<?php } ?>
		</div>

	<?php include("footer.php") ?>
