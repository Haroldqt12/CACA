<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location:../MAIN_EXE/login.php");
    exit();
}
?>
<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="Contact_design.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>RUBEN</title>
</head>
<body>
    <div class="main">
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
                            <li><a id="dropdown2" href="#">VEHICLE CATEGORY</a></li>
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

        <div class="icon-img1">
            <i class="fa-solid fa-credit-card"></i>
           <a href="https://shopee.ph/?uls_trackid=50tlbj9200c6&utm_campaign=-&utm_content=pcphshopeeshopeesddef----&utm_medium=affiliates&utm_source=an_13148380001&utm_term=bv2ozzppu38s"><p class="p1">DEPOSIT SECURITY<br> We ensure that all deposits made through our platform are safeguarded with advanced encryption technology and secure payment gateways. we offer fraud protection measures to ensure that your funds remain safe at all times.</p></a>
        </div>  
            
        <div class="icon-img2">
            <i class="fa-solid fa-headset"></i>
            <a href=""><p class="p2">PERSONAL SUPPORT <br> . We believe in offering dedicated, one-on-one assistance to ensure that every customer feels valued and heard. Our support team is always available to help with any questions or concerns, providing timely, personalized solutions tailored to your specific needs.</p></a>  
        </div> 
          
        <div class="icon-img3">
            <i class="fa-solid fa-user-injured"></i>
            <a href=""><p class="p3">INSURANCE<br> ur expert team is here to guide you through the process, helping you choose the right plan and answering any questions you may have. Trust us to deliver reliable, secure insurance services that prioritize your peace of mind at every step.</p></a>
        </div>        
    </div>
    <script src="Contact_script.js"></script>
</body>
</php>