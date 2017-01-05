<?php include_once("analyticstracking.php") ?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>User Analytics</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/formValidation.min.css" rel="stylesheet">
    <link href="css/morris.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style type="text/css">
        body {
            /*background-color: #ccffff;*/
            background-color: #e6e6e6;
        }
        h1 {
            text-align: center;
            margin-bottom: 50px;
        }

        h3 {
            margin-top: 30px;
            margin-left: 30px;
        }

        hr {
            visibility: hidden;
        }

        #plots {
            text-align: center;
            padding-bottom: 20px;
        }

        #wrapper {
            margin-top: 0px;
            margin-bottom: 0px;
            margin-left: 50px;
            margin-right: 50px;
        }

        #activeUsers {
            margin-top: 10px;
            /*background-color: lightblue;*/
        }

        #graph2,
        #graph3,
        #graph4 {
            background-color: lightblue;
        }
    </style>

</head>

<body>

    <!-- YOUR CONTENT HERE -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="https://uoit.ca/">UOIT</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="forum.php">Forum</a></li>
            </ul>
        </div>
    </nav>

    <div id="wrapper">
        <div id="map" class="row">
            <div class="col-sm-10" id="graph1">
                <h3>Active user locations</h3>
                <iframe id="DDaHQjHjtt" width="1400" height="900" style="margin:0px;border-width:0px;overflow:hidden;" scrolling="no" src="https://www.embeddedanalytics.com/reports/displayreport?reportcode=DDaHQjHjtt&chckcode=gaepXFdT9Nf4i1y7iYpDNS" title="Reporting Tool for Google Analytics and Google Adwords."></iframe>
                <br><br>
            </div>
            <div class="col-sm-2" id="activeUsers">
                <h3>Active users</h3>
                <iframe id="FwzsO7J9wo" width="250" height="200" style="margin:0px;border-width:0px;overflow:hidden;" scrolling="no" src="https://www.embeddedanalytics.com/reports/displayreport?reportcode=FwzsO7J9wo&chckcode=gaepXFdT9Nf4i1y7iYpDNS" title="Reporting Tool for Google Analytics and Google Adwords."></iframe>
            </div>
        </div>
        <br><br><br>
        <div id="section1" class="row">
            <div class="col-sm-6" id="graph2">
                <h3>Key courses and enrolled students</h3>
                <div id="courses" style="height: 400px;"></div>
            </div>
            <div class="col-sm-6" id="graph3">
                <h3>Engineering average GPAs</h3>
                <div id="averages" style="height: 400px;"></div>
            </div>
        </div>
        <br><br>
        <div id="section2" class="row">
            <div class="col-sm-6" id="graph4">
                <h3>Distribution of students</h3>
                <div id="population" style="height: 400px;"></div>
            </div>
        </div>
        <br><br>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/formValidation.min.js"></script>
    <script src="js/framework/bootstrap.min.js"></script>
    <script src="js/raphael-min.js"></script>
    <script src="js/morris.min.js"></script>

    <script>
        $(document).ready(function() {
            new Morris.Donut({
                element: 'population',
                data: [{
                    label: "Software",
                    value: 80
                }, {
                    label: "Mechanical",
                    value: 200
                }, {
                    label: "Electrical",
                    value: 150
                }, {
                    label: "Manufacturing",
                    value: 50
                }, {
                    label: "Automotive",
                    value: 70
                }, {
                    label: "Mechatronics",
                    value: 30
                }],
                backgroundColor: '#0CADF2',
                labelColor: '#585C5E',
                colors: [
                    '#0B62A4',
                    '#7A92A3',
                    '#4DA74D',
                    '#AFD8F8',
                    '#EDC240',
                    '#CB4B4B'
                ]
            });
            new Morris.Bar({
                element: 'courses',
                data: [{
                    course: 'Differentials',
                    students: 400
                }, {
                    course: 'Thermo',
                    students: 450
                }, {
                    course: 'Statics',
                    students: 200
                }, {
                    course: 'Discrete Math',
                    students: 240
                }, {
                    course: 'Electrical',
                    students: 100
                }, {
                    course: 'Circuits',
                    students: 150
                }, {
                    course: 'OOP',
                    students: 350
                }],
                xkey: 'course',
                ykeys: ['students'],
                labels: ['Students'],
                barColors: ['#38A8E8'],
                hideHover: ['true']
            });
            new Morris.Line({
                element: 'averages',
                data: [{
                    year: '2012',
                    Software: 2.61,
                    Mechanical: 2.84,
                    Electrical: 2.55,
                    Manufacturing: 2.17,
                    Automotive: 2.95,
                    Mechatronics: 2.11,
                }, {
                    year: '2013',
                    Software: 2.66,
                    Mechanical: 2.91,
                    Electrical: 2.59,
                    Manufacturing: 2.45,
                    Automotive: 3.26,
                    Mechatronics: 1.76,
                }, {
                    year: '2014',
                    Software: 2.88,
                    Mechanical: 2.75,
                    Electrical: 2.92,
                    Manufacturing: 2.38,
                    Automotive: 3.30,
                    Mechatronics: 2.43,
                }, {
                    year: '2015',
                    Software: 2.94,
                    Mechanical: 3.13,
                    Electrical: 2.96,
                    Manufacturing: 2.57,
                    Automotive: 3.14,
                    Mechatronics: 2.31,
                }, {
                    year: '2016',
                    Software: 3.17,
                    Mechanical: 3.26,
                    Electrical: 3.04,
                    Manufacturing: 2.74,
                    Automotive: 3.18,
                    Mechatronics: 2.38,
                }],
                xkey: 'year',
                ykeys: ['Software', 'Mechanical', 'Electrical', 'Manufacturing', 'Automotive', 'Mechatronics'],
                labels: ['Software', 'Mechanical', 'Electrical', 'Manufacturing', 'Automotive', 'Mechatronics'],
                hideHover: ['true']
            });
        });
    </script>

</body>

</html>
