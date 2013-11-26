<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>THE VIRA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Le styles -->
        <?php
        foreach ($css as $cssFile) {
            echo '<link rel="stylesheet" href="' . $cssFile . '.css">' . PHP_EOL;
        }
        ?>
        <style type="text/css">
            /* entypo */
            [class*="entypo-"]:before {
                font-family:'entypo', sans-serif;
            }
            /* fontawesome */
            [class*="fontawesome-"]:before {
                font-family:'FontAwesome', sans-serif;
            }
            body {
                padding-top: 60px;
                padding-bottom: 0;
            }
        </style>


        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
            <![endif]-->
        <!-- Fav and touch icons -->
        <link rel="shortcut icon" href="assets/ico/minus.png">
    </head>

    <body>