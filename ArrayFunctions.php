<DOCTYPE html>
    <html>
        <head></head>
        <body>
        <?php
          $list = array(43,34,91,27,153,21,15,5);
        echo print_r($list);
        ?>
        <br/>

        <?php echo "max number in array: " . max($list); ?>
        <br/>
        <?php echo "min number in array: " . min($list); ?>
        <br/>
        <?php echo "count of array: " . count($list); ?>
        <br/>
        <?php echo "order of array: " . sort($list); echo print_r($list); ?>
        <br/>
        <?php echo "reverse order of array" . rsort($list); echo print_r($list); ?>
        <br/>
        <?php echo "Is 5 in array?: " . in_array(5, $list); ?>
        <br/>
        <?php echo "Is 100 in array?: " . in_array(100, $list); ?> 
        </body>
        </html>