<?php

$albumImages = array(
    'Paranoid' => 'Black Sabbath',
    'Destroyer' => 'Kiss',
    'Tim' => 'Tim Maia',
);

function getAlbums() {
    $albums = glob('albums/*');
    return $albums;
}

function getMusics($albums) {

    foreach ($albums as $banda):
        if ($_GET['album'] == $albumImages);
            
        $musics = glob("{$banda}/musics/*.mp3");
    endforeach;

    //var_dump($musics);
    return $musics;
}

function getAlbumName($albums) {
    $albumsPATH = glob('albums/*');
    foreach ($albumsPATH as $bandaPATH):
        $albumName = explode('/', $albumsPATH);
        var_dump($albumName);
    endforeach;
    return $albumName;
}