<?php
session_start();
include('../../controller/config.php');
$_SESSION['login'] == "";
session_unset();
session_destroy();
header('Location: ../');
