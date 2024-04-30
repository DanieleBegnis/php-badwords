<?php
$text = $_GET['text'];
$word = $_GET['word'];
$length = strlen($text);
$newText = str_replace($word, '***', $text);
$newLength = strlen($newText);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php var_dump($text) ?>
    <h2> testo inserito non censurato:
        <?php echo $text; ?>
    </h2>
    <h3>la stringa è lunga <?php echo $length; ?> caratteri</h3>

    <h2> testo inserito censurato:
        <?php echo $newText; ?>
    </h2>
    <h3>la stringa censurata è lunga <?php echo $newLength; ?> caratteri</h3>
</body>

</html>