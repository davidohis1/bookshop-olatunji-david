<?php

require 'connect.php';

$_SESSION = [];
session_destroy();
session_unset();
header("Location: login2.php");

?>