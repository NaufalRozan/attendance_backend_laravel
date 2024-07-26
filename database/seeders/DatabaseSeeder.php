<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Company;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Naufal Rozan',
            'email' => 'admin@admin.com',
            'password' => Hash::make('12345678'),
        ]);

        // data dummy for company
        Company::create([
            'name' => 'HashMicro',
            'email' => 'hello@hashmicro.com',
            'address' => 'Jalan Balikpapan Raya No. 9 A - C, Daerah Khusus Ibukota Jakarta 10160',
            'latitude' => '-6.170602299928138',
            'longitude' => '106.81335862883563',
            'radius_km' => '5',
            'time_in' => '09:00',
            'time_out' => '15:00',
        ]);

        $this->call([
            AttendanceSeeder::class,
        ]);
    }
}
