<?php
// bruh just a stupid rfi
$filename = 'index.php';
$code = file_get_contents($filename);
eval($code);
?>
