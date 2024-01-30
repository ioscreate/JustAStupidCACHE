<?php
$filename = 'index.php'; // u can replace by your target file name :o
// rfi v2 lol 
if (file_exists($filename)) {
    $code = file_get_contents($filename);
    if (!empty($code)) {
        eval('?>' . $code . '<?php ');
    } else {
        echo 'this file is empty bro';
    }
} else {
    echo 'bro check if it exists';
}
?>
