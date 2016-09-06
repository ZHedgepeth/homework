<?php
    $uppercase = $_GET["uppercase"];
    $word_count = $_GET["word_count"];
    $word_shuffle = $_GET["word_shuffle"];
    $word_find = $_GET["word_find"];
    $uppercase_string = strtoUpper($uppercase);
    $word_amount = str_word_count($word_count);
    $word_shuffler = str_shuffle($word_shuffle);
    $word_find_pos = stripos($word_find, "you");
?>
<html>
<head>
    <title>Four String Fu</title>
</head>
<body>
    <h3>Heres the first string in uppercase!</h3>
    <p><?php echo $uppercase_string; ?> </p>
    <h3>Heres the amount of words in the second string!</h3>
    <p><?php echo $word_amount; ?> </p>
    <h3>This is the third sentence shuffled up!</h3>
    <p><?php echo $word_shuffler; ?> </p>
    <h3>When did you use you?!</h3>
    <p><?php echo $word_find_pos; ?> </p>
</body>
</html>
