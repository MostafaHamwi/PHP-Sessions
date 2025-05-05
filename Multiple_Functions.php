<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php 

        function operations($n1,$n2){
            $list=array();
            $list[]=$n1+$n2;
            $list[]=$n1-$n2;
            $list[]=$n1/$n2;
            $list[]=$n1*$n2;
            return $list;
        }
        $result=operations(62,48);
         echo print_r($result);
         echo "<br/>Sum:{$result[0]}";
         echo "<br/>Sub:{$result[1]}";
         echo "<br/>Div:{$result[2]}";
         echo "<br/>Mul:{$result[3]}";
        ?>
    </body>
</html>