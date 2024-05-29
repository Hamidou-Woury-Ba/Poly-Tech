<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Actualités MGLSI</title>
    <style>
        
    </style>
</head>
<body>
    <?php
        require_once './menu.php';
    ?>
    <div>
	<?php 
        if(!empty($articles)){
            foreach ($articles as $article) { ?>
                <div id="listeCat">
                    <h3><a href="index.php?action=article&id=<?= $article->id?>"><?= $article->titre?></a></h3>
                    <p><?= $article->contenu?></p>
                </div>
            <?php 
            } 
        }else{ ?>
            <div>Aucun article trouvé</div>
        <?php }
    require_once './footer.php';
    ?>
</div>
</body>
</html>