<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php
        

        sum(43,12);
        sum(-47,100);
        sum(9.2,12);

        $results=div(10,5);
        echo "Div:{$results} <br/>";


            function sum($n1,$n2){
                $sum= $n1 + $n2;
                echo "Sum: {$sum} <br/>";
            }
            
        
        function div($n1,$n2){
            $sum = $n1/$n2;
            return $sum;
        }
        
        function Display(){
            echo "<br/> Welcome to void functions<br/>";
        }
        Display()
        ?>
        




    </body>
</html>