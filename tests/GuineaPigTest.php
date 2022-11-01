<?php 
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\GuineaPig;

// require_once("../app/classes/guineapig.class.php");

class GuineaPigTest extends TestCase
{
    public function test_guinea_pig_class_calculates_today()
    {
        // $this->assertTrue(true);
        // $this->assertFalse(false);

        $guinea = new GuineaPig;
        // $guineaToday = $guinea->getToday();

        // $todayRaw = new \DateTime();
        // $todayCheck = $todayRaw->format('l jS F Y');

        // $this->assertEquals($todayCheck, $guineaToday);
    }

}