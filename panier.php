<?php

require 'inc/head.php';

session_start();


?>
<html>
<head>
    <title>Le total du panier</title>
</head>
<body>
<p align="center">Le total de votre panier: <?echo $total?> E.</p>

<p align="center"><a href="cookie_ajout.php">Modifier mon panier</a></p>
<p align="center"><a href="cookie_init.php">Vider mon panier</a></p>
</body>
</html>