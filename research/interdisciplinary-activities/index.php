<?php 

$ROOT = "../../"; 
include($ROOT . "includes/_init.php");
$CURRENTDIRURL = $ROOTURL . "research/interdisciplinary-activities/";

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
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/departments/departmentstyles.css"></link>
</head>
<body>

    <?php include($ROOT . "includes/_navbar.php"); ?>

    <div class="pageBanner">
        <img src="<?php echo $ROOTURL ?>public/assets/pageBanner.jpg"/>
        <h1>
            INTERDISCIPLINARY ACTIVITIES
        </h1>
    </div>
    <div class="contentContainer">
        <div>
            <p>
                Interdisciplinary activity involves integrating knowledge, methodologies & insights from multiple disciplines to address complex problem, create new understanding and innovate. We, the faculty member with the primary goal of this activity is to overcome the limitations of a single-disciplinary approach by leveraging the strengths and compensating for the weakness of various disciplines. This is specially useful for tackling complex issues 
            </p>
        </div>

                
        <div>
            <h1>Committee :</h1>
            <h2>Chairman :</h2>
            <p>Dr. Seema D Pathak</p>
            <h2>Members :</h2>
            <p>Dr. Jayanti Humbe</p>
            <p>Dr. Sonali Mahajan</p>
        </div>
    </div>

    <?php include($ROOT . "includes/_footer.php"); ?>

</body>
</html>