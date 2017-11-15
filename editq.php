<?php
session_start();
$idp = $_REQUEST["hidden"];
$_SESSION['idp'] = $idp;
header('location: cuestionario.php');
?>