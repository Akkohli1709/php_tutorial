<?php
    require 'objects.php';
    class newpaint extends BluePrint{
        public function newpaint(){
            return $this->paint = 'Black';
        }
    }
    $house3 = new newpaint;
    $house3->length = 30;
    $house3->width = 40;
    $house3->paint = 'Yellow';
    $house3->noOfDoor = 3;
    $house3->noOfWindow = 6;

    echo "<br>Area of House3 : ".$house3->getBuildUpArea();
    echo "<br>Total Doors of House3 : ".$house3->totalDoors();
    echo "<br>Total Windows of House3 : ".$house3->totalWindows();
    echo "<br>Old Paint of House3 : ".$house3->paint();
    echo "<br>New Paint of House3 : ".$house3->newpaint();
    echo "<br><br><hr><br>";
?>