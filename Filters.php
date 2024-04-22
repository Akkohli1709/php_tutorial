<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filters</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <?php
            $htmlString = "<b>Hello world</b>";
            echo $htmlString."<br>";
            $htmlSanitizeString = filter_var($htmlString,FILTER_SANITIZE_STRING);
            echo $htmlSanitizeString."<br>";

            $integer = 10;
            if(filter_var($integer,FILTER_VALIDATE_INT)){
                echo $integer." is a integer<br>";
            }else{
                echo $integer." is not a integer<br>";
            }

            filter_var($integer,FILTER_VALIDATE_IP);
            filter_var($integer,FILTER_SANITIZE_EMAIL);
            filter_var($integer,FILTER_SANITIZE_URL);
            filter_var($integer,FILTER_VALIDATE_URL);
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>