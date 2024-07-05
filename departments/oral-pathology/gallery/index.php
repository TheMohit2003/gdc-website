<?php 

$ROOT = "../../../"; 
include($ROOT . "includes/_init.php");
$CURRENTDIRURL = $ROOTURL . "departments/oral-pathology/gallery/";

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
            DEPARTMENT OF ORAL PATHOLOGY
        </h1>
    </div>
    <div class="contentContainer">
        <div>
            <h1>Gallery</h1>
            <div class="galleryCardContainer">
                <div class="galleryCard">
                    <img src="<?php echo $CURRENTDIRURL ?>assets/Training-lec1.jpg" alt="Department Image" />
                    <p>Training programmes and Lectures</p>
                </div>
                <div class="galleryCard">
                    <img src="<?php echo $CURRENTDIRURL ?>assets/Training-lec2.jpg" alt="Department Image" />
                    <p>Training programmes and Lectures</p>
                </div>  
                <div class="galleryCard">
                    <img src="<?php echo $CURRENTDIRURL ?>assets/Training-screening1.png" alt="Department Image" /> 
                    <p>Training and Screening Camps</p>
                </div>
                <div class="galleryCard">
                    <img src="<?php echo $CURRENTDIRURL ?>assets/Training-screening2.png" alt="Department Image" /> 
                    <p>Training and Screening Camps</p>
                </div>
                <div class="galleryCard">
                    <img
                        src="<?php echo $CURRENTDIRURL ?>assets/competition-model-making.png" alt="Department Image" />
                    <p>Competitions for Undergraduate Students</p>
                </div>
                <div class="galleryCard">
                    <img
                        src="<?php echo $CURRENTDIRURL ?>assets/competition-face-painting.png" alt="Department Image" />
                    <p>Competitions for Undergraduate Students</p>
                </div>
                <div class="galleryCard">
                    <img
                        src="<?php echo $CURRENTDIRURL ?>assets/competition-rangoli.png" alt="Department Image" />
                    <p>Competitions for Undergraduate Students</p>
                </div>
                <div class="galleryCard">
                    <img
                        src="<?php echo $CURRENTDIRURL ?>assets/competition-soap-carving.png" alt="Department Image" />
                    <p>Competitions for Undergraduate Students</p>
                </div>
                <div class="galleryCard">
                    <img src="<?php echo $CURRENTDIRURL ?>assets/MUHS-gold-medal.jpg" alt="Department Image" />
                    <p>MUHS University Gold Medallist 2023</p>
                </div>
                <div class="galleryCard">
                    <img src="<?php echo $CURRENTDIRURL ?>assets/First-prize-nlqc.jpg" alt="Department Image" />
                    <p>First Prize Winner in National Level Quiz Competition 2023</p>
                </div>
                <div class="galleryCard">
                    <img src="<?php echo $CURRENTDIRURL ?>assets/Paper-presentation.jpg" alt="Department Image" />
                    <p>Best Paper Presentations in 30th IAOMP Conference,2023</p>
                </div>
                <div class="galleryCard">
                    <img src="<?php echo $CURRENTDIRURL ?>assets/Winner-vrmehta.jpg" alt="Department Image" />
                    <p>Winner of VR Mehta Award at 30th IAOMP Conference,2023</p>
                </div>
            </div>
        </div>
    </div>

    <?php include($ROOT . "includes/_footer.php"); ?>

</body>
</html>