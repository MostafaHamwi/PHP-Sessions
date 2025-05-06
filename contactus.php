<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h1>Welcome to Contact Us Page</h1>
        <?php
        print_r($_GET);
        ?>
        <br/>

        <?php
        echo "ID: " . $_GET['id'];
        echo "<br/>";
        echo "Name: " . $_GET['name'];
        echo "<br/>";
        echo "Age: " . $_GET['age'];
        ?>
    </body>
</html>