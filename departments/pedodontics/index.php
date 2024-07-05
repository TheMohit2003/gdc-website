<?php 

$ROOT = "../../"; 
include($ROOT . "includes/_init.php");
$CUURENTDIRURL = $ROOTURL . "departments/pedodontics/";

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
            DEPARTMENT OF PEDODONTICS
        </h1>
    </div>
    <div class="contentContainer">
        <div>
            <h1>Introduction</h1>
            <p>
                The Department of Pediatric and Preventive Dentistry, Chhtrapaji
              Sambhajinagar was established in 1985. The department aims at the
              diagnosis & treatment of dental caries and its sequel, teeth
              malformations and discolorations, thereby restoring the teeth to
              full function in an aesthetically pleasing manner. Pediatric
              Dentistry is the branch of Dentistry which is concerned with
              comprehensive preventive and therapeutic oral health care of
              children from birth through adolescence. An upcoming field of
              dentistry with immense potential, paediatric dentistry aims to
              eliminate fear at an early age with the inculcation of positive
              attitudes. The Department of Pediatric and Preventive Dentistry,
              Chhtrapaji Sambhajinagar caters to maintain a perfect blend of
              both the clinical and academic arenas of the field. Scope ranges
              from prenatal counseling of parents to all the dental treatments
              upto 13 years of age. Dental Care of the medically and mentally
              compromised patients is also taken care of. Undergraduate students
              are given discussions on a wide range of topics with special
              attention placed on interactive case history discussions as well
              as first hand clinical experience under specialist supervision.
              They are also encouraged to participate in seminars and posters in
              order to get introduced to the changing trends and to evoke a
              fresh interest in the subject. As interns they are trained to deal
              and expertly manage patients of various age groups with special
              emphasis on their clinical application of behavior management
              techniques. The Department is situated in left wing of the college
              on the second floor. The department has one large clinical section
              where both the basic treatment procedures as well as advanced
              treatments are made available. There is a presence of spacious
              waiting area. We have a separate unit to treat children with
              Special Health Care to render proper isolation and comfort to the
              children. The department also has a well isolated sterilization
              area, a preclinical lab and play room.
            </p>
           
        </div>

        <!-- <div>
            <h1>
                Our Faculty
            </h1>
            <div class="facultyGallery">
                <div class="facultyCard">
                    <img src="<?php echo $CUURENTDIRURL ?>assets/drPradnyaVilasBansode/profilePic.png" alt="faculty" width="200" height="200" />
                    <a href= "<?php echo $CUURENTDIRURL ?>assets/drPradnyaVilasBansode/cv.pdf" type="application/pdf" target="_blank" >
                        Dr. Pradnya Vilas Bansode
                    </a>
                    <p>Professor (MPSC) and Head, Dept. of Conservative Dentistry</p>
                </div>
                <div class="facultyCard">
                    <img src="<?php echo $CUURENTDIRURL ?>assets/drSwethaKannamparambil/profilePic.png" alt="faculty" width="200" height="200" />
                    <a href= "<?php echo $CUURENTDIRURL ?>assets/drSwethaKannamparambil/cv.pdf" type="application/pdf" target="_blank" >
                        Dr. Swetha Kannamparambil
                    </a>
                    <p>Assistant Professor, Dept. of Conservative Dentistry</p>
                </div>
                <div class="facultyCard">
                    <img src="<?php echo $CUURENTDIRURL ?>assets/drAnjaliEknathMule/profilePic.png" alt="faculty" width="200" height="200" />
                    <a href= "<?php echo $CUURENTDIRURL ?>assets/drAnjaliEknathMule/cv.pdf" type="application/pdf" target="_blank" >
                        Dr. Anjali Eknath Mule
                    </a>
                    <p>Assistant Professor, Dept. of Conservative Dentistry</p>
                </div>
                <div class="facultyCard">
                    <img src="<?php echo $CUURENTDIRURL ?>assets/drGeetamUttamDuduskar/profilePic.png" alt="faculty" width="200" height="200" />
                    <a href= "<?php echo $CUURENTDIRURL ?>assets/drGeetamUttamDuduskar/cv.pdf" type="application/pdf" target="_blank" >
                        Dr. Geetam Uttam Duduskar
                    </a>
                    <p>Assistant Professor, Dept. of Conservative Dentistry</p>
                </div>
                <div class="facultyCard">
                    <img src="<?php echo $CUURENTDIRURL ?>assets/drMadhuriMilindAmbhure/profilePic.png" alt="faculty" width="200" height="200" />
                    <a href= "<?php echo $CUURENTDIRURL ?>assets/drMadhuriMilindAmbhure/cv.pdf" type="application/pdf" target="_blank" >
                        Dr. Madhuri Milind Ambhure
                    </a>
                    <p>Associate Professor (MPSC), Dept. of Conservative Dentistry</p>
                </div>
                <div class="facultyCard">
                    <img src="<?php echo $CUURENTDIRURL ?>assets/drSeemaDhananjayPathak/profilePic.png" alt="faculty" width="200" height="200" />
                    <a href= "<?php echo $CUURENTDIRURL ?>assets/drSeemaDhananjayPathak/cv.pdf" type="application/pdf" target="_blank" >
                        Dr. Seema Dhananjay Pathak
                    </a>
                    <p>Associate Professor, Dept. of Conservative Dentistry, ...</p>
                </div>
                <div class="facultyCard">
                    <img src="<?php echo $CUURENTDIRURL ?>assets/drSuyogManoharJadhav/profilePic.png" alt="faculty" width="200" height="200" />
                    <a href= "<?php echo $CUURENTDIRURL ?>assets/drSuyogManoharJadhav/cv.pdf" type="application/pdf" target="_blank" >
                        Dr. Suyog Manohar Jadhav
                    </a>
                    <p>Assistant Professor, Dept. of Conservative Dentistry</p>
                </div>
            </div>
        </div> -->

        <div class="visionCard">
            <h1 class="title">
                 Mission & Vision
            </h1>
            <p class="italic mt-4">
                &#10003; To foster the development of dentist who will brining profound
            integrity and character to every endeavor, while demonstrating the
            highest quality clinical knowledge and expertise.
            </p>
            <p class="italic mt-4">
                &#10003; The Students should achieve academic excellence, Provide the best
            oral health care, and engage in research scholarship, and creative
            endeavors to improve the health of the highly diverse populations in
            India.
            </p>
            
        </div>
        <div class="missionCard">
            <h1 class="title">
                Goals of the Department
            </h1>
            <p class="italic mt-4">
               The goal of our department is to provide basic and advance
              treatment modalities for children suffering with dental issues.
              The college aims to provide high quality education to the budding
              dentist by means of improved understanding of the diagnosis and
              treatment planning of various types of oral health issues in
              pediatric patients along with imbibing the students with behavior
              management skills.
            </p>
            
        </div>
        <div class="missionCard">
            <h1 class="title">
                Patients Service
            </h1>
            <p class="italic mt-4">
               The department is well equipped with all the latest infrastructure
            which helps in the course of diagnosis and treatment planning of a
            particular patient. The department is kids friendly and kept in par
            to the specifications given by the dental council of India. We also
            focuses on patients who are dependent on care takers for their day
            to day living and those with special health care needs or
            handicapped children who are identified from the community, brought
            to the department for necessary oral health care and medical
            treatment procedures.
            </p>
            
        </div>

        <div>
            <h1>ACTIVITIES</h1>
            
            <p>
                &#10003; THEORY CLASSES :  The
              undergraduate students begin with lectures in the III year of BDS
              .Theory (65 lecture hours) - III yr (20 hrs) and IV yr (45hrs).
            </p>
            <p>
                &#10003; CLINICAL TRAINING : 
              Detailed case history and discussion, Oral prophylaxis,
              Restorative procedures, Extractions, Topical fluoride applications
              procedures are taught in their clinical postings.
            </p>
            <p>
                &#10003; PRACTICAL (170 hrs) :
              III yr (70 hrs) and IV yr (100hrs).
              (Total- 235 hrs)
            </p>
            <p>
                &#10003; SEMINAR PRESENTATION :
              The students are required to present two seminars, one minor at
              the end of the III year BDS and a major seminar in the final year
              of BDS.
            </p>
            <p>
                &#10003; COMMUNITY PROGRAMMES :
              Students are also encouraged to participate in the programmes such
              as treatment camps. People are made aware through these camps
              regarding their dental health.
            </p>
            <p>
                &#10003; PROJECT WORK :
              Students are required to submit a project in their final year
              which is usually related to the development of a teaching aid or
              the development of an aid for behavior management.
            </p>
            
        </div>

        <div>
            <h1>Gallery</h1>
            <div class="galleryCardContainer">
                <div class="galleryCard">
                    <img src="<?php echo $CUURENTDIRURL ?>gallery/assets/dept-image1.jpg" alt="Department Image" />
                    <p>Department Board</p>
                </div>
                <div class="galleryCard">
                    <img src="<?php echo $CUURENTDIRURL ?>gallery/assets/img2.jpg" alt="Department Image" /> 
                    <p>Department Images</p>
                </div>
                <div class="galleryCard">
                    <img src="<?php echo $CUURENTDIRURL ?>gallery/assets/img8.jpg" alt="Department Image" /> 
                    <p>Department Images</p>
                </div>
                <div class="galleryCard">
                    <img src="<?php echo $CUURENTDIRURL ?>gallery/assets/img4.png" alt="Department Image" /> 
                    <p>Department Images</p>
                </div>
                
            </div>
            <a class="readMoreBtn"
                href="<?php echo $CUURENTDIRURL ?>gallery">
                View More
            </a>
        </div>
    </div >

    <?php include($ROOT . "includes/_footer.php"); ?>

</body>
</html>