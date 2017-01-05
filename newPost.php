<?php include_once("analyticstracking.php") ?>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>New Forum Post</title>

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
            margin-bottom: 30px;s
        }

        hr {
            visibility: hidden;
        }

        #wrapper {
            margin-top: 0px;
            margin-bottom: 50px;
            margin-left: 50px;
            margin-right: 50px;
        }

        #signup {
            text-align: center;
            padding-bottom: 20px;
        }

        label {
            float: left;
        }

        button {
            float: right;
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
                <li><a href="plots.php">Analytics</a></li>
            </ul>
        </div>
    </nav>

    <div id="wrapper">
        <div id="signup">
            <h2>New Post</h2>
        </div>
        <!-- Change server file name -->
        <form class="form-horizontal" id="newPost" action="savePost.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label"></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="name" placeholder="Name">
                </div>
            </div>
            <div class="form-group">
                <label for="subject" class="col-sm-2 control-label"></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="subject" placeholder="Subject">
                </div>
            </div>
            <div class="form-group">
                <label for="comment" class="col-sm-2 control-label"></label>
                <div class="col-sm-8">
                    <textarea class="form-control" name="comment" rows="8" placeholder="Post"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-8">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </div>
        </form>
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
            $('#newPost').formValidation({
                framework: 'bootstrap',
                icon: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                // input by name
                fields: {
                    name: {
                        validators: {
                            notEmpty: {
                                message: 'name is required'
                            },
                            stringLength: {
                                min: 4,
                                max: 30,
                                message: 'name must be between 4 and 30 characters'
                            },
                            regexp: {
                                regexp: /^[a-zA-Z0-9_]+$/,
                                message: 'name can only consist of letters, numbers and underscores'
                            }
                        }
                    },
                    subject: {
                        validators: {
                            notEmpty: {
                                message: 'subject is required'
                            },
                        }
                    },
                    comment: {
                        validators: {
                            notEmpty: {
                                message: 'message is required'
                            },
                        }
                    }
                }
            });
        });
    </script>

</body>

</html>
