
<div>
    <?php foreach ($articles as $article) { ?>
        <div id="listeCat">
            <h3><?= $article->titre?></h3>
            <p><?= $article->contenu?></p>
        </div>
    <?php } ?>
</div>