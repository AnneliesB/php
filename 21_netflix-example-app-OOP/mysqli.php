<?php
    $conn = new mysqli("localhost", "root", "root", "openbeers");
    if( $conn->connect_errno ) {
        die("Database is gone.");
    }

    $query = "select * from breweries;";
    $result = $conn->query($query);

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Breweries</h1>

    <?php while( $b = $result->fetch_assoc() ): ?>
    <h4><a href="brewery.php?id=<?php echo $b['id']; ?>"><?php echo $b['name']; ?></a></h4>
    <?php endwhile; ?>
</body>
</html>