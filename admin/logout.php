
<?php
session_start();
unset($_SESSION['check_session']);
session_destroy();
header('location:login.php');
exit;

?>