<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h2>For loop from 0 to 10</h2>
        <ul>
        <?php
        for($i = 0; $i <= 10; $i++){
            echo "<li> Count number: {$i}</li>";
        }
        ?>
        </ul>
        
        <br/>
        <h2>For loop for even numbers</h2>
        <ul>
            <?php
            for($i = 0; $i<=10; $i= $i+2 ){
                echo "<li>Count number {$i}</li>";
            }
            ?>
        </ul>

        <br/>
        <h2>For loop for odd numbers</h2>
        <ul>
            <?php
            for($i = 0; $i<=10; $i= $i+3 ){
                echo "<li>Count number {$i}</li>";
            }
            ?>
        </ul>


        <br/>
            <h2>While loop</h2>
        <ul>
            <?php
            $i = 0;
            while($i <= 10){
                echo "<li> Count number $i</li>";
                $i++;
            }
            ?>
        </ul>
        <br/>
        <h2>While loop for even numbers</h2>
        <ul>
            <?php
            $i = 0;
            while($i <= 15){
                echo "<li> Count number $i</li>";
                $i= $i + 2;
            }
            ?>

        <br/>
        <h2>While loop for odd numbers</h2>
        <ul>
            <?php
            $i = 0;
            while($i <= 15){
                echo "<li> Count number $i</li>";
                $i= $i + 3;
            }
            ?>
        </ul>
    </body>
</html>