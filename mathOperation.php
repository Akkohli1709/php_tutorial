<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <?php
            echo "Absolute: ".abs(-123)."<br>";
            echo "Square root: ".sqrt(34)."<br>";
            echo "Round off: ".round(1.245776,3)."<br>";
            echo "Random: ".rand(1,100)."<br>";
            echo "Max: ".max(11,14,1,3,18)."<br>";
            echo "Min: ".min(11,14,1,3,18)."<br>";
            echo "Ceil: ".ceil(18.555)."<br>";
            echo "Floor: ".floor(18.555)."<br>";
            echo "Power: ".pow(18,2)."<br>";

        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>