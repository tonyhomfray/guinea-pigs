<?php 

require('./includes/init.php');

class GuineaPig
{
    private $today_raw;
    private $today; // THIS
    private $this_year;
    private $next_year;

    private $interval_from_purchase;
    public $years_owned; // THIS
    public $months_owned; // THIS
    public $days_owned; // THIS
    // public $total_days_owned; // THIS

    public $age_when_bought; // THIS
    private $assumed_age_when_bought;
    public $interval_from_birth;
    public $age_years; // THIS
    public $age_months; // THIS
    public $age_days; // THIS

    // public $age_total_days; // THIS


    private $this_years_birthday_raw;

    public $is_birthday = false;


    public $next_birthday;


    public function __construct()
    {
        $this->today_raw = new DateTime();
        // $this->today_raw = new DateTime('today');    // Use this version to pretend their birthday is today
        $this->today = $this->today_raw->format('l jS F Y');
        $this->this_year = $this->today_raw->format('Y');
        $this->next_year = $this->this_year +1;

        $this->interval_from_purchase = PIGGIES_BOUGHT_RAW->diff($this->today_raw);
        $this->years_owned = $this->interval_from_purchase->y;
        $this->months_owned = $this->interval_from_purchase->m;
        $this->days_owned = $this->interval_from_purchase->d;
        $this->total_days_owned = $this->interval_from_purchase->days;

        // We were told they were 6 weeks old. 6 * 7 = 42 days
        $this->age_when_bought = new DateInterval('P42D');
        $this->assumed_age_when_bought = PIGGIES_BOUGHT_RAW->sub($this->age_when_bought);
        $this->interval_from_birth = $this->assumed_age_when_bought->diff($this->today_raw);
        $this->age_years = $this->interval_from_birth->y;
        $this->age_months = $this->interval_from_birth->m;
        $this->age_days = $this->interval_from_birth->d;

        $this->age_total_days = $this->interval_from_birth->days;

        $this->this_years_birthday_raw = new DateTime($this->this_year . '-02-20');
        // $this->this_years_birthday_raw = new DateTime('today');    // Use this version to pretend their birthday is today
        if($this->this_years_birthday_raw < $this->today_raw) {
            $this->next_birthday_raw = new DateTime($this->next_year . '-02-20');
        } else if($this->this_years_birthday_raw > $this->today_raw) {
            $this->next_birthday_raw = $this->this_years_birthday_raw;
        } else {
            $this->next_birthday_raw = $this->today_raw;
            $this->is_birthday = true;
        }
        $this->next_birthday = $this->next_birthday_raw->format('l jS F Y');
    }


    // GETTERS
    
    public function getToday()
    {
        return $this->today;
    }

}
