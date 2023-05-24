<?php

namespace Database\Factories;

use App\Models\Skill;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Skill>
 */
class SkillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {
        $color = $this
            ->faker
            // ->fake()
            ->randomElement(Skill::getAvailableBackgroundColors());

        return [               
            'name' => $this->faker->unique()->word(),
            // 'name' => $this->fake()->unique()->word(),
            'color' =>$color,
        ];
    }

}
