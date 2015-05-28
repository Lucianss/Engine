<?php
unlink('install/index.php');
unlink('install/style.css');
unlink('remove.php');
rmdir('install');
header("Location: index.php");
?>
