<div>
	<?php
    if(!empty($articles)){ 
        foreach ($articles as $article) { ?>
            <div id="listeCat">
                <h3><?= $article->titre?></h3>
                <p><?= $article->contenu?></p>
            </div>
        <?php } 
    }else{ ?>
        <div>Aucune catégorie ne correspond à cette article</div>
    <?php } ?>
</div>

<?php
        require_once './footer.php';
?>
