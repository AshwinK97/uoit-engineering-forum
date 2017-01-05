<?php
    // local connection string
    //$db = new mysqli('localhost', 'root', '', 'lab');
    $db = new mysqli('sofe2800.cbcmxpmm0m7s.us-east-1.rds.amazonaws.com', 'admin', 'sofe2800project', 'lab');
    if($db->connect_errno > 0){
        echo "ERROR";
        die('Unable to connect to database [' . $db->connect_error . ']');
    }
?>
<?php include_once("analyticstracking.php") ?>

    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>UOIT Eng</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/formValidation.min.css" rel="stylesheet">
        <link href="css/morris.css" rel="stylesheet">

        <!-- Custom CSS -->
        <style type="text/css">
            body {
                /*background-color: #ccffff;*/
                background-color: #e6e6e6;
                /*background-image: url('res/images/wallpaper.png');*/
                /*background-image: url('res/images/wallpaper2.png');*/
            }
            h1 {
                margin-bottom: 30px;
            }

            hr {
                visibility: hidden;
            }

            #mainImage {
                margin-left: -15px;
            }

            #wrapper {
                margin-top: 0px;
                margin-bottom: 50px;
                margin-left: 50px;
                margin-right: 50px;
            }

            #section1,
            #section2,
            #section3,
            #section4 {
                margin-top: 40px;
                margin-bottom: 50px;
            }

            #text {
                background-color: lightblue;
                padding-top: 10px;
                padding-bottom: 30px;
                padding-left: 30px;
                padding-right: 30px;
            }

            td,
            th {
                /*border: 5px solid #ccffff;*/
                border: 5px solid #e6e6e6;
                padding-left: 10px;
                padding-right: 10px;
                padding-top: 10px;
                padding-bottom: 10px;
                background-color: lightblue;
                text-align: left;
            }

            .carousel-inner>.item>img,
            .carousel-inner>.item>a>img {
                display: block;
                max-width: 100%;
                /*height: 667px !important;*/
            }
        </style>

    </head>

    <body>

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="https://uoit.ca/">UOIT</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="#section1">SIRC</a></li>
                    <li><a href="#section2">Uoit Engineering</a></li>
                    <li><a href="#section3">Events</a></li>
                    <li><a href="forum.php">Forum</a></li>
                    <li><a href="plots.php">Analytics</a></li>
                </ul>
            </div>
        </nav>

        <div id="wrapper">
            <div id="section1" class="row">
                <div id="heading1">
                    <h1>Software and Informatics Research Centre (SIRC)</h1>
                </div>
                <div class="col-sm-6">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="res/images/sircBuilding.jpg">
                            </div>
                            <div class="item">
                                <img src="res/images/sircAnnouncement1.jpg">
                            </div>
                            <div class="item">
                                <img src="res/images/sircAnnouncement2.jpg">
                            </div>
                            <div class="item">
                                <img src="res/images/sircAnnouncement3.jpg">
                            </div>
                        </div>
                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6" id="text">
                    <!-- paragraph -->
                    <h3>Building the Future</h3>
                        <p>The University of Ontario Institute of Technology (UOIT) has outgrown its north campus location. We need new spaces for learning, research and study, as well as spaces to co-ordinate the continued growth of the university and its activities.
                            The university has been working on the idea of constructing a new building since 2010, and has put aside capital reserves for this purpose. Now the Board of Governors has approved moving ahead with a new Software and Informatics
                            Research Centre (SIRC). There are many ways for individuals, companies and foundations to support the work of our students and researchers in this new facility.
                        </p>
                    <!-- updates -->
                    <h3>Updates</h3>
                        <b>June 29, 2016</b>
                            <ul>
                                <li>The Board has authorized start of construction</li>
                                <li>University of Ontario Institute of Technology Board of Governors has approved the next phase of SIRC development</li>
                            </ul>
                        <b>May 9, 2016</b>
                            <ul>
                                <li>The university submitted an application to Canada’s Post-Secondary Institutions Strategic Investment Fund</li>
                            </ul>
                        <b>February 2016</b>
                            <ul>
                                <li>The university released a request for proposal (RFP) to create new learning space in the north campus location area.</li>
                            </ul>
                </div>
            </div>

            <div id="section2" class="row">
                <div id="heading2">
                    <h1>Engineering at UOIT</h1>
                </div>
                <div id="content2">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe width="854" height="480" src="https://www.youtube.com/embed/jkzguc7EI0Q" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-sm-6" id="text">
                            <h3>Capstone Project</h3>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;The Capstone Project is a two-semester process in which students collaborte with their peers and professors to conduct research on a problem of their choice.
                                The Capstone project allows students to acheive a deeper understanding of their specific branches of engineering, gain professional experience related to their field of study, and
                                give each student an opportunity contribute to society in a meaningful way. Students are strongly encouraged to select a topic that is relevent to their field of study and pursue it with the intent of.
                                The Capstone Project is both a valuable intellectual experience and also a vehicle through which students can demonstrate their research, analytical, and writing skills to either prospective employers or graduate and professional schools.
                            </p>
                            <h3>Capstone 2015</h3>
                            <b>First prize ($500)</b>
                            <p>&nbsp;&nbsp;Design and Development of a Chassis, Suspension and Drive Train for an Autonomous Amphibious Robot Mark II</p>
                            <b>Second prize ($350)</b>
                            <p>&nbsp;&nbsp;Collapsible/Resettable Steering Column</p>
                            <b>Thirth prize ($150)</b>
                            <p>&nbsp;&nbsp;Design and Development of a Portable Vertical Axis Wind Turbine</p>
                        </div>
                    </div>
                </div>
            </div>

            <div id="section3" class="row">
                <div id="heading3">
                    <h1>Upcoming Events</h1>
                </div>
                <div id="content3">
                    <!-- table dynamically populated with php -->
                    <table>
                        <tr>
                            <th>Date</th>
                            <th>Event</th>
                            <th>Location</th>
                        </tr>
                        <?php
                        $sql = "SELECT day, name, location FROM events";
                        $result = $db->query($sql);
                        if ($result ->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                    echo  "<td>" . "$row[day]" . "</td>";
                                    echo  "<td>" . "$row[name]" . "</td>";
                                    echo  "<td>" . "$row[location]" . "</td>";
                                echo "</tr>";
                            }
                        }
                    ?>
                    </table>
                </div>
            </div>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/formValidation.min.js"></script>
        <script src="js/framework/bootstrap.min.js"></script>
        <script src="js/raphael-min.js"></script>
        <script src="js/morris.min.js"></script>

    </body>

    </html>
