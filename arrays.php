<DOCTYPE html>
    <html>
        <head></head>
        <body>
            <?php
            $FirstArray = array(1,2,3,4,5);
            echo "First Array[3]: " . $FirstArray[3];
            echo "<br/>";
            echo  print_r($FirstArray);
            echo "<br/>";
            echo "Change element in [3] to 456: ";
            echo "<br/>";
            echo "First Array [3] is: " . $FirstArray[3] = 456;
            echo "<br/>";
            echo  print_r($FirstArray);
            echo "<br/>";
            echo "Change [4] to 364: ";
            echo $FirstArray[4] = 364;
            echo "<br/>";
            echo "Add new element to the array: ";
            echo $FirstArray[] = 123;
            echo "<br/>";
            echo print_r($FirstArray);
            echo "<br/>";
            echo "Element [3]: " . $FirstArray[3] . " add to Element [5]: " . $FirstArray[5] . " equals to " . ":" . ($FirstArray[3] + $FirstArray[5]); 
            echo "<br/>";
            $SecondArray = array(213,4332,76,array(1.5,"Mostafa",32));
            echo $SecondArray[3][1];
            ?>


        </body>
        </html>