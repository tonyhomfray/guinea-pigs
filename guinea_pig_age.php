<?php

// $piggies_bought_raw = date_create_from_format('j-M-Y', '3-Apr-2021');
// $piggies_bought = date_format($piggies_bought_raw, 'l jS F Y');

// echo "Maisy and Coco were bought on {$piggies_bought}.<br/><br/>";

// $today_raw = date_create();
// $today = date_format($today_raw, 'D jS F Y');

// echo "Today is {$today}.<br/><br/>";

// $interval = date_diff($piggies_bought_raw, $today_raw);
// $days_owned = $interval->days;
// echo "We have owned Maisy and Coco for {$days_owned} days!<br/><br/>";



$piggies_bought_raw = DateTime::createFromFormat('j-M-Y', '3-Apr-2021');
$piggies_bought = $piggies_bought_raw->format('l jS F Y');

$today_raw = new DateTime();
$today = $today_raw->format('l jS F Y');

$interval_from_purchase = $piggies_bought_raw->diff($today_raw);
$years_owned = $interval_from_purchase->y;
$months_owned = $interval_from_purchase->m;
$days_owned = $interval_from_purchase->d;
$total_days_owned = $interval_from_purchase->days;


// We were told they were 6 weeks old. 6 * 7 = 42 days
$age_when_bought = new DateInterval('P42D');
$assumed_age = $piggies_bought_raw->sub($age_when_bought);
$interval_from_birth = $assumed_age->diff($today_raw);
$age_years = $interval_from_birth->y;
$age_months = $interval_from_birth->m;
$age_days = $interval_from_birth->d;

$age_total_days = $interval_from_birth->days;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Guinea Pigs</title>
</head>
<body>
    <header><h1>Guinea Pigs Ages</h1></header>

    <div id="main-container">
        <div id="main-content">
            <h2 id="headline">Maisy and Coco are <?php 
                if($age_years > 0) {
                    echo $age_years . "years, ";
                }
                if($age_months > 0)  {
                    echo $age_months . "months, ";
                }
                echo $age_days; ?>days old!</h2>
            <hr>
            <p>Maisy and Coco were bought on <?php echo $piggies_bought; ?>.</p>
            <p>Today is <?php echo $today; ?>.</p>
            <hr>
            <p>We have owned Maisy and Coco for <?php echo $total_days_owned; ?> days!</p>
            <p>We have owned Maisy and Coco for <?php echo $years_owned; ?> years, <?php echo $months_owned; ?> months and <?php echo $days_owned; ?> days!</p>
            <hr>
            <p>We assume Maisy and Coco are <?php echo $age_total_days; ?> days old!</p>
            <p>We assume Maisy and Coco are <?php echo $age_years; ?> years, <?php echo $age_months; ?> months and <?php echo $age_days; ?> days old!</p>
        </div> <!-- #main content -->
    </div> <!-- #main-content --->

</body>
</html>