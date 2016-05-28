<?php

    $page = $_GET['page'];

?>
<!doctype html>
<html lang="de">
<head>
    <title><?php echo $page; ?> | Secondhandblumen Petersen in Hamburg</title>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<h1><a href="index.php?page=home">Secondhandblumen Petersen</a></h1>

<div id="wrapper">
    <div id="container">
        <div id="navcontainer">
            <ul>
            <?php $AllFiles = scandir("."); // get list of available files in current directory
              foreach ($AllFiles as $CurrentFile) // loop through all those file names
              {
                if ($CurrentFile<>"index.php") // should not make a navigation entry for index.php
                {
                  if (strrchr($CurrentFile,'.')==".php") // is the current file a php file then we use it as a navigation item
                  {
                    $CurrentFile=substr($CurrentFile, 0, (strlen ($CurrentFile)) - (strlen (strrchr($CurrentFile,'.')))); // remove file extension (.php)
                    echo "<li><a href=\"index.php?page=$CurrentFile\">$CurrentFile</a></li>";
                  }
                }
              }
            ?>
            </ul>
        </div>

        <?php include $page . '.php'; ?>

    </div>
</div>
</body>
</html>
