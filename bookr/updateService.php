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
                <table>
                    <?php
                        session_start();

                        if (isset($_GET['val'])){
                            $val = $_GET['val'];
                            $conn=mysqli_connect("localhost", "root", "", "raj");

                            if(!$conn){
                                die("Error: Failed to connect to database!");
                            }
                            $_SESSION['service_name'] = $val;
                            header("Location: updateService2.php?");
                                                        
                        }
                        
                                         
                        $conn=mysqli_connect("localhost", "root", "", "raj");

                        if(!$conn){
                            die("Error: Failed to connect to database!");
                        }

                        $query = mysqli_query($conn, "SELECT `name`,`Cost Criteria` FROM `services` WHERE `approved`=1");
                        $row = mysqli_num_rows($query);
                        echo "<form method=post>";
                        while($row=mysqli_fetch_array($query)){
                            $val = $row['name'];
                            $val1 = $row['Cost Criteria'];
                            echo"<tr> <td>" .$val.' </td><td> '.$val1 .'</td><td><a href="updateService.php?val='.$val.'"><input type="button" class="button" value="Update" /></a></td></tr>';
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