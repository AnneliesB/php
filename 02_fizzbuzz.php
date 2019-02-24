<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FizzBuzz</title>
</head>
<body>
    <?php 


        for($number = 1; $number<=100; $number++){
            if($number%3 == 0 && $number%5 == 0){
                echo $number . " FizzBuzz";
            } else  if ($number%3 == 0 ){
                echo $number . " Fizz";
            } else if ($number%5 == 0){
                echo $number . " Buzz";
            } else {
                echo $number;
            }
            echo "<br>";
    }

    ?>
</body>
</html>