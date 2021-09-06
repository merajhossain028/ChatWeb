<?php
// configure your server
// 1=> server name
// 2=> username
// 3=> password
// 4=> database name

$conn = mysqli_connect("localhost","root","","liveChat");

if(!$conn){
    echo "Connection Failed";
}
?>