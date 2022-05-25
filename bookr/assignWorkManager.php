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
                <a href="#"id="active">
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
                <a href="updateService.php">
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
                <h3>Assign Works</h3>
            </div>
            <div class="main">
                <table>
                    <?php
                        session_start();

                        if (isset($_GET['val'])){
                            $val = $_GET['val'];
                            $conn=mysqli_connect("localhost", "root", "", "raj");

                            if(!$conn){
                                die("Error: Failed to connect to database!");
                            }
                            $_SESSION['work_id'] = $val;
                            header("Location: assignWorkManager2.php?");
                                                        
                        }
                        
                                         
                        $conn=mysqli_connect("localhost", "root", "", "raj");

                        if(!$conn){
                            die("Error: Failed to connect to database!");
                        }
                        $sql = "SELECT works.work_id,booking.date,services.Name FROM booking,services , works WHERE booking.booking_id = works.booking_id AND services.Service_id = works.Service_id AND works.s_p_id = 0;";
                        $query = mysqli_query($conn, $sql);
                        $row = mysqli_num_rows($query);
                        echo "<form method=post action=assignWorkManager.php>";
                        while($row=mysqli_fetch_array($query)){
                            $val = $row['date'];
                            $val1 = $row['work_id'];
                            $val2 = $row['Name'];
                            echo"<tr> <td>" .$val.' </td><td> '.$val2 .'</td><td><a href="assignWorkManager.php?val='.$val1.'"><input type="button" class="button" value="Assign" /></a></td></tr>';
                        }
                        // $servicename = $_POST['name'];
                        // for($i = 0;;$i++){
                        //     if(array_key_exists('Delete[$i]', $_POST)) {
                        //         admindelete($_POST['Delete[$i]']);
                        //     }
                        //     else
                        //         break;
                        // }
                        echo "</form>";
                    ?>
                   
                    </table>

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