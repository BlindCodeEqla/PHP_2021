<?php


foreach ($articles as $article):
    ?>

<h1>

    <?php echo $article->titre() ?>

</h1>

    <p>

        <?php echo $article->contenu() ?>

    </p>

<?php endforeach ?>