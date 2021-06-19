<?php

namespace Tests\Feature;

use Tests\TestCase;

class SupplierTest extends TestCase
{
    /**
     * Please, do refactoring and testing of method Api/Console/Commands/WeekHoursFromJournal::calculateAmountOfHours.
     * And yes, at first you need to implement an algorithm inside the method.
     * @return void
     */
    public function testCalculateAmountOfHoursDuringTheWeekSuppliersAreWorking()
    {
        $hours = NAN; // Please, replace the line with result of calculation of calculateAmountOfHours
        $this->assertEquals(136, $hours,
            "Our suppliers are working X hours per week in total. Please, find out how much they work..");
    }
}
