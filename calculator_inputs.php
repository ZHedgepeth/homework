<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <title>Calculate things!</title>
</head>
<body>
    <div class="container">
        <h1>Fill in two numbers to add them together...</h1>

        <form action="calculator_results.php" method="get">
            <div class="form-group">
                <label for="first_number">First number</label>
                <input id="first_number" name="first_number" class="form-control" type="number">
            </div>
            <div class="form-group">
                <label for="second_number">Second number</label>
                <input id="second_number" name="second_number" class="form-control" type="number">
            </div>
            <button type="submit" class="btn">Go!</button>
        </form>

    </div>
</body>
</html>
