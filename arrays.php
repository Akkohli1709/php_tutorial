<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <?php
            $array1 = [];
            echo var_dump($array1);
            echo "<br>";
            $array2 = array();
            echo gettype($array2);
            echo "<br>";
            $car1 = ["audi","BMW","mercedes"];
            echo var_dump($car1);
            echo "<br>";
            $car2 = array("audi","BMW","mercedes");
            echo gettype($car2);
            echo "<br>";

            // Associative array
            $pricecar = array(
                'audi' => 25000,
                'BMW' => 14500,
                'mercedes' => 35000
            );

            foreach($pricecar as $key=>$value)
            {
                echo $key.' car price is '.$value.'<br>';
            }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>