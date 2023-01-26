<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5ème page</title>
</head>
<body>

<h1>Bienvenue sur la 5ème page</h1>

<?php 
echo "Voici le nombre de semaines : ". htmlspecialchars($_GET['week']);
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