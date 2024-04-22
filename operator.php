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
        <h3>Arithmatics operators</h3>
        <?php
            $i = 10;
            $j = 2;
            echo'<p>Addition: '.$i + $j.'</p>'; // Addition
            echo '<p>Subtraction: '.$i - $j.'</p>'; // subtraction
            echo '<p>Multiplication: '.$i * $j.'</p>'; // Multiplication
            echo '<p>Division: '.$i / $j.'</p>'; // Division
            echo '<p>Modulo: '.$i % $j.'</p>'; // Modulus
        ?>
        <h3>Assignment Operator</h3>
        <?php
            $i = 10;
            $j = 2;
            $i + $j; // Add AND Assign $i = $i + $j;
            $i - $j; // subtraction AND Assign $i = $i + $j;
            $i * $j; // Multiplication AND Assign $i = $i + $j;
            $i / $j; // Division AND Assign $i = $i + $j;
            $i % $j; // Modulus AND Assign $i = $i + $j;
        ?>
        <h3>Comparison Operator</h3>
        <?php
            $i = 100;
            $j = 10;
            // == "Equal" checks if the value is equal 
            // === "identical" checks if the value is equal and data type
            // <> "equal" 
            // != "Equal" checks if the value is equal
            // !== "identical" checks if the value is equal and data type 
            // < less 
            // > greater
            // <= less than and equal to 
            // >= greater than and equal to 
        ?>
        <h3>Increment and decrement Operator</h3>
        <?php
            $i = 100;
            
            echo'<p>pre Increment: </p>';
            echo $i++."<br>";
            echo $i;
            echo'<p>post Increment: </p>';
            echo ++$i."<br>";
            echo $i;
        ?>
        <h3>logical Operator</h3>
        <?php
            $i = 100;
            $j = 15;
            // and && = And operator 
            // or || = OR operator
            // '!' = Not Operator
        ?>
        <h3>string Operator</h3>
        <?php
           $string1 = "hello world";
           $string2 = "How are you";
           echo $string1.$string2;
           echo $string1.=$string2;

        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>