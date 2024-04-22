<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <?php
            // Funtion with Parameter and with return statement 
            function divide($a,$b){
                $c = '';
                try{
                    $c = $a/$b;
                }catch(DivisionByZeroError $e){
                    echo "Exception is ".$e->getMessage()." on line ".$e->getLine()." on file ".$e->getFile();
                }
                return $c;
            }  
            // Function call 
            echo divide(10,0);
            echo "<br>";
            // Funtion with Parameter and with no return statement 
            function sum($a,$b){
                echo "sum: ".$a+$b;
            }  
            // Function call 
            echo sum(10,30);
            echo "<br>";
            
            // Funtion with no Parameter and with return statement 
            function greeting(){
                return "How are you ";
            }  
            // Function call 
            echo greeting();
            echo "<br>";

            // Funtion with no Parameter and with no return statement 
            function helloworld(){
                echo "how you doing ";
            }  
            // Function call 
            echo helloworld();
            echo "<br>";
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>