<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h4>strlen()</h4>
        <?php
            $string = "this is sample sentence for string functionality";
            echo strlen($string);
        ?>
        <hr>
        <h4>str_word_count()</h4>
        <?php
            $string = "this is sample sentence for string functionality";
            echo str_word_count($string);
        ?>
        <hr>
        <h4>str_replace()</h4>
        <?php
            $string = "this is sample sentence for string functionality";
            echo str_replace('sample','simple',$string);
        ?>
        <hr>
        <h4>strrev()</h4>
        <?php
            $string = "this is sample sentence for string functionality";
            echo strrev($string);
        ?>
        <hr>
        <h4>strpos()</h4>
        <?php
            $string = "this is sample sentence for string functionality";
            echo strpos($string,'is');
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>