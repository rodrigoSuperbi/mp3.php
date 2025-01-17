<h1>Álbum</h1>

<a href="?page=new_album" class="btn btn-success">Adicionar Novo Álbum</a>

<hr>

<div class="row">
    <?php
        $albumImages = array(
            'Black Sabbath' => 'Paranoid',
            'Kiss' => 'Destroyer',
            'Tim Maia' => 'Tim',
        );

        $albums = getAlbums();
        // for ($i = 1; $i <= 10; $i++):
        foreach ($albums as $album):
            $infoAlbum = explode('/', $album);
            $nameAlbum = $infoAlbum[1];
            $imgName = isset($albumImages[$nameAlbum]) ? $albumImages[$nameAlbum] : $nameAlbum;
            $imgAlbum = $album . '/' . $imgName . '.jpg';
        
    ?>
    <div class="col-3 album">
        <a href="?page=musics&album=<?=$imgName?>">
            <img src="<?=$imgAlbum?>" alt="<?=$nameAlbum?>" class="img-album">
            <h4><?=$nameAlbum?></h4>
        </a>
    </div>

    <?php
        endforeach;
        // endfor;
    ?>
</div>