<?php
    $weight = $_GET["weight"];
    $distance = $_GET["distance"];
    $solution = 4 + (($weight * $distance) - $distance);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Cost to ship your package</title>
</head>
<body>
    <h1>Thank you for choosing Zach's shipping company!</h1>
    <p>With a weight of  <?php echo $weight; ?> and <?php echo $distance; ?> miles to be shipped, your cost to ship will be: </p>
    <p>$<?php echo $solution; ?>.00</p>
</body>
</html>
