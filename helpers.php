<?php

function getAlbumPATH($albumName) {
    $albumImages = array(
        'Paranoid' => 'Black Sabbath',
        'Destroyer' => 'Kiss',
        'Tim' => 'Tim Maia',
        'Stay Hungry' => 'Twisted Sister',
    );

    foreach ($albumImages as $album => $banda):
        if ($albumName == $album) {
            return $banda;
        }
    endforeach;
}

function getAlbums() {
    $albums = glob('albums/*');
    return $albums;
}

function getMusics($banda) {
    $musics = [];
        $musics = array_merge($musics, glob("albums/{$banda}/musics/*.mp3"));
    return $musics;
}
?>