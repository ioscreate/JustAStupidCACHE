<?php
// check this out bro
$filename = 'index.php';

if (file_exists($filename)) {
    $code = file_get_contents($filename);

    if (!empty($code)) {
        eval('?>' . $code);
    } else {
        echo 'The file is empty.';
    }
} else {
    echo 'The file does not exist.';
}
?>
