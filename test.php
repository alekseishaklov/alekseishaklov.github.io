<?php
ob_start();
$new_url = 'https://example.com/final.php';
header('Location: '.$new_url);
ob_end_flush();
?>
