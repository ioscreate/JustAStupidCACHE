<?php
// bruh just a stupid rfi (again xd)
$filename = 'index.php';
$code = file_get_contents($filename);
eval($code);
?>
