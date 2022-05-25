<?php
    session_start();

    if ( ! isset($_GET['id']) || strlen($_GET['id']) < 1  ) {
        die('Login parameter missing');
    }

?>


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
                <a href="#" id="active">
                    Home
                </a>
            </div>
            <div class="link">
                <div class="link1"></div>
                <a href="bookingCustomer.php">
                    Booking
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

    </main>


    <footer>

        <p>&copy; 2022 bookR</p>
    </footer>

    <script src="js/script.js"></script>
</body>

</html>