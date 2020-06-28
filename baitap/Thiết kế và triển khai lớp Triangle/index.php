<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <input name="color" type="text" placeholder="color"/>
    <input name="side1" type="number" placeholder="side1"/>
    <input name="side2" type="number" placeholder="side3"/>
    <input name="side3" type="number" placeholder="side3"/>
    <input name="submit" type="submit">
</form>
<?php
include_once("Triangle.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$color = $_POST["color"];
$side1 = $_POST["side1"];
$side2 = $_POST["side2"];
$side3 = $_POST["side3"];
}
$triangle = new Triangle();
$triangle->setColor($color);
$triangle->setSide($side1,$side2,$side3);
echo $triangle->toString();


?>
</body>
</html>

<?php
