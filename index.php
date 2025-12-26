<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>Inicio</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get">
        <section>
            <input id="contenedorFormulario" type="email" placeholder="Ingrese su email" name="email">
            <input id="contenedorFormulario" type="password" placeholder="Ingrese su password">
            <input id="contenedorFormulario" type="submit" name="btnEnviar" value="Enviar">
        </section>
    </form>
</body>
</html>