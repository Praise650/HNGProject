<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $current_day = Carbon::now()->format('d-m-Y');
        $utc_time = Carbon::now()->format('H:i:s');
        return [
            'slack_name' => "Praise Afuwape",
            "current_day" => $current_day,
            "utc_time" => $utc_time,
            "track" => 'Backend',
            "github_file_url" => 'https://github.com/praise650/repo/blob/main/file_name.ext',
            "github_repo_url" => "https://github.com/praise650/repo",
            "status_code" => 200,
        ];
    }
}
