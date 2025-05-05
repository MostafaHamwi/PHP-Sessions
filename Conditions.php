<!DOCTYPE html>
<head></head>
<html>
    <body>
        <h1>Simple IF Statement</h1>
    <?php
    $var1 = 15;
    $var2 = 25;
    if($var1>$var2)
    {
        echo "var1 is bigger than var2";
    }
    else{
        echo "var2 is bigger than var1";
    }
    ?>
        <h1>Complex IF statement</h1>
    <?php
    $num1 = 1;
    $num2 = 100;
    $input = 35;
    if(($input<=$num2)&&($input>=$num1))
    {
        echo "Input is within range of 1 to 100";
    }
    else{
        echo "input is out of range of 1 to 100";
    }
    ?>
    
    <br/>

    <?php
    $max = 250;
    $min = 1;
    $input1 = 252;
    if(($input1 >= $min) || ($input1 < $max))
    {
        echo "input is valid";
    }    
    else{
        echo "input is wrong";
    }
    ?>
    </body> 
</html>