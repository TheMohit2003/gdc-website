<?php 

$ROOT = "../../"; 
include($ROOT . "includes/_init.php");
$CUURENTDIRURL = $ROOTURL . "about-us/about-college/";

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
            ABOUT COLLEGE
        </h1>
    </div>
    <div>
        <div class="main">
            <div class="about-us-container">
                <h2 class="college-title">Government Dental College & Hospital Sambhajinagar</h2>
                <p class="college-desc">
                    Govt Dental College and Hospital, Chatrapati Sambhajinagar is one of the reputed Govt. Dental Colleges in Maharashtra. The college is popularly known as GDCH Chatrapati Sambhajinagar and was founded in the year 1982-83. The college was established to fortify the weakest section of the Nation, i.e. Rural population. It was started to serve students with the best dental care and Oral and Maxillofacial Surgery. The college is affiliated with the Maharashtra University of Health Sciences, Nashik, and is approved by the Dental Council of India, Govt. of India.
                </p>
            </div>

            <div class="about-us-container">
            
                <h3 class="dept-title">Departments</h3>

                <div class="departmentsList">
                    <ul>
                        <li>Oral Medicine and Radiology</li>
                        <li>Oral and Maxillofacial Surgery</li>
                        <li>Prosthodontics and Crown & Bridge</li>
                        <li>Periodontology</li>
                        <li>Oral and Maxillofacial Pathology</li>
                    </ul>
                    <ul>
                        <li>Orthodontics and Dentofacial Orthopaedics</li>
                        <li>Conservative Dentistry and Endodontics</li>
                        <li>Oral Pathology and Microbiology</li>
                        <li>Public Health Dentistry</li>
                    </ul>
                </div>
                
                
            </div>
            
    </div>
    

    <?php include($ROOT . "includes/_footer.php"); ?>

</body>
</html>