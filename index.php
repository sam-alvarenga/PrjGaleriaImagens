<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bowlby+One&family=Danfo&family=Jersey+10+Charted&family=Limelight&family=Monoton&family=Notable&family=Press+Start+2P&display=swap" rel="stylesheet">
    <title>Galeria de Imagem</title>
</head>

<body>

    <div class="container">
        <h1>Galeria de Imagens</h1>
        
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="image" accerpt="image/*">
            <button type="submit">Enviar Imagem</button>
        </form>
        <h2>Filmes em Cartaz</h2>


    </div>
    <div class="gallery">
        
        <?php
            $file = glob("uploads/*.*");
            foreach($file as $file) {
            echo '<img src="' . $file . '" alt="Imagem">';
            }
            ?>
    </div>

</body>

</html>