<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../htdocs/css/custom.css">
    <title>1ère page</title>
</head>

<body>

    <h1>PHP session et formulaire</h1>

    <a href="index2.php?lastname=Nemare&firstname=Jean">vers la 2ème page</a>
    <br>
    <a href="index3.php?startDate=2/05/2016&endDate=27/11/2016">vers la 3ème page</a>
    <br>
    <a href="index4.php?language=PHP&server=LAMP">vers la 4ème page</a>
    <br>
    <a href="index5.php?week=12">vers la 5ème page</a>
    <br>
    <a href="index6.php?building=12&room=101">vers la 6ème page</a>

    <div class="picture">
        <img src="https://www.freepnglogos.com/uploads/php-logo-png/php-logo-php-elephant-logo-vectors-download-5.png" classe="php" alt="php">
    </div>

</body>

<style>
  body {
    background-color: black;
}

h1 {
    color: white;
    display: flex;
    justify-content: center;
}

a {
    color: magenta;
    display: flex;
    justify-content: center;
}

a:hover {
    color: greenyellow;
}
img{
    margin-top: 100px;
    margin-left: 35%;
}

</style>

</html>