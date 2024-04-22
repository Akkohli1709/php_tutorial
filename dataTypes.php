<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <?php
            echo "<h3>Integer</h3>";

            $i = 10;
            var_dump($i); echo "<br>";
            $j = -120; 
            var_dump($j); echo "<br>";
            $k = 0x2A;
            var_dump($k); echo "<br>";

            echo "<hr>";
            echo "<h3>Integer</h3>";

            $a = 1.23;
            var_dump($a); echo "<br>";
            $b = 7.8e4; 
            var_dump($b); echo "<br>";
            $c = -7E5;
            var_dump($c); echo "<br>";

            echo "<hr>";
            echo "<h3>String</h3>";
            $x = "Hello World";
            var_dump($x); echo "<br>";

            echo "<hr>";
            echo "<h3>Boolean</h3>";
            $y = true; 
            var_dump($y); echo "<br>";

            echo "<hr>";
            echo "<h3>Arrays</h3>";
            $car = ["audi","BMW","mercedes"];
            var_dump($car); echo "<br>";
            $pricecar = array(
                'audi' => 25000,
                'BMW' => 14500,
                'mercedes' => 35000
            );
            var_dump($pricecar); echo "<br>";
        ?>
        <hr>
        <h3>Object</h3>
        <?php
            class student
            {
                public $student_name = "Rakesh";

                function show_student_name(){
                    return $this->student_name;
                }
            }

            $student = new student;
            var_dump($student);
            echo "<br>";
        ?>
        <hr>
        <h3>NULL</h3>
        <?php
            $var = NULL;
            var_dump($var);
            echo "<br>";
        ?>
        <hr>
        <h3>Resources</h3>
        <?php
            $fileHandler = fopen("trial.txt","r");
            var_dump($fileHandler);
            echo "<br>";
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>