<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="css/style.css?version=51">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&family=Source+Sans+Pro:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/styleBooking.css?version=51">
</head>

<body>

    <header>
        <div class="heading">
            <h1>bookR</h1>

            <a href="#" class="button">
                <div id="one"></div>
                <div id="two"></div>
                <div id="three"></div>
            </a>
        </div>

        <nav class="head">
            <div class="link">
                <div class="link1"></div>
                <a href="serviceProviderHome.php">
                    Home
                </a>
            </div>
            <div class="link">
                <div class="link1"></div>
                <a href="#" id="active">
                    View Work
                </a>
            </div>
          
            <div class="link">
                <div class="link1"></div>
                <a href="index.php">
                    Log out
                </a>
            </div>
        </nav>



    </header>

    <main>


        <div class="box">

            <div class="head">
                <h3>Works</h3>
            </div>
            <div class="main">

                <form class="book">

                    <div class="element">
                    <?php
                        session_start();
                        $userid = $_SESSION['users_id'];

                        $conn=mysqli_connect("localhost", "root", "", "raj");

                        if(!$conn){
                            die("Error: Failed to connect to database!");
                        }
                        $user = mysqli_query($conn, "SELECT `s_p_id` FROM `service_providers` WHERE `users_id` = '$userid'");
                        $userfetch = mysqli_fetch_array($user);
                        $s_p_id = $userfetch['s_p_id'];

                        $query = mysqli_query($conn, "SELECT `Service_id`,`booking_id` FROM `works` WHERE `s_p_id` = '$s_p_id'");
                        while($fetch=mysqli_fetch_array($query)){
                            $Service_id = $fetch['Service_id'];
                            $booking_id = $fetch['booking_id'];

                            $query1 = mysqli_query($conn, "SELECT `Name` FROM `services` WHERE `Service_id`='$Service_id'");
                            $fetch1= mysqli_fetch_array($query1);
                            $service_name = $fetch1['Name'];

                            $query2 = mysqli_query($conn, "SELECT `date`, `users_id` FROM `booking` WHERE `booking_id`='$booking_id'");
                            $fetch2 = mysqli_fetch_array($query2);
                            $date = $fetch2['date'];
                            $users_id = $fetch2['users_id'];

                            $query3 = mysqli_query($conn, "SELECT `firstname`, `mobile` FROM `users` WHERE `users_id`='$users_id'");
                            $fetch3 = mysqli_fetch_array($query3);
                            $first_name = $fetch3['firstname'];
                            $mobile = $fetch3['mobile'];

                            echo" <br/><label text-align='left'>Date : $date </label><br/> ";
                            echo" <label text-align='left'>Service : $service_name </label><br/> ";
                            echo" <label text-align='left'>Customer : $first_name </label><br/> ";
                            echo" <label text-align='left'>Contact : $mobile </label><br/> ";
                        }

                    ?>
                        
                    </div>
                    
                    <!--<input type="button" name="print" value="print">-->
                </form>
            </div>
        </div>

        </div>

    </main>


    <footer>

        <p>&copy; 2022 bookR</p>
    </footer>

    <script src="js/script.js"></script>
</body>

</html>