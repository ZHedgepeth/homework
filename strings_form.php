<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <title>String Repeating</title>
</head>
<body>
    <div class="container">
        <h1>Hi! Im going to do some stuff to the strings you enter!</h1>
        <form action="strings_display.php">
            <div class="form-group">
                <label for="uppercase">Enter something to return in upper case!</label>
                <input id="uppercase" name="uppercase" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="word_count">Enter a second sentence and find out how many words are in it</label>
                <input id="word_count" name="word_count" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="word_shuffle">Enter a third phrase to shuffle</label>
                <input id="word_shuffle" name="word_shuffle" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="word_find">Find out the first time you use 'you', or 'fudge'...if ever</label>
                <input id="word_find" name="word_find" class="form-control" type="text">
            </div>
            <button type="submit" class="btn-success">Submit</button>
        </form>
    </div>
</body>
</html>
