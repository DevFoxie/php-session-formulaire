<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>6ème page</title>
</head>
<body>

<h1>Bienvenue sur la 6ème page</h1>

<?php 
echo "Dirigez vous vers l'étage : ". htmlspecialchars($_GET['building'])." <br> Dans la chambre numéro : ". htmlspecialchars($_GET['room']);
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