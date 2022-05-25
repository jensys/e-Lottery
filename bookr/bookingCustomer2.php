<?php
    global $date;
    $date = $_GET['val'];
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


        <div class="box">

            <div class="head">
                <h3>Booking</h3>
            </div>
            <div class="main">

                <form class="book" method="post" action="bookingCustomer2Con.php">

                    <div class="element">
                        <label for="type">Event Type<br> </label>
                        <select name="type" id="type">
                            <option value="1">Marriage</option>
                            <option value="2">Engagement</option>
                            <option value="3">Cultural Event</option>
                            <option value="4">Meetings</option>
                        </select>
                    </div>
                
                    <h4>Services</h4>

                    <?php

                        $conn=mysqli_connect("localhost", "root", "", "raj");

                        if(!$conn){
                            die("Error: Failed to connect to database!");
                        }

                        $query = mysqli_query($conn, "SELECT `name` FROM `services` WHERE `Approved` = 1");
                        while($fetch=mysqli_fetch_array($query)){
                            $val = $fetch['name'];
                            echo "<input type='checkbox' name='service[]' id='$val' value='$val'><label for='$val' text-align='left'>$val</label><br/>";
                        }

                    ?>

                    <input type="submit" name="submit" value="submit">
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