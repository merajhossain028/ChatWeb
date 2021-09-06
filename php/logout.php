<?php
include_once("login.php");
$statusOffline = "Offline";
$logoutQuery = "UPDATE `users` SET status = '{$statusOffline}' WHERE id = '{$_SESSION["id"]}'";
$runLogoutQuery = mysqli_query($conn, $logoutQuery);

if($runLogoutQuery){
    session_start();
    session_unset($_SESSION["id"]);
    session_destroy();
    header("location: ../login.php");
}
?>