<?php 

$ROOT = "../../"; 
include($ROOT . "includes/_init.php");
$CUURENTDIRURL = $ROOTURL . "departments/prosthodontics/";

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
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/departments/galleryStyles.css"></link>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/departments/departmentStyles.css"></link>
</head>
<body>

    <?php include($ROOT . "includes/_navbar.php"); ?>

    <div class="pageBanner">
        <img src="<?php echo $ROOTURL ?>public/assets/pageBanner.jpg"/>
        <h1>
            DEPARTMENT OF PROSTHODONTICS
        </h1>
    </div>

    <div class="contentContainer">
        <div>
            <h1>Introduction</h1>
            <p>
                This is the 1st branch of dentistry. This is a vast department with four branches in it viz.., Removable prosthodontics , Fixed prosthodontics ,Maxillofacial prosthodontics and Implants. Daily 80-85 patients are treated for complete dentures, removable and fixed partial dentures. Around 35-40 Implants are placed every month and 10-15 maxillofacial prosthesis are delivered.
            </p>
            <p>
                We have post graduation in the department since 1995 and around 60 postgraduate students are passed out. We have fellowship in oral implantology and the department is MUHS Ph.D approved center. We have state-of-art facilities like VRF system in pre-clinical laboratory, well equipped with all the latest instruments and machines in ceramic laboratory. We also have CAD-CAM machine for the welfare of postgraduate students and patients. The department is actively involved in the research activities, copyrights and have frequent research publications in various international and national scientific journals.
            </p>
        </div>
        <div class="facultyContainer">
            <div class="facultyToggleBtn">
                <img class="plusIcon" src="<?php echo $ROOTURL ?>public/assets/plus-icon.svg"/>
                <img class="minusIcon" src="<?php echo $ROOTURL ?>public/assets/minus-icon.svg"/>
                <h1>Our Faculty</h1>
            </div>
            <div class="facultyGallery">
                <div class="facultyCard">
                    <img src="<?php echo $CUURENTDIRURL ?>assets/Kishor-Mahale/Photo.jpg" alt="faculty" width="200" height="200" />
                    <a href= "<?php echo $CUURENTDIRURL ?>assets/Kishor-Mahale/Kishor-Mahale.pdf" type="application/pdf" target="_blank" >
                        Dr. Kishor Madhukar Mahale
                    </a>
                    <p>Professor and Head of Department, Dept. of Prosthodontics</p>
                </div>
                <div class="facultyCard">
                    <img src="<?php echo $CUURENTDIRURL ?>assets/Smita-Khalikar/Photo.jpg" alt="faculty" width="200" height="200" />
                    <a href= "<?php echo $CUURENTDIRURL ?>assets/Smita-Khalikar/Smita-Khalikar.pdf" type="application/pdf" target="_blank" >
                        Dr. Smita Arun Khalikar
                    </a>
                    <p>Associate Profesor, Dept. of Prosthodontics</p>
                </div>
                <div class="facultyCard">
                    <img src="<?php echo $CUURENTDIRURL ?>assets/Vilas-Rajguru/Photo.jpg" alt="faculty" width="200" height="200" />
                    <a href= "<?php echo $CUURENTDIRURL ?>assets/Vilas-Rajguru/Vilas-Rajguru.pdf" type="application/pdf" target="_blank" >
                        Dr. Vilas L. Rajguru
                    </a>
                    <p>Associate Profesor, Dept. of Prosthodontics</p>
                </div>
                <div class="facultyCard">
                    <img src="<?php echo $ROOTURL ?>public/assets/doctor.png" alt="faculty" width="200" height="200" />
                    <a href= "<?php echo $CUURENTDIRURL ?>assets/Sonali-Mahajan/Sonali-Mahajan.pdf" type="application/pdf" target="_blank" >
                        Dr. Sonali Vishal Mahajan
                    </a>
                    <p>Associate Profesor, Dept. of Prosthodontics</p>
                </div>
                <div class="facultyCard">
                    <img src="<?php echo $CUURENTDIRURL ?>assets/Ulhas-Tandale/Photo.jpg" alt="faculty" width="200" height="200" />
                    <a href= "<?php echo $CUURENTDIRURL ?>assets/Ulhas-Tandale/Ulhas-Tandale.pdf" type="application/pdf" target="_blank" >
                        Dr. Ulhas Eknathrao Tandale
                    </a>
                    <p>Associate Profesor, Dept. of Prosthodontics</p>
                </div>  
            </div>
        </div>
    </div>

    
    <?php include($ROOT . "includes/_footer.php"); ?>

</body>
</html>