<?php
require_once("vendor/autoload.php");

use geylian\html;
use geylian\materialize\Collection;
use geylian\materialize\Container;
use geylian\github\GitHub;
use \Curl\Curl;

//$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv = Dotenv\Dotenv::create(__DIR__); //static method
$dotenv->load(); //packages laden + variablen aanmaken
//--> .env file uitlezen , variablen aanmaken,...

// $curl = new Curl();
// $curl->setBasicAuthentication(getenv('GITHUB_TOKEN'));
// $curl->get('https://api.github.com/user/repos'); --> verplaatst naar github class
// var_dump($curl->response);


$github = new GitHub(getenv('GITHUB_TOKEN'));
//$repos = $github->getReposCurl();

//var_dump($repos);
$repos = [];
foreach ($github->getReposCurl() as $repo) {
    $repos[$repo->full_name] = $repo->html_url;
}




$container = new Container(
    new Collection('Github Repositories', $repos)
);
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
            echo $container;
    ?>

</body>
</html>