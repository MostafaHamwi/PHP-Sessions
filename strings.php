<!DOCTYPE html>
<html>
<head>
</head>
<body>
 
 <?php
$name="Mostafa Hamwi";
$brief="works as php in backend";

echo $name .", ". $brief;

$info=$name .",". $brief;
echo "<br/>";
echo "To upper:". strtoupper($info);
echo "<br/>";
echo "To lower:". strtolower($info);
echo "<br/>";
echo "Trim:". trim(" Ri ya dh  "). " best city" ;
echo "<br/>";
echo "replace:". str_replace("in", "on", $brief);
echo "<br/>";
echo $info;
 ?>


</body>
</html>