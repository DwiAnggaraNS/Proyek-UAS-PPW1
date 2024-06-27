<?php
session_start();
session_destroy();

// Clear cookies by setting expiration time in the past
setcookie("user_id", "", time() - 3600, "/");
setcookie("user_email", "", time() - 3600, "/");
setcookie("log", "", time() - 3600, "/");

header('Location: landingpage.html');
exit();
?>
