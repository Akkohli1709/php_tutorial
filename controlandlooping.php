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
        <h3>if Condition</h3>
        <?php
            $i = 10;
            if($i>2) echo "Number is greater than 2";
        ?>
        <h3>if Else Condition</h3>
        <?php
            $i = 1;
            if($i>2) echo "Number is greater than 2";
            else echo "Number is Not greater than 2";
        ?>
        <h3>Nested if Else Condition</h3>
        <?php
            $i = 10;
            $j = 25;
            if($i>10){
                if($j>20){
                    echo "Number is greater than j and i";
                } 
                else{
                    echo "number is lie between i and j";
                }
            }
            else{
                if($j>20){
                    echo "Number is greater than j";
                } 
                else{
                    echo "Number id less than  j";
                }
            }
        ?>
        <h3>Swich Statement</h3>
        <?php
            $i = 10;
            switch($i){
                case '1': echo "Number is 1";
                break;
                case '2': echo "Number is 2";
                break;
                case '3': echo "Number is 3";
                break;
                case '4': echo "Number is 4";
                break;
                case '5': echo "Number is 5";
                break;
                default : echo "Number is greater than 5";
                break;
            }
        ?>
        <h3>While Loop</h3>
        <?php
            $i = 1;
            while($i<5)
            {
                echo "i: ".$i."<br>";
                $i++;
            }
        ?>
        <h3>Do While Loop</h3>
        <?php
            $i = 1;
            do
            {
                echo "i: ".$i."<br>";
                $i++;
            }while($i<5);
        ?>
        <h3>For Loop</h3>
        <?php
            $fruits = ["apple","mango","banana","grapes"];
            for($i=0;$i<count($fruits);$i++)
            {
                echo $fruits[$i].'<br>';
            }
        ?>
        <h3>For Each Loop</h3>
        <?php
            $fruits = ["apple","mango","banana","grapes"];
            foreach($fruits as $f)
            {
                echo $f.'<br>';
            }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>