<?php

// $piggies_bought_raw = DateTime::createFromFormat('j-M-Y', '3-Apr-2021');
// $piggies_bought = $piggies_bought_raw->format('l jS F Y');

// $piggies_born_raw = DateTime::createFromFormat('j-M-Y', '20-Feb-2021');
// $piggies_born = $piggies_born_raw->format('l jS F Y');

// $today_raw = new DateTime();
// // $today_raw = new DateTime('today');    // Use this version to pretend their birthday is today
// $today = $today_raw->format('l jS F Y');
// $this_year = $today_raw->format('Y');
// $next_year = $this_year +1;

// $interval_from_purchase = $piggies_bought_raw->diff($today_raw);
// $years_owned = $interval_from_purchase->y;
// $months_owned = $interval_from_purchase->m;
// $days_owned = $interval_from_purchase->d;
// $total_days_owned = $interval_from_purchase->days;


// // We were told they were 6 weeks old. 6 * 7 = 42 days
// $age_when_bought = new DateInterval('P42D');
// $assumed_age = $piggies_bought_raw->sub($age_when_bought);
// $interval_from_birth = $assumed_age->diff($today_raw);
// $age_years = $interval_from_birth->y;
// $age_months = $interval_from_birth->m;
// $age_days = $interval_from_birth->d;

// $age_total_days = $interval_from_birth->days;


$this_years_birthday_raw = new DateTime($this_year . '-02-20');
// $this_years_birthday_raw = new DateTime('today');    // Use this version to pretend their birthday is today
$is_birthday = false;

if($this_years_birthday_raw < $today_raw) {
    $next_birthday_raw = new DateTime($next_year . '-02-20');
} else if($this_years_birthday_raw > $today_raw) {
    $next_birthday_raw = $this_years_birthday_raw;
} else {
    $next_birthday_raw = $today_raw;
    $is_birthday = true;
}
$next_birthday = $next_birthday_raw->format('l jS F Y');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
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
                if($age_years > 0) {
                    echo $age_years . " years, ";
                }
                if($age_months > 0)  {
                    echo $age_months . " months, ";
                }
                echo $age_days; ?> days old!</h2>
            <hr>
            <p>Maisy and Coco were bought on <?php echo $piggies_bought; ?>.</p>
            <p>We assume they were born on <?php echo $piggies_born; ?>.</p>
            <p>Today is <?php echo $today; ?>.</p>
            <hr>
            <p>We have owned Maisy and Coco for <?php echo $total_days_owned; ?> days!</p>
            <p>We have owned Maisy and Coco for <?php 
                if($years_owned > 0) {
                    echo $years_owned . " years, ";
                }
                if($months_owned > 0)  {
                    echo $months_owned . " months, ";
                }
                echo $days_owned; ?> days!</p>
            <hr>
            <p>We assume Maisy and Coco are <?php echo $age_total_days; ?> days old!</p>
            <p>Maisy and Coco are therefore <?php if($age_years > 0) {
                    echo $age_years . " years, ";
                }
                if($age_months > 0)  {
                    echo $age_months . " months, ";
                }
                echo $age_days; ?> days old!</p>

            <hr>
            <p>Their next birthday is <?php 
                if($is_birthday) {
                    echo "TODAY!!" . "<br>";
                    echo "Happy Birthday Maisy and Coco!!";
                } else {
                    echo $next_birthday;
                }
            ?></p>
        </div> <!-- #main content -->
    </div> <!-- #main-content --->

</body>
</html>