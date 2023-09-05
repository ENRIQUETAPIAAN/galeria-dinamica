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
            <h1 class="titulo">Subir foto</h1>
        </div>
    </header>
    <div class="contenedor">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="formulario" method="post" enctype="multipart/form-data">
            <label for="foto">Selecciona tu foto</label>
            <input type="file" id="foto" name="foto">

            <label for="foto">Selecciona tu foto</label>
            <input type="file" id="foto" name="foto">
        </form>
    </div>
    <footer>
        <p class="copyright">Galería creada por Enrique Tapia - www.enriquetapiaan.com</p>
    </footer>
</body>
</html>