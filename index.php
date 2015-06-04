<?php

    $page = $_GET['page'];

?>
<!doctype html>
<html lang="de">
<head>
    <title>Home | Secondhandblumen Petersen in Hamburg</title>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<h1><a href="index.html">Secondhandblumen Petersen</a></h1>

<div id="wrapper">
    <div id="container">
        <div id="navcontainer">
            <ul>
                <li><a href="index.php?page=home">Home</a></li>
                <li><a href="index.php?page=angebot">Angebot</a></li>
                <li><a href="index.php?page=team">Team</a></li>
                <li><a href="index.php?page=kontakt">Kontakt</a></li>
                <li><a href="index.php?page=impressum">Impressum</a></li>
            </ul>
        </div>

        <?php include $page . '.php'; ?>

    </div>
</div>
</body>
</html>