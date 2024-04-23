
<?php $titre = 'ACTUALITES POLYTECHNICIENNES'; ?>

<?php include("entete.php");?>

<header>
	<h1>ACTUALITES POLYTECHNICIENNES</h1>
	<?php
		include 'database.php';
		$reponse = $bdd->query('SELECT * FROM Categorie');
	?>
	<div id="divUL">
		<ul>
		<li><a href="index.php">Accueil</a></li>
		<?php foreach ($reponse as $donnee) { ?>
			<li><a href="afficher.php?id=<?= $donnee['id'] ?>"><?= $donnee['libelle']?></a></li>
			<?php } 
		?>
		</ul>
	</div>	
</header>