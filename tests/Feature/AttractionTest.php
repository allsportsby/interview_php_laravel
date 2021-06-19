<?php

namespace Tests\Feature;

use Tests\TestCase;


/**
 * We need to move working hours from suppliers to attractions itself.
 * Previous developer saved working hours as JSON file inside suppliers.
 *
 * We are implementing ability to register on future attractions for clients with help of our mobile application.
 * On other side, suppliers need to change, register status of temporarily unavailable if they have issues.
 * Also, some groups might be open or closed depends from season and activities.
 *
 * The structure of attraction might be:
 * - id
 * - name: Entrance, 45 Minute Pool, Sauna + Pool etc.
 * - attraction_type: gym club, fitness, yoga, pool
 *
 * The structure of working hours might be:
 * - id
 * - attraction_id
 * - repeat_type: week, month, year
 * - open_status: enum['open', 'busy', 'request']
 * - from: datetime
 * - till: datetime
 *
 * Please, migrate working hours from suppliers to working hours in database as described above.
 * We need to do it automatically.
 * Remove working hours from suppliers table.
 *
 * !The output of App/Http/Controllers/SupplierController::index need to be the same, as it was before.
 *
 * It will be a plus if you create a CRUD for attractions with working hours based on TDD.
 *
 * Class AttractionTest
 * @package Tests\Feature
 */
class AttractionTest extends TestCase
{
    public function testAttractionWorkingHours() {
        $this->fail("Check if working hours are set in attraction by default");
    }
}
