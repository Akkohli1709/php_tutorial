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
            class BluePrint{
                public $length = 0;
                public $width = 0;
                public $paint = '';
                public $noOfDoor = 0;
                public $noOfWindow = 0;
                // Constructor
                public function __construct(){
                    echo "Constructor Call";
                    
                }
                public function getBuildUpArea(){
                    return ($this->length*$this->width);
                }
                public function paint(){
                    return $this->paint;
                }
                public function totalDoors(){
                    return $this->noOfDoor;
                }
                public function totalWindows(){
                    return $this->noOfWindow;
                }
                // Destructor
                public function __destruct(){
                    echo "Destructor Call<br>";
                }
            }

            $house1 = new BluePrint;
            $house1->length = 30;
            $house1->width = 40;
            $house1->paint = 'Yellow';
            $house1->noOfDoor = 3;
            $house1->noOfWindow = 6;

            echo "<br>Area of House1 : ".$house1->getBuildUpArea();
            echo "<br>Paint of House1 : ".$house1->paint();
            echo "<br>Total Doors of House1 : ".$house1->totalDoors();
            echo "<br>Total Windows of House1 : ".$house1->totalWindows();
            echo "<br><br><hr><br>";
            
            $house2 = new BluePrint;
            $house2->length = 20;
            $house2->width = 40;
            $house2->paint = 'Red';
            $house2->noOfDoor = 2;
            $house2->noOfWindow = 2;

            echo "<br>Area of House1 : ".$house2->getBuildUpArea();
            echo "<br>Paint of House1 : ".$house2->paint();
            echo "<br>Total Doors of House1 : ".$house2->totalDoors();
            echo "<br>Total Windows of House1 : ".$house2->totalWindows();
            echo "<br><br><hr><br>";

            class student{
                public $name;
                protected $rollno;
                private $age;
            }
            class individual extends student{
                public function __construct(){
                    echo "We created ".__CLASS__." and initialize it<br>";
                }
            }

            $sample = new individual;


            ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>