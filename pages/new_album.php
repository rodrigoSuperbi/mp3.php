<a href="?page=albums">Voltar para os álbums</a>
<h1>Cadastrar novo álbum</h1>

<form action="#" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <input type="text" name="name" placeholder="Nome:" class="form-control">
    </div>   
    <div class="form-group">
        <input type="file" name="image" class="form-control">
    </div> 
    <button type="submit" class="btn btn-success">Cadastrar</button>
</form>    

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $album = $_POST['name'];

    $path = "albums/{$album}";

    if (!is_dir($path)) {
        mkdir($path);
    }

    $file = $_FILES['image'];
    $fileInfo = explode('.', $file['name']);

    $extension = $fileInfo[1];
   // $nameImagem = $fileInfo[0] . '.' . $extension;

    if (move_uploaded_file($file['tmp_name'], $path. '/'. $file['name'])) {
        header('Location: ?page-albums');
    } else {
        echo 'Falha no upload...';
    }
} 

?>