<?php 

$ROOT = "../../"; 
include($ROOT . "includes/_init.php");
$CURRENTDIRURL = $ROOTURL . "about-us/infrastructure/";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Government Dental College & Hospital Sambhajinagar</title>
    <link rel="icon" type="image/x-icon" href="<?php echo $ROOTURL ?>public/assets/gdclogo1.png">

    <script src="<?php echo $ROOTURL ?>public/js/_navbar.js" defer></script>
    <script src="<?php echo $ROOTURL ?>public/js/departments/departmentMain.js" defer></script>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/global.css"></link>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/_navbar.css"></link>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/_footer.css"></link>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/about-us/about-us.css"></link>
</head>
<body>

    <?php include($ROOT . "includes/_navbar.php"); ?>

    <div class="pageBanner">
        <img src="<?php echo $ROOTURL ?>public/assets/pageBanner.jpg"/>
        <h1>
            INFRASTRUCTURE
        </h1>
    </div>
    <div>
        <div class="main">
            <div class="infra-container">
                
                <a href="<?php echo $CURRENTDIRURL ?>assets/GDC hostel.pdf" >
                    1. Hostel Information
                </a>
                <a href="<?php echo $CURRENTDIRURL ?>assets/Library Information.pdf" >
                    2.  Library Information
                </a>
            </div> 
        </div>           
    </div>
    

    <?php include($ROOT . "includes/_footer.php"); ?>

</body>
</html>