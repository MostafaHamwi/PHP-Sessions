<!DOCTYPE html>
<html>
    <head></head>
    <body>

    
        <?php
        function string($firstname,$secondname,$lastname){
            $string = $firstname . " " . $secondname . " " . $lastname;
            return $string;
            echo "<br/>";

        }
        $fullname = string("Mostafa","Husain","Alhamwi");
        echo "My fullname is: {$fullname}";
        ?>
        
          


    
    </body>
</html>