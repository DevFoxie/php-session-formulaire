<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4ème page</title>
</head>
<body>
    <h1>Bienvenue sur la 4ème page !</h1>
    
</body>

<?php 
echo "Mon langage de programmation favori est : ". htmlspecialchars($_GET['language']);
?>

<br>
<br>

<?php 
echo "Le serveur que j'utilise est : ". htmlspecialchars($_GET['server']);
?>



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