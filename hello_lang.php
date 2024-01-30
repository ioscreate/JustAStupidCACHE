<?php
$filename = 'index.php';

if (file_exists($filename)) {
    highlight_file($filename);
} else {
    echo 'Le fichier n\'existe pas.';
}
?>
