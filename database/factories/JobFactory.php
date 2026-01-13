<?php

namespace Database\Factories;

use App\Models\Job;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    protected $model = Job::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'title' => $this->faker->jobTitle(),
            'description' => $this->faker->paragraph(2, true),
            'salary' => $this->faker->numberBetween(40000, 120000),
            'tags' => implode(',', $this->faker->words(3)),
            'jop_type' => $this->faker->randomElement([
                'Full-Time',
                'Part-time',
                'Contract',
                'Temporary',
                'Internship',
                'Volunteer',
                'On-Call',
            ]),
            'remote' => $this->faker->boolean(),
            'requirements' => $this->faker->sentence(2, true),
            'benefits' => $this->faker->sentence(2, true),
            'address' => $this->faker->address(),
            'city' => $this->faker->city(),
            'state' => $this->faker->state(),
            'zipcode' => $this->faker->postcode(),
            'contact_email' => $this->faker->email(),
            'contact_phone' => $this->faker->phoneNumber(),
            'company_name' => $this->faker->company(),
            'company_description' => $this->faker->paragraph(2, true),
            'company_logo' => $this->faker->imageUrl(100, 100, 'business', true, 'logo'),
            'company_website' => $this->faker->url(),
        ];
    }
}
