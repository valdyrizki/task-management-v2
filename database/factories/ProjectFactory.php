<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Project::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'project_name' => $this->faker->name,
            'description' => $this->faker->text,
            'client_name' => $this->faker->name,
            'cost' => 120000,
            'due_date' => now(),
            'status' => 1,
            'created_by' => 2,
        ];
    }
}
