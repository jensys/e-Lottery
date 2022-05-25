<?php
session_start();
$conn=mysqli_connect("localhost", "root", "", "raj");

                        if(!$conn){
                            die("Error: Failed to connect to database!");
                        }
                        $val3 = $_SESSION['service_name'];
                        $sql = "SELECT `Cost Criteria` FROM `services` WHERE `Name`='$val3';";
                        $query = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_array($query);
                        $_SESSION['cost'] = $row['Cost Criteria'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
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
                <a href="adminHome.php">
                    Home
                </a>
            </div>
            <div class="link">
                <div class="link1"></div>
                <a href="assignWorkManager.php">
                    Assign Work
                </a>
            </div>
            <div class="link">
                <div class="link1"></div>
                <a href="addlServiceAdmin.php">
                    Services
                </a>
            </div>
            <div class="link">
                <div class="link1"></div>
                <a href="#" id="active">
                    Update
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
                <h3>Update Services</h3>
            </div>
            <div class="main">
                
                <form class="details" method="post" action="updateService2Con.php">
                    
                    <div class="element">

                        <label for="service">Service Name </label>
                        <input type="text" name="service" class="service" value="<?php echo $_SESSION['service_name']?>" required>
                    </div>

                    <div class="element">
                        <label for="cost">Cost Criteria </label>
                        <input type="text" name="cost" class="cost" value="<?php echo $_SESSION['cost']?>" required>
                    </div>

                    <input type="submit" name="submit" value="Submit">

                    

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