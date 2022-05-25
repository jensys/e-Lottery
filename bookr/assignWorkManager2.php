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
    <?php
    session_start();
    $val6 = $_SESSION['work_id'];
    $conn=mysqli_connect("localhost", "root", "", "raj");

    if(!$conn){
        die("Error: Failed to connect to database!");
    }
    $sql = "SELECT services.Name FROM services , works WHERE services.Service_id = works.Service_id AND works.work_id = $val6;";
    $query = mysqli_query($conn, $sql);
    $result3 = mysqli_fetch_array($query);
    $_SESSION['service_name'] = $result3['Name'];
    ?>

    <main>


        <div class="box">

            <div class="head">
                <h3>Assign Work</h3>
            </div>
            <div class="main">
                
                <form class="details" method="post" action="assignWorkManagerCon.php">
                    
                    <div class="element">

                        <label for="service"><?php echo $_SESSION['service_name'];?> </label>
                        
                    </div>


                    <div class="element">
                    <label for="type">Service Provider<br> </label>
                    <?php
                    
                      $conn=mysqli_connect("localhost", "root", "", "raj");

                      if(!$conn){
                          die("Error: Failed to connect to database!");
                      }
                      $val5 = $_SESSION['work_id'];
                      $sql = "SELECT service_providers.s_p_id,service_providers.company_name FROM service_providers,services,works WHERE works.work_id = '$val5' AND works.Service_id = services.Service_id AND service_providers.Service_id = services.Service_id;";
                      $query = mysqli_query($conn, $sql);
                      $row = mysqli_num_rows($query);
                      echo "<form method=post>";
                      echo "<select name=type id=type>";
                      while($row=mysqli_fetch_array($query)){
                        
                          $val = $row['company_name'];
                          $val1 = $row['s_p_id'];
                          echo"<option value=$val1>$val</option>";
                       
                      }
                    ?>
                                   
                            
    
                        </select>
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