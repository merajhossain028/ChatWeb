<?php
include_once("php/config.php");
session_start();
if(!isset($_SESSION['id'])){
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chating App</title>
    <!-- css linked -->
    <link rel="stylesheet" href="css/users.css">

    <!-- fontawesome CDN -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
    <div class="circle"></div>
    <div class="circle circle2"></div>
    <div id="container">
        <!-- header -->
        <div id="header">
        <?php
        $headerQuery = "SELECT * FROM `users` WHERE id = '{$_SESSION["id"]}'";
        $runHeaderQuery = mysqli_query($conn, $headerQuery);

        if(!$runHeaderQuery){
            echo "connection failed";
        }else{
            $info = mysqli_fetch_assoc($runHeaderQuery);
        ?>
            <!-- profile image -->
            <div id="headerProfile">
                <img src="images/<?php echo $info['image']; ?>" alt="">
            </div>
            <div id="details">
                <!-- full name -->
                <h3 id="headerName"><?php echo $info['firstName']." ".$info['lastName']; ?></h3>
                <!-- status => Onine or Offline -->
                <h3 id="headerStatus"><?php echo $info['status']; ?></h3>
            </div>
            <?php
            }
            ?>
            <!-- logout button -->
            <button id="logout"><a href="php/logout.php">Logout</a></button>
        </div>

        <!-- search box -->
        <div id="searchBox">
            <!-- Visit "fontawesome.com" for icons  -->
            <input type="text" id="search" placeholder="Find a Friend To Chat" autocomplete="OFF">
            <i class="fas fa-search searchButton"></i>
        </div>

        <!-- display online users -->
        <!-- uses list -->
        <div id="onlineUsers">
            <!-- <a href="#">
                <div class="profile"> -->
                    <!-- profile image -->
                    <!-- <div class="image">
                        <img src="assets/image1.jpg" alt="">
                    </div> -->
                    <!-- name -->
                    <!-- <h2 class="name">Code Smacher</h2> -->
                    <!-- last message -->
                    <!-- <p class="lastMessage">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae dignissimos tempora odio ducimus natus temporibus beatae sapiente, eveniet modi veniam?</p> -->
                    <!-- status => Online or Offline -->
                    <!-- <div class="status online"></div>
                </div>
            </a> -->
            <!-- <div id="errors">No user are avilable to chat</div> -->
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="js/users.js"></script>
</body>
</html>