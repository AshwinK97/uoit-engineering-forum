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
        <title>Forum</title>

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
                margin-left: 200px;
                margin-right: 200px;
            }

            #section1,
            #section2,
            #section3,
            #section4 {
                margin-top: 50px;
                margin-bottom: 50px;
            }

            #forum {
                width: 100%;

            }
            textarea {
                resize: none;
            }

            td,
            th {
                border: 10px solid #e6e6e6;
                padding-left: 10px;
                padding-right: 10px;
                padding-top: 10px;
                padding-bottom: 10px;
                /*background-color: lightblue;*/
                text-align: left;
            }
            #post {
                background-color: lightblue;
            }

            #comment {
                background-color: lightgreen;
            }

            #spacer {
                background-color: #e6e6e6;
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
                    <li><a href="plots.php">Analytics</a></li>
                    <li><a href="newPost.php">Post</a></li>
                </ul>
            </div>
        </nav>

        <div id="wrapper">
            <div id="section1" class="row">
                <!-- <div id="heading1">
                    <h1>Forum</h1>
                </div> -->
                <div class="row">
                    <div class="col-sm-12">
                        <table id='forum'>
                            <?php
                                $sql = "SELECT sample_id, name, subject, textarea FROM posts";
                                $result = $db->query($sql);
                                if ($result ->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                        // post
                                        echo "<tr id='post'>";
                                            echo "<td align='center' width='5%'>";
                                                echo "<b>$row[name]:</b>";
                                            echo "</td>";
                                            echo "<td>";
                                                echo "<b>$row[subject] </b> <br><br>";
                                                echo "$row[textarea]";
                                            echo "</td>";
                                        echo "</tr>";
                                        // comments
                                        echo "<form action='saveComment.php' method='post'>";
                                            $sql2 = "SELECT * FROM comments where postID = $row[sample_id]";
                                            $result2 = $db->query($sql2);
                                            if ($result2 ->num_rows > 0) {
                                                while($row2 = $result2->fetch_assoc()) {
                                                    echo "<tr id='comment'>";
                                                        echo "<td width='5%' id='spacer'></td>";
                                                        echo "<td><b>$row2[name]</b> <br><br> $row2[comment] </td>";
                                                    echo "</tr>";
                                                }
                                            }
                                            //commentors name
                                            echo "<tr>";
                                            echo "<input type='hidden' name='postID' value='$row[sample_id]'>";
                                            echo "</tr>";
                                            echo "<tr>";
                                                echo "<td width='5%' id='spacer'></td>";
                                                echo "<td>";
                                                    echo "<input type='text' class='form-control' name='name' placeholder='Name'>";
                                                echo "</td>";
                                            echo "</tr>";
                                            //comment and submit
                                            echo "<tr>";
                                                echo "<td width='5%' id='spacer'></td>";
                                                echo "<td>";
                                                    echo "<textarea class='form-control' name='comment' rows='3' placeholder='Comment'></textarea>";
                                                echo "</td>";
                                                echo "<td width = '5%'>";
                                                    echo "<button type='submit' class='btn btn-default'>Comment</button>";
                                                echo "</td>";
                                            echo "</tr>";
                                        echo "</form>";
                                    }
                                }
                            ?>
                        </table>
                    </div>
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
