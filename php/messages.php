<?php
include_once("config.php");

if(isset($_POST['send'])){
    $outgoing = mysqli_real_escape_string($conn, $_POST['outgoing']);
    $incoming = mysqli_real_escape_string($conn, $_POST['incoming']);
    $messages = mysqli_real_escape_string($conn, $_POST['typingField']);

    $saveMsgQuery = "INSERT INTO `messages` (outgoing,incoming,messages)
    VALUES('$outgoing','$incoming', '$messages')";
    $runSaveQuery = mysqli_query($conn, $saveMsgQuery);
    
    if(!$runSaveQuery){
        echo "query Failed";
    }

}
?>