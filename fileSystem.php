<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Systems</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <?php
            // ? FILE READ
            // $file = fopen('trial.txt','r') or die('Failed to open the File');
            // var_dump($file);
            // echo fread($file,filesize('trial.txt'));
            // echo file_get_contents('trial.txt');
            // fclose($file);

            // ? FILE WRITE 
            $file = fopen('trial.txt','w') or die('Failed to open the File');
            // var_dump($file);
            $fileText = "Hello\t";
            fwrite($file, $fileText);
            $fileText = "world\t";
            fwrite($file, $fileText);
            fclose($file);
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>