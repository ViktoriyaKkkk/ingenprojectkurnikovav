<?php
if (!isset($_GET['site'])) include 'moduls/home.php';
else include 'moduls/'.$_GET['site'].'.php';
?>
