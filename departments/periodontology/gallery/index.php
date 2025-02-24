<?php 

$ROOT = "../../../"; 
include($ROOT . "includes/_init.php");
$CURRENTDIRURL = $ROOTURL . "departments/periodontology/gallery/";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Government Dental College & Hospital Sambhajinagar</title>
    <link rel="icon" type="image/x-icon" href="<?php echo $ROOTURL ?>public/assets/gdclogo1.png">

    <script src="<?php echo $ROOTURL ?>public/js/_navbar.js" defer></script>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/global.css"></link>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/_navbar.css"></link>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/_footer.css"></link>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/departments/galleryStyles.css"></link>
</head>
<body>

    <?php include($ROOT . "includes/_navbar.php"); ?>

    <div class="pageBanner">
        <img src="<?php echo $ROOTURL ?>public/assets/pageBanner.jpg"/>
        <h1>
            DEPARTMENT OF PERIODONTOLOGY GALLERY
        </h1>
    </div>
    <div class="contentContainer">
        <div>
            <h1>
                Gallery
            </h1>
            <div class="galleryCardContainer">
                <div class="galleryCard">
                    <img src="<?php echo $CURRENTDIRURL ?>assets/Post Graduate Clinic.jpg" alt="Department Image" />
                    <p>Undergraduate Clinic</p>
                </div>
                <div class="galleryCard">
                    <img src="<?php echo $CURRENTDIRURL ?>assets/Special Operatory for LASER & Implantology.jpg" alt="Department Image" /> 
                    <p>Post Graduate Clinic</p>
                </div>
                <div class="galleryCard">
                    <img
                        src="<?php echo $CURRENTDIRURL ?>assets/Undergraduate Clinic.jpg" alt="Department Image" />
                    <p>Special Operatory for LASER & Implantology</p>
                </div>
            </div>
        </div>
    </div>

    <?php include($ROOT . "includes/_footer.php"); ?>

</body>
</html>