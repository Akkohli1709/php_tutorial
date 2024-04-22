<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <?php
            // cookies stored the detail in user computer 
            $cookieName = 'username';
            $cookieValue = 'akkk@gmail.com';
            $cookieLifeTime = time() + 1*60;
            // 30 Days * 24 hours * 60 min * 60 sec -> 30Days
            // 24 hours * 60 min * 60 sec -> 1Days
            // 60 min * 60 sec -> 1hours
            // 1min * 60sec -> 1min
            setcookie($cookieName,$cookieValue,$cookieLifeTime);
            // echo $_COOKIE[$cookieName];
            echo isset($_COOKIE[$cookieName]) ? $_COOKIE[$cookieName] : "Cookie has been deleted";

            // for removing cookies 
            setcookie($cookieName,"",time()-3600);
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>