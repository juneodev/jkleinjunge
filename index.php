<?php

/**
 * Created by PhpStorm.
 * User: ggdu1
 * Date: 01/12/2017
 * Time: 13:03
 */

?>

<?php include('includes/mail.php'); ?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
          rel="stylesheet">


    <link rel="icon" type="image/png" href="img/favicon.png"/>

    <title>Cunéo Jérémie | Développeur Web à Tahiti</title>

    <script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>

    </body>

    <script src="dist/bundle.js"></script>

    <!--<link rel="stylesheet" href="css/main.css">-->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56511477-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-56511477-1');
    </script>


</head>
<body>

<?php
include('includes/header.php');
include('includes/jumbotron.php');
include('includes/services.php');
include('includes/work.php');
include('includes/conception_phases.php');
include('includes/pricing.php');
include('includes/clients_feedback.php');
include('includes/about_me.php');
include('includes/contact.php');
include('includes/footer.php');
include('includes/top_anchor.php');
?>

</html>
