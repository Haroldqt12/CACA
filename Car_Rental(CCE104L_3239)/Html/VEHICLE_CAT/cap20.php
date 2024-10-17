<?php
session_start();


if (!isset($_SESSION['email'])) {
    header("Location: ../MAIN_EXE/login.php");
    exit();
}
?>
<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Available</title>
    <link rel="stylesheet" href="car_transac.css">
</head>
<body>
    <div class="topnav">
            <ul class="navbar"> 
                <div class="Car_icon">
                    <img id="car-logo" src="../Photos/Car Logo/Ruben Car Rental(3).png" >
                </div>
                <li></li>
                <li><a href="../Home/Home.php">HOME</a></li>
                <li><a href="../About/About.php">ABOUT</a></li>
                <li>  
                    <a href="#" id="Service">SERVICES</a>

                        <ul class="drop_service">
                        <li><a id="dropdown1" href="../Services/Cust_Serv.php">CUSTOMER SERVICE</a></li>
                        <li><a id="dropdown2" href="../VEHICLE_CAT/services.php">VEHICLE CATEGORY</a></li>
                        </ul>

                </li>
                <li><a href="../Contact/Contact.php">CONTACT</a>
                </li>
                <li>
                    <a href="#" id="profile">
                            <img id="profile_icon" src="../Photos/png_account.svg">
                    </a>
                        <ul class="drop_profile">
                            <li><a id="dropdown3" href="#" ><?php echo htmlspecialchars($_SESSION['email']);?></a></li>
                            <li><a id="dropdown4" href="../DATABASE/logout.php">Log Out</a></li>
                        </ul>
                </li>
            </ul> 
        </div>
    <h1>SUV</h1>
        <div class="container">
            <img class="set1images"src="../VEHICLE_CAT/CAR_IMG/capture20.jpg">
               <div class="paragraph"><p>Make: Honda <br>
                                            Model: City<br>
                                            Year: 2024<br>
                                            Color: Ocean Blue<br>
                                            Engine Type: 1.5L Turbocharged<br>
                                            Transmission: CVT (Continuously Variable Transmission)<br>
                                            Seating Capacity: 5<br>
                                            Features: Apple CarPlay, Android Auto, Honda Sensing Safety Suite, Rearview Camera<br></p>
                                            <a href="services.php"><button class="prev">Back</button>
                                            <button class="next"><a href="../Services/client_rent.php" id="rentcar">Rent</a></button>
            </div>
        </div>     
    </div>
    <script src="car_scripts.js"></script>      
</body>   
</php>         