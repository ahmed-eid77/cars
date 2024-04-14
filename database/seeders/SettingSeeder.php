<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::truncate();
        
        Setting::create([
            'email' => 'carRental@test.com',
            'phone_1' => '123456789',
            'phone_2'  => '987654321',
            'address' => '2698 Hurst Rd North Pole Alabama',
        ]);
    }
}
