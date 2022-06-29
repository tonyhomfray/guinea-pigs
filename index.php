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
            <h2 id="headline">Maisy and Coco are <?php 
                if($gp->age_years > 0) {
                    echo $gp->age_years . " years, ";
                }
                if($gp->age_months > 0)  {
                    echo $gp->age_months . " months, ";
                }
                echo $gp->age_days; ?> days old!</h2>
            <hr>
            <p>Maisy and Coco were bought on <?php echo PIGGIES_BOUGHT; ?>.</p>
            <p>We assume they were born on <?php echo PIGGIES_BORN; ?>.</p>
            <p>Today is <?php echo $gp->today; ?>.</p>
            <hr>
            <p>We have owned Maisy and Coco for <?php echo $gp->total_days_owned; ?> days!</p>
            <p>We have owned Maisy and Coco for <?php 
                if($gp->years_owned > 0) {
                    echo $gp->years_owned . " years, ";
                }
                if($gp->months_owned > 0)  {
                    echo $gp->months_owned . " months, ";
                }
                echo $gp->days_owned; ?> days!</p>
            <hr>
            <p>We assume Maisy and Coco are <?php echo $gp->age_total_days; ?> days old!</p>
            <p>Maisy and Coco are therefore <?php if($gp->age_years > 0) {
                    echo $gp->age_years . " years, ";
                }
                if($gp->age_months > 0)  {
                    echo $gp->age_months . " months, ";
                }
                echo $gp->age_days; ?> days old!</p>

            <hr>
            <p>Their next birthday is <?php 
                if($gp->is_birthday) {
                    echo "TODAY!!" . "<br>";
                    echo "Happy Birthday Maisy and Coco!!";
                } else {
                    echo $gp->next_birthday;
                }
            ?></p>
        </div> <!-- #main content -->
    </div> <!-- #main-content --->

</body>
</html>