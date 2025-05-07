<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h1>Welcome to encoding</h1>
        <?php
        $urltext="<Open> Contact Us"; 
        $name="Mostafa & Osama";
        ?>
        <a href="contactus.php?id=110&name=<?php echo urlencode($name) ?>&age=25">
            <?php echo htmlspecialchars($urltext);?> </a>
    </body>
</html>