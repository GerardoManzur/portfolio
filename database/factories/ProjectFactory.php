<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {
        $colorName = $this
            ->fake()            
            ->randomElement(Project::getAvailableTextColors());

        $iconName = $this
            ->fake()
            // ->faker
            ->randomElement(Project::getAvailableIcons());

        return [
            'title' => $this->fake()->unique()->word(2, true),
            'description' => $this->fake()->sentence(),
            'color' => $colorName,
            'icon_name' => $iconName,
        ];
    }
}
