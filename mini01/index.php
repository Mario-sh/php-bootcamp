<?php
//1====Logique php=====
if ($_SERVER["REQUEST_METHOD"] === "POST") {
var_dump($_POST);
}


?>
<!---INTERFACE HTML--->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULATRICE||PHP</title>
</head>

<body>
    <form method="POST" action="">
        <label for="nombre1">Nombre1</label>
        <input type="number" name="nombre1" placeholder="votre premier nombre ici">
        <select name="operateur">
            <option value="plus">+</option>
            <option value="moins">-</option>
            <option value="fois">*</option>
            <option value="divise">/</option>
        </select>
        <label for="nombre2">Nombre2</label>
        <input type="number" name="nombre2" placeholder="Votre second nombre ici">
        <button type="submit" name="OK">Calculer</button>
    </form>
</body>

</html>