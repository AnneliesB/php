<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Basis</title>
</head>
<body>
    <?php

    //oefening 1


    $name = "";
    /*echo "<h1>Hi, my name is $name </h1>";
    echo '<h1>Hi, my name is' . $name .' </h1>';*/

    // kijk na of je de php/mamp errors displayed, vraag mij dat eens op school

    //isset vs !empty
    if (isset($name))
    echo "raket";
    // de code zal worden uitgevoerd, want de variabele bestaat

    // unset($name);
    // de variabele wordt verwijderd en de echo zou niet worden uitgevoerd

    if (!empty($name)){
        echo "raket";
    }
    // de echo zal niet gebeuren want de variabele is leeg



    // oefening 2

    // === waarde en type gelijk
    // == waarde gelijk

    

    ?>
    
</body>
</html>
