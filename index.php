<?php
require_once("vendor/autoload.php");

use geylian\html;
use geylian\materialize\Collection;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Document</title>
</head>
<body>
    <?php
            $collection = new Collection(
                'Favorite websites',
                [
                    'github'=>'https://github.com/',
                    'tweakers'=>'https://tweakers.net/',
                    'youtube'=>'https://youtube.com/',
                    'materialize'=>'https://materializecss.com/'
                ]
            );

            echo $collection;
    ?>

</body>
</html>