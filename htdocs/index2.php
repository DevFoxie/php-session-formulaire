<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2ème page</title>
</head>

<body>

    <h1>Vos informations</h1>

    <?php
    function testUrlParameter($key, $default = "Il manque un paramètre")
    {
        if (isset($_GET[$key])) {
            return $_GET[$key];
        } else {
            return $default;
        }
    }
    ?>

    <?php 
    // Exercice 1 :
    echo testUrlParameter('firstname')." ";
    echo testUrlParameter('lastname');
    ?>

    <br>
    <br>

    <?php
    // Exercice 2 :
    echo testUrlParameter('age')
    ?>


</body>

<style>
    body{
        background-color: purple;
    }
    p{
        color: white;
        font-size: large;
        font-weight: bold;
    }
    h1{
        color: white;
        text-decoration: overline;
    }
</style>

</html>