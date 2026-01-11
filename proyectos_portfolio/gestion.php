<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Datos Recibidos del Formulario</title>
    <style>
        body { font-family: monospace; background-color: #f4f4f4; }
        pre { background-color: #fff; padding: 20px; border: 1px solid #ccc; white-space: pre-wrap; }
    </style>
</head>
<body>

    <h1>Datos enviados por POST:</h1>
    <pre>
<?php
    // La variable superglobal $_POST contiene todos los datos enviados desde el formulario.
    // print_r() es una función de PHP que imprime la información de una variable de forma legible.
    print_r($_POST);
?>
    </pre>

    <h1>Archivos subidos:</h1>
    <pre>
<?php
    // La variable superglobal $_FILES contiene la información de los archivos subidos.
    // Es importante revisarla también, ya que tu formulario permite subir archivos.
    print_r($_FILES);
?>
    </pre>

</body>
</html><!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Datos Recibidos del Formulario</title>
    <style>
        body { font-family: monospace; background-color: #f4f4f4; }
        pre { background-color: #fff; padding: 20px; border: 1px solid #ccc; white-space: pre-wrap; }
    </style>
</head>
<body>

    <h1>Datos enviados por POST:</h1>
    <pre>
<?php
    // La variable superglobal $_POST contiene todos los datos enviados desde el formulario.
    // print_r() es una función de PHP que imprime la información de una variable de forma legible.
    print_r($_POST);
?>
    </pre>

    <h1>Archivos subidos:</h1>
    <pre>
<?php
    // La variable superglobal $_FILES contiene la información de los archivos subidos.
    // Es importante revisarla también, ya que tu formulario permite subir archivos.
    print_r($_FILES);
?>
    </pre>

</body>
</html>