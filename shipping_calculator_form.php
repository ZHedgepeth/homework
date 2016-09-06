<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <title>Shipping Calculator!</title>
</head>
<body>
    <div class="container">
        <h1>Fill in weight of the package and the distance to be shipped to calculate the cost to ship it...</h1>

        <form action="shipping_calculator_display.php" method="get">
            <div class="form-group">
                <label for="weight">Weight of package in lbs</label>
                <input id="weight" name="weight" class="form-control" type="number">
            </div>
            <div class="form-group">
                <label for="distance">Distance to travel in miles</label>
                <input id="distance" name="distance" class="form-control" type="number">
            </div>
            <button type="submit" class="btn">Go!</button>
        </form>

    </div>
</body>
</html>
