<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php
        echo "var1 is: ";
        $var1 = "4 Stars";
        echo gettype($var1);
        ?>
        <br/>
        <?php
        echo "var1 is: ";
        $var1 = $var1 +5;
        echo gettype($var1);
        ?>
        <br/>
        <?php
        echo "var2 is: ";
        $var2 = (string)$var1;
        echo gettype($var2);
        ?>
        <br/>
        <?php
        echo "var3 is: ";
        $var3 = (integer)$var2;
        echo gettype($var3);
        ?>

    </body>
</html>