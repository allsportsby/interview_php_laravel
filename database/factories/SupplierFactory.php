<?php

namespace Database\Factories;

use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

class SupplierFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Supplier::class;

    /**
     * @param $hourRangeFrom
     * @param $hourRangeTill
     * @param $minuteRange
     * @return array[string[]]
     */
    protected function getTimeRange()
    {
        $range = [
            $this->faker->time('H:i'),
            $this->faker->time('H:i')
        ];
        return [
            [min($range), max($range)]
        ];
    }

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->company,
            'info' => $this->faker->realText(200),
            'rules' => $this->faker->text(100),
            'district' => $this->faker->city,
            'url' => $this->faker->url,
            'opening_hours_text' => \json_encode([
                'mon' => $this->getTimeRange(),
                'tue' => $this->getTimeRange(),
                'wed' => $this->getTimeRange(),
                'thu' => $this->getTimeRange(),
                'fri' => $this->getTimeRange(),
                'sat' => $this->getTimeRange(),
                'sun' => $this->getTimeRange()
            ])
        ];
    }
}
