<?php 

$ROOT = "../../"; 
include($ROOT . "includes/_init.php");
$CURRENTDIRURL = $ROOTURL . "student-portal/buddy-system/";

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
    <link rel="stylesheet" href="<?php echo $CURRENTDIRURL ?>styles.css"></link>
</head>
<body>

    <?php include($ROOT . "includes/_navbar.php"); ?>

    <div class="contentContainer">
        <h1 className="text-4xl mb-4">Buddy System</h1>
        <p className="text-justify pt-4">
            The GDCH Buddy System program is an initiative to help connect GDCH students who would like to meet friends or establish new connections (whether you're taking in-person or virtual classes). We know college can be a big adjustment - whether you're transitioning from high school, transferring from another college, currently a GDCH student or coming back to college after some time away - the Buddy System connects you with another GDCH student!
        </p>
        <p className="text-justify pt-4">
            The Buddy System accepts new Buddies at the start of the Fall and Spring semesters. Participants in the program will receive some free GDCH give-a-ways, invitations to exclusive Buddy System events, and will receive weekly discussion topics to help facilitate conversation with your buddy.
        </p>
        <p className="text-justify pt-4">
            You can carry on buddy system correspondence via email or move to another preferred mode of communication. This is a great opportunity to make new friends, learn more about how other students on campus are doing, and establish more connections on campus.
        </p>
    </div>

    <?php include($ROOT . "includes/_footer.php"); ?>

</body>
</html>