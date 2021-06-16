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

echo "Maisy and Coco were bought on {$piggies_bought}.<br/><br/>";

$today_raw = new DateTime();
$today = $today_raw->format('D jS F Y');

echo "Today is {$today}.<br/><br/>";

$interval_from_purchase = $piggies_bought_raw->diff($today_raw);
$years_owned = $interval_from_purchase->y;
$months_owned = $interval_from_purchase->m;
$days_owned = $interval_from_purchase->d;
$total_days_owned = $interval_from_purchase->days;
echo "We have owned Maisy and Coco for {$total_days_owned} days!<br/><br/>";
echo "We have owned Maisy and Coco for {$years_owned} years, {$months_owned} months and {$days_owned} days!<br/><br/>";

// We were told they were 6 weeks old. 6 * 7 = 42 days
$age_when_bought = new DateInterval('P42D');
$assumed_age = $piggies_bought_raw->sub($age_when_bought);
$interval_from_birth = $assumed_age->diff($today_raw);
$age_years = $interval_from_birth->y;
$age_months = $interval_from_birth->m;
$age_days = $interval_from_birth->d;

$age_total_days = $interval_from_birth->days;

echo "We assume Maisy and Coco are {$age_total_days} days old!<br/><br/>";
echo "We assume Maisy and Coco are {$age_years} years, {$age_months} months and {$age_days} days old!<br/><br/>";

?>