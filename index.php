<?php 
require('./classes/guineapig.class.php');
$gp = new GuineaPig();
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
            <?php if($gp->age_years > 0) {
                    echo $gp->age_years;
                    echo $gp->age_years > 1 ? " years, " : " year, ";
                }
                if($gp->age_months > 0)  {
                    echo $gp->age_months;
                    echo $gp->age_months > 1 ? " months, " : " month, ";
                }
                if($gp->age_days > 0)  {
                    echo $gp->age_days;
                    echo $gp->age_days > 1 ? " days old." : " day old.";
                }
                ?></h2>
            <hr>
            <p>We bought Maisy and Coco on&nbsp;<strong><?php echo PIGGIES_BOUGHT; ?></strong>.</p>
            <p>We believe they were born on&nbsp;<strong><?php echo PIGGIES_BORN; ?></strong>&nbsp;and celebrate their birthdays on this day.</p>
            <!-- <p>Today is <?php echo $gp->getToday(); ?>.</p> -->
            <hr>
            <!-- <p>We assume Maisy and Coco are <?php echo $gp->age_total_days; ?> days old!</p> -->
            <p>Maisy and Coco are therefore 
                <?php if($gp->age_years > 0) {
                    echo $gp->age_years;
                    echo $gp->age_years > 1 ? " years, " : " year, ";
                }
                if($gp->age_months > 0)  {
                    echo $gp->age_months;
                    echo $gp->age_months > 1 ? " months, " : " month, ";
                }
                if($gp->age_days > 0)  {
                    echo $gp->age_days;
                    echo $gp->age_days > 1 ? " days old." : " day old.";
                }
                ?>
            </p>
            <hr>
            <!-- <p>We have owned Maisy and Coco for <?php echo $gp->total_days_owned; ?> days!</p> -->
            <p>We have owned Maisy and Coco for 
                <?php 
                if($gp->years_owned > 0) {
                    echo $gp->years_owned;
                    echo $gp->years_owned > 1 ? " years, " : " year, ";
                }
                if($gp->months_owned > 0)  {
                    echo $gp->months_owned;
                    echo $gp->months_owned ? " months, " : " month, ";
                }
                if($gp->days_owned > 0)  {
                    echo $gp->days_owned;
                    echo $gp->days_owned > 1 ? " days." : " day.";
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