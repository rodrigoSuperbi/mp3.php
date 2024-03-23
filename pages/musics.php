<h1>Músicas do Álbum <?=$_GET['album']?></h1>

<hr>
<div class="row">
    <?php

    $albums = getAlbums();

    $musics = getMusics($albums);
    $teste = getAlbumName($albums);
        foreach ($teste as $nome):
            var_dump($nome);


        endforeach;
    ?>
</div>
<div class="col-12">
    <audio src="albums/BlackSabbath/musics/01 - War Pigs.mp3" controls></audio>
</div>