<!DOCTYPE html>
<?php
if(isset($_GET) && isset($_GET['t'])) $team = $_GET['t'];
else $team = '';
$teams = array(
    'IBC' => 'Institute Branding Cell',
    'DES' => 'Design',
    'C36' => 'Chennai 36',
    'IRC' => 'International Relations Cell',
    'ARC' => 'Alumni Relations Cell',
    'PP' => 'Peepal Pol',
    'ASC' => 'Association & Branding Cell',
    'OPR' => 'Operations Team',
    'CDC' => 'Career Development Cell',    
);

if(!array_key_exists($team, $teams)) $team = '';

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo($team==''?'':$teams[$team].' - ') ?>IAR Student Council</title>
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
        rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/teams.css" rel="stylesheet">

    <link href="css/flipcard.css" rel="stylesheet">
</head>
<body id="page-top" style="background-image: url(img/pattern.png), url(img/menu.jpg);">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid" style="padding: 15px;">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Teams - International and Alumni Relations</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="page-scroll" href="#main">Overview</a></li>
                    <li class="dropdown teamsList">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Teams
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <?php

                            foreach($teams as $i => $t)
                            {
                                echo('<li><a class="page-scroll" href="#'.$i.'">'.$t.'</a></li>');
                            }
                            ?>
                        </ul>
                        <li><a class="page-scroll" href="index.html">Back to Landing Page</a></li>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <header>
        <div class="header-content">
            <!-- <div id="slider">
                <figure>
                    <img src="img/image1.jpeg" alt>
                    <img src="img/image2.jpeg" alt>
                    <img src="img/image3.jpg" alt>
                    <img src="img/image4.jpg" alt>
                    <img src="img/image1.jpeg" alt>
                </figure>

            </div>
 -->
        </div>
    </header>

    <section class="bg-white" id="OPR">
        <h1 class="section-heading text-center">Operations Team</h1>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-left">
                    <!-- <hr class="light"> -->
                    <h3 class="heading text-left">Vision</h3>
                    <p class="text-faded">
                    We endeavor to build robust processes, device strategies and ensure quality of operations thereby enhancing the impact of the International and Alumni Relations Student Council over the next academic year.</p>
                    <hr class="light">
                    <h3 class="heading text-right">Mission </h3>
                    <p class="text-faded">
                    To effectively co-ordinate International and Alumni Relations Student Council functions by providing efficient processes to ethically cater to the stakeholders and deliver operational excellence.
                    </p>
                    <hr class="light">
                    <h3 class="heading text-left">History and Introduction</h3>
                    <p class="text-faded">
                    With the growing size of the student council, the Operations team was set up in 2016 to help in managing the affairs of the Student Council.  The Operations team is responsible for the proper functioning of the student council. The Operations team handles all requirements for the entire council and is the go to team for any issues that the council may face.
                    </p>
                    <hr class="light">
                    <h3 class="heading text-right">Role of Team in I&amp;AR Student Council</h3>
                    <p class="text-faded">
                        Operations team plays a key role in the overall development of I&AR council. This includes:
                        <ul class="listii text-faded">
                            <li>Strategy building and documentations for cells/teams</li>
                            <li>Maintaining track record of each and every department under I&AR student council.</li>
                            <li>Collecting feedbacks and preparing reports, by analysing those feedbacks, for improvements in functioning of events, lecture series etc.</li>
                            <li>Ensuring quality management</li>
                            <li>Vendor management for yearbook, t-shirts, visiting cards and other requirements</li>
                            <li>Troubleshooting issues in the council</li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white" id="CDC">
        <h1 class="section-heading text-center">Career Development Cell</h1>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-left">
                    <!-- <hr class="light"> -->
                    <h3 class="heading text-left">Vision</h3>
                    <p class="text-faded">
                    The Career Development Cell has come a long way from its first vision to bridge the gap between
                     alumni and the Placement Team. It has explored various new avenues and broadened its reach leading 
                     to a lot of change in the vision of the Cell over the years.  The Vision has changed over  the years to -
                    “Guide students to identify career paths that they want to pursue, effectively exploit the wide range of 
                    career possibilities out there waiting for them and mould them so as to be ready to grab these opportunities. ”                
                    </p>
                    <hr class="light">
                    <h3 class="heading text-right">Mission </h3>
                    <p class="text-faded">
                    The Career Development Cell empowers the students of IIT Madras to achieve lifelong success through
                    a myriad of activities and sessions organized in association with the alumni of IIT Madras. The 
                    umbrella of the Cell spans from first year undergraduates to final year research scholars. The 
                    Cell increases the exposure of the students of the institute by holding sessions on various topics
                    by alumni from various walks of life. It also prepares the students for their future careers by 
                    holding mock group discussions and interviews as well as resume review sessions. The Cell also 
                    concentrates on providing students with a great network with other students as well as alumni of 
                    the institute through events like the Mentor for Interns. 

                    The Cell provides an unbiased view of mainstream and niche topics so that the student pursues its
                    passion. The Cell helps overhaul a student’s personality by providing unparalleled exposure in 
                    each and every field that can be thought of.</p>
                    <hr class="light">
                    <h3 class="heading text-left">History</h3>
                    <p class="text-faded">
                    The Original Vision of the Career Development team was to bridge the gap between Alumni and Placement team so that proper coordination is there. But we received criticism questioning the need for the CDC team’s existence as it hindered the independent functioning. The vision demanded Career Development Team to progress in alignment with Placement team.
                    As a response, during the second year Career Development Team strengthened its vision by taking baby steps to exploring new avenues, introducing new events and making the existing events more helpful for providing students with better assistance in discovering career options. 
                    This was a move away from the initial vision and more towards its name - Career Development. It also gave us the freedom to work as our per our ideals without being linked to Placement Team
                     
                    The third year saw a drastic development in the team’s work and visibility along with the implementation of many new initiatives that gained positive responses. We ventured areas like Apping guidance, Skill Development and the original Career Connect. 
                    </p>
                    <hr class="light">
                    <h3 class="heading text-right">Affiliated Clubs</h3>
                    <p class="text-faded">
                    The finance, analytics and the consult clubs are affiliated with the career development cell. A new structure for these clubs has been proposed.<br>
                    Till now the sessions are conducted by seniors and follow a generic structure. For this year it’s planned to have various projects for seniors giving them as well as the club a chance to develop.<br>
                    <b>Finance club</b> – Structure comprises of 1 president followed by 3 vice-presidents, responsible for the events organized by the club.<br>
                    <b>Consult club</b>- This club is in collaboration with 180 DC. It is set to have social consultancy projects to give students a feel about the challenges faced there. All the projects given are mostly real life scenario. Apart from this the club also provides information about consulting
                    </p>
                    <hr class="light">
                    <h3 class="heading text-left">Role of Team in I&amp;AR Student Council</h3>
                    <p class="">
                    The career development team is responsible for organizing events that directly impact students and are divided into many verticals. The team organizes these events throughout the year, most of them taking place in the odd Semester. 
                    Events like Career connect (Aimed at 4th and 5th year) placement related events are conducted by the team. 
                    The resume building sessions which is a HR and a panel discussion is conducted with the help of alums and after that to further help the students we have the resume review session to help students prepare the final resume after discussing them with the alumni
                    Exchange related fundaes are put up for students who have gone for exchange.
                    Insearch Blue book is maintained and updated by the team every year that contains the research internship opportunities for 2nd and 3rd year students.
                    <br>
                    <b>SOP</b>: Varying for each University. Conducted by team from US consulate. It is a workshop. They also give fundaes for other things.
                    <br>
                    Mock interview sessions conducted in November and December. We call the domain specific alumni. You get good insights through the event
                    <br>                     
                    For the students interested in higher studies MApp is conducted which starts in July. A form is released asking students interested whether they are interested in higher studies and then they are MApped with alumni. It is a long process but through efficient teamwork and supervision it is ensured that communication is happening smoothly from the students as well as from the alums side. 
                    Apart from that JSP-JT (supervision programme) and JDP-JT (doctorate program) takes place
                    <br>                    
                    The most important event planned by the team is MFI (Mentor for Interns)
                    It is aimed for 2nd and 3rd year students doing internships or not doing internships and need fundaes about them. This event takes place in metro cities where the students are (interning or staying) and alums who live or work there. A chapter head is Present who helps the team members conducting the MFI to select alumni depending on the interest of the students
                    There are various challenges faced by the team like booking venues in different cities, inviting alums and students, conducting simultaneous MFIs in various cities. But with collaboration among the students and with team work and time management all MFIs conducted by the Career Development Cell were a success compared to last years.
                    (Last Year Ratio of Alums to Student – 5:1 This Year it was on an average 1:3).
                    <br>                     
                    The new work expected by the team is handling foreign delegations during events so that even the can contribute and give insights.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>

</body>
</html>