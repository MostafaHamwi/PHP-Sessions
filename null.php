<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php
        $variable1 = "Mostafa";
        $variable2 = null;
        $variable3 = "";
        ?>
        <h1>For null and set</h1>
        <br/>
        <?php echo "is variable1 null?:" . is_null($variable1); ?>
        <br/>
        <?php echo "is variable2 null?:" . is_null($variable2); ?>
        <br/>
        <?php echo "is variable3 null?:" . is_null($variable3); ?>
        <br/>
        <?php echo "is variable4 null?:" . is_null($variable4); ?>
        <br/>
        
        <?php echo "is variable1 set?:" . isset($variable1); ?>
        <br/>
        <?php echo "is variable2 set?:" . isset($variable2); ?>
        <br/>
        <?php echo "is variable3 set?:" . isset($variable3); ?>
        <br/>
        <?php echo "is variable4 set?:" . isset($variable4); ?>
        <br/>
        
        <h1> Boolean </h1>
        <?php
        $proof = false;
        echo "Is the proof correct?: " . is_bool($proof);
        echo "<br/>";
        $notproff = 232;
        echo "Is the proof correct?: " . is_bool($notproff);
        ?>
        <br/> 
        <h1> Float </h1>
        <?php
        $number = 3.87;
        echo "Is it float?: " . is_float($number);
        echo "<br/>";
        $numbers = 45;
        echo "Is it float?: " . is_float($numbers);
        ?>
    </body>
</html>
