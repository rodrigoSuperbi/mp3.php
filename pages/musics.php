<a href="?page=albums">Voltar para os álbums</a>

<h1>Músicas do álbum <?=$_GET['album']?></h1>

<a href="?page=new_music&album=<?=$_GET['album']?>" class="btn btn-success">Cadastrar nova música</a>

<hr>

<div class="row">
    <?php

    $albums = getAlbums();
    $bandaName = getAlbumPATH($_GET['album']);
    $musics = getMusics($bandaName);


    ?>
</div>
<?php
    foreach ($musics as $music):
?>
    <div class="col-12">
        <audio src="<?=$music?>" controls></audio>
    </div>

    <?php  
        endforeach
    ?>