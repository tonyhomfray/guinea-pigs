<?php 
require('./classes/guineapig.class.php');
$gp = new GuineaPig();
$stop = $gp->age();
$boom;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./includes/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lorinda+Shadow">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Monoton">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fredericka+the+Great">
    <title>Guinea Pigs</title>
</head>
<body>
    <header><h1>Guinea Pigs Ages</h1></header>

    <div id="main-container">
        <div id="main-content">
            <h2 id="headline">Maisy and Coco are 
            <?php if($gp->age()["years"] > 0) {
                    echo $gp->age()["years"];
                    echo $gp->age()["years"] > 1 ? " years, " : " year, ";
                }
                if($gp->age()["months"] > 0)  {
                    echo $gp->age()["months"];
                    echo $gp->age()["months"] > 1 ? " months, " : " month, ";
                }
                if($gp->age()["days"] > 0)  {
                    echo $gp->age()["days"];
                    echo $gp->age()["days"] > 1 ? " days old." : " day old.";
                }
                ?></h2>
            <hr>
            <p>We bought Maisy and Coco on&nbsp;<strong><?php echo PIGGIES_BOUGHT; ?></strong>.</p>
            <p>We believe they were born on&nbsp;<strong><?php echo PIGGIES_BORN; ?></strong>&nbsp;and celebrate their birthdays on this day.</p>
            <!-- <p>Today is <?php echo $gp->getToday(); ?>.</p> -->
            <hr>
            <!-- <p>We assume Maisy and Coco are <?php echo $gp->age_total_days; ?> days old!</p> -->
            <p>Maisy and Coco are therefore 
                <?php if($gp->age()["years"] > 0) {
                    echo $gp->age()["years"];
                    echo $gp->age()["years"] > 1 ? " years, " : " year, ";
                }
                if($gp->age()["months"] > 0)  {
                    echo $gp->age()["months"];
                    echo $gp->age()["months"] > 1 ? " months, " : " month, ";
                }
                if($gp->age()["days"] > 0)  {
                    echo $gp->age()["days"];
                    echo $gp->age()["days"] > 1 ? " days old." : " day old.";
                }
                ?>
            </p>
            <hr>
            <!-- <p>We have owned Maisy and Coco for <?php echo $gp->total_days_owned; ?> days!</p> -->
            <p>We have owned Maisy and Coco for 
                <?php 
                if($gp->timeOwned()["years"] > 0) {
                    echo $gp->timeOwned()["years"];
                    echo $gp->timeOwned()["years"] > 1 ? " years, " : " year, ";
                }
                if($gp->timeOwned()["months"] > 0)  {
                    echo $gp->timeOwned()["months"];
                    echo $gp->timeOwned()["months"] ? " months, " : " month, ";
                }
                if($gp->timeOwned()["days"] > 0)  {
                    echo $gp->timeOwned()["days"];
                    echo $gp->timeOwned()["days"] > 1 ? " days." : " day.";
                }
                ?>
            </p>
            <hr>

            <p>Their next birthday is&nbsp;<strong><?php 
                if($gp->is_birthday) {
                    echo "TODAY!!" . "<br>";
                    echo "Happy Birthday Maisy and Coco!!";
                } else {
                    echo $gp->next_birthday;
                }
            ?></strong>&nbsp;</p>
        </div> <!-- #main content -->
    </div> <!-- #main-content --->

</body>
</html>