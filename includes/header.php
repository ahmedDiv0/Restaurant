<?php
$companyName = 'The name of the resturant';
include('includes/array.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet">
    <title><?php echo TITLE; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body id="final-example">
    <div class="wrapper">

        <div id="banner" style="background-image:url(img/restaurant-setting-with-wooden-chairs-tables-beautiful-view.jpg);">

            <div class="move">
                <img class="left" src="img/1.png" alt="leaves">
                <img class="right" src="img/2.png" alt="leaves">
                <img class="center" src="img/3.png" alt="location">
                <img class="right-2" src="img/4.png" alt="fork">
                <img class="left-2" src="img/5.png" alt="spon">

                <h1 class="texttt">Resturant</h1>
            </div>


        </div>

        <div id="nav">
            <?php include('includes/nav.php');  ?>
        </div>

        <div class="content">