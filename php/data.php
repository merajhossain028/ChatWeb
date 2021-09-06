<?php
// include config file
include_once("config.php");

while($row = mysqli_fetch_assoc($query)){
// show last message send
$outgoing = $_SESSION['id'];
$incoming = $row['id'];
$sql = "SELECT * FROM `messages` WHERE (incoming = '{$incoming}' AND outgoing = '{$outgoing}') OR (incoming = '{$outgoing}' AND outgoing = '{$incoming}') ORDER BY messages_id DESC LIMIT 1";

$runSQL = mysqli_query($conn, $sql);

if($runSQL){
    $row2 = mysqli_fetch_assoc($runSQL);
    if(mysqli_num_rows($runSQL) > 0){
        $lastMessage = $row2['messages'];
    }else{
        $lastMessage = "No messages available";
    }
}else{
    echo "Query Failed";
}

// show status online or offine
if($row['status'] == "Online"){
    $status = "online";
}else{
    $status = "offline";
}
// show Online users
    $onlineUsers = '<a href="messages.php?userid='.$row["id"].'">
    <div class="profile">
        <!-- profile image -->
        <div class="image">
            <img src="images/'.$row["image"].'" alt="">
        </div>
        <!-- name -->
        <h2 class="name">'.$row["firstName"]." ".$row["lastName"].'</h2>
        <!-- last message -->
        <p class="lastMessage">'.$lastMessage.'</p>
        <!-- status => Online or Offline -->
        <div class="status '.$status.'"></div>
    </div>
</a>';
echo $onlineUsers;
};
