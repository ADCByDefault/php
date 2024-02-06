<!DOCTYPE html>
<?php
require_once("Autoveicolo.php");
$v1 = new Autoveicolo("audi", "2019", "r6");

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    echo $v1->__toString();
    ?>
</body>

</html>