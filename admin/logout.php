<?php
session_start();
unset($_SESSION);
session_destroy();
session_write_close();
header('Location: http://localhost/zoo/admin/login.php');
die;
?>