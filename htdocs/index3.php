<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3ème page</title>
</head>
<body>

<h1>Bienvenue sur la 3ème page</h1>

<?php
$verifParamArray = array('startDate', 'endDate');
$allParamsExist = true;
foreach ($verifParamArray as $param) {
    if (!isset($_GET[$param])) {
        echo "<br> <p class=textexo> Le paramètre '$param' est manquant dans l'URL";
        $allParamsExist = false;
        break;
    }
}
if ($allParamsExist) {
    echo " <br> <p class=textexo> La période sélectionnée est : " . $_GET['startDate'] . " à " . $_GET['endDate'];
}
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