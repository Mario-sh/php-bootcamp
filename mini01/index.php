<?php
//1====Logique php=====
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    //var_dump($_POST);
    //Récupération des valeurs dans des variables plus courtes
    $num1 = $_POST["nombre1"];
    $num2 = $_POST["nombre2"];
    $op = $_POST["operateur"];

    //vérifier d'abord si une case est vide 
    if (empty($num1) || empty($num2)) {
        $resultat = "Veuillez entrez deux nombres svp";
    } else {
        //Pour les calculs
        if ($op === "plus") {
            $resultat = $num1 + $num2;
        } elseif ($op === "moins") {
            $resultat = $num1 - $num2;
        } elseif ($op === "fois") {
            $resultat = $num1 * $num2;
        } elseif ($op === "divise") {
            if ($num2 == 0) {
                $resultat = "impossible de diviser un nombre pas zéro ";
            } else {
                $resultat = $num1 / $num2;
            }
        } else {
            $resultat = "Opérateur invalide ou corrompu";
        }
       
    }
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
    <!--Affichage du résultat ou de l'erreur sous le formulaire-->
    <?php if (isset($resultat)): ?>
        <?php echo "Résultat :" . $resultat; ?>
    <?php endif; ?>    
</body>

</html>