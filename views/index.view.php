<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/07702d4e25.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <title>Galería</title>
</head>
<body>
    <header>
        <div class="contenedor">
            <h1 class="titulo">My Galería</h1>
        </div>
    </header>
    <section class="fotos">
        <div class="contenedor">
            <?php foreach($fotos as $foto): ?>
                <div class="thumb">
                    <a href="foto.php?id=<?php echo $foto['id_imagen']; ?>">
                        <img src="fotos/<?php echo $foto['imagen']; ?>" alt="<?php echo $foto['titulo']; ?>">
                    </a>
                </div>
            <?php endforeach;?>
            <div class="paginacion">
                <?php if($pagina_actual > 1): ?>
                    <a href="index.php?p=<?php echo $pagina_actual -1; ?>" class="izquierda"><i class="fa fa-arrow-left"></i> Pagina anterior</a>
                <?php endif;?>

                <?php if($total_paginas != $pagina_actual): ?>
                    <a href="index.php?p=<?php echo $pagina_actual + 1; ?>" class="derecha">Pagina siguiente<i class="fa fa-arrow-right"></i></a>
                <?php endif;?>
            </div>
        </div>
    </section>
    <footer>
        <p class="copyright">Galería creada por Enrique Tapia - www.enriquetapiaan.com</p>
    </footer>
</body>
</html>