<?php

namespace Database\Factories;

use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $techs = [
            'laravel, react, bootstrap, mysql',
            'laravel, blade, bootstrap, mysql',
            'php, mysql, bootstrap',
            'react',
            'java, spring, mysql',
            'java, swing',
            'js, api',
            'laravel, api',
            'spring, api',
            'laravel, php, curl',
        ];

        $platform = [
            'Laravel',
            'Laravel React',
            'React',
            'JavaScript',
            'Java',
            'PHP',
        ];

        return [
            'name' => $this->faker->text(200),
            'thumbnail' => 'images/placeholder-3.jpg',
            'description' => $this->faker->text(500),
            'techs' => $techs[mt_rand(0, count($techs)-1)],
            'platform' => $platform[mt_rand(0, count($platform)-1)],
            'priority' => mt_rand(1, 5),
            'user_id' => User::firstOrFail()->id,
            'github' => $this->faker->url(),
            'video' => $this->faker->url(),
            'live' => $this->faker->url(),
        ];
    }
}
