<?php
include_once("php/config.php");
session_start();
if (!isset($_SESSION['id'])) {
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
    <!-- css linked -->
    <link rel="stylesheet" href="css/messages.css">

    <!-- fontawesome CDN -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
    <div class="circle"></div>
    <div class="circle circle2"></div>
    <div id="container">
        <!-- header -->
        <div id="header">
            <a href="users.php">
                <!-- arrow icon -->
                <i class="fas fa-arrow-left"></i>
            </a>

            <?php
            $myid = $_SESSION['id'];
            // getting from messages url
            $userid = mysqli_real_escape_string($conn, $_GET['userid']);

            $headerQuery = "SELECT * FROM `users` WHERE id = '{$userid}'";
            $runHeaderQuery = mysqli_query($conn, $headerQuery);

            if (!$runHeaderQuery) {
                echo "Connection failed";
            } else {
                $info = mysqli_fetch_assoc($runHeaderQuery);
            ?>
                <!-- profile -->
                <div id="profileImage">
                    <img src="images/<?php echo $info['image']; ?>" alt="">
                </div>

                <!-- user Detail (name & status) -->
                <div id="userDetail">
                    <h3 id="name"><?php echo $info['firstName'] . " " . $info['lastName']; ?></h3>
                    <p id="status"><?php echo $info['status']; ?></p>
                </div>
        </div>
    <?php
            }
    ?>

    <!-- main section => messages section -->
    <div id="mainSection">
        <!-- incoming -->
        <!-- <div class="request incoming"> -->
            <!-- name -->
            <!-- <h3 class="name">Code Smacher</h3> -->
            <!-- incoming -->
            <!-- <p class="messages">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci excepturi sit officiis aliquid nesciunt explicabo maiores voluptates repellat nisi unde!</p>
        </div> -->

        <!-- outgoing -->
        <!-- <div class="responseCard outgoing">
            <div class="response"> -->
                <!-- name -->
                <!-- <h3 class="name">You</h3> -->
                <!-- outgoing message -->
                <!-- <p class="messages">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur veniam dolores nam unde! Quas fugit error veniam mollitia nam quisquam!</p>
            </div>
        </div> -->
    </div>

    <!-- input messages -->
    <form action="" id="typingArea">
    <div id="messagingTypingSection">
        <input type="text" name="outgoing" placeholder="Type Your Message Here." id="outgoing" class="setid" autocomplete="off" value="<?php echo $myid; ?>" hidden>
        <input type="text" name="incoming" placeholder="Type Your Message Here." id="incoming" class="setid" autocomplete="off" value="<?php echo $userid?>" hidden>
        <input type="text" name="typingField" placeholder="Type Your Message Here." id="typingField" autocomplete="off">
        <input type="submit" value="Send" id="sendMessage">
    </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="js/message.js"></script>
    <script src="js/showChat.js"></script>
</body>

</html>