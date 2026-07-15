<?php

session_start();

session_destroy();

// REDIRECCIONAR AL LOGIN

header("Location: login.php");

exit();

?>