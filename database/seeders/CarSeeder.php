<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{

    public $cars = [
        [
            'name'  => '2-series Gran Coupe',
            'mark'  => 'BMW',
            'price' => '99.99',
            'doors' => '4',
            'passengers' => '5',
            'luggage' => '2',
            'transmission' => 'manual',
            'air_conditioning' => 'yes',
            'minimum_age' => '2020',
            'image' => 'assets/images/cars/01.jpg',
        ],
        [
            'name'  => 'Sport 4dr All-Wheel Drive Sedan',
            'mark'  => 'Subaru',
            'price' => '87.99',
            'doors' => '4',
            'passengers' => '5',
            'luggage' => '2',
            'transmission' => 'manual',
            'air_conditioning' => 'yes',
            'minimum_age' => '2020',
            'image' => 'assets/images/cars/02.jpg',
        ],
        [
            'name'  => 'Santa Fe',
            'mark'  => 'Hyundai',
            'price' => '76.99',
            'doors' => '4',
            'passengers' => '5',
            'luggage' => '2',
            'transmission' => 'manual',
            'air_conditioning' => 'yes',
            'minimum_age' => '2018',
            'image' => 'assets/images/cars/03.jpg',
        ],
        [
            'name'  => 'HR-V RS Auto MY21',
            'mark'  => 'Hyundai',
            'price' => '65.99',
            'doors' => '4',
            'passengers' => '4',
            'luggage' => '2',
            'transmission' => 'manual',
            'air_conditioning' => 'yes',
            'minimum_age' => '2018',
            'image' => 'assets/images/cars/04.jpg',
        ],
        [
            'name'  => 'A-class Limousine models',
            'mark'  => 'Mercedes-Benz',
            'price' => '89.99',
            'doors' => '4',
            'passengers' => '4',
            'luggage' => '2',
            'transmission' => 'manual',
            'air_conditioning' => 'yes',
            'minimum_age' => '2018',
            'image' => 'assets/images/cars/05.jpg',
        ],
        [
            'name'  => '370z',
            'mark'  => 'nissan',
            'price' => '149.99',
            'doors' => '2',
            'passengers' => '2',
            'luggage' => '2',
            'transmission' => 'automatic',
            'air_conditioning' => 'yes',
            'minimum_age' => '2018',
            'image' => 'assets/images/cars/06.jpg',
        ],
        [
            'name'  => 'WRX, STI',
            'mark'  => 'Subaru',
            'price' => '149.99',
            'doors' => '4',
            'passengers' => '4',
            'luggage' => '2',
            'transmission' => 'automatic',
            'air_conditioning' => 'yes',
            'minimum_age' => '2018',
            'image' => 'assets/images/cars/07.jpg',
        ],
        [
            'name'  => 'Mustang GT Premium',
            'mark'  => 'Ford',
            'price' => '39.99',
            'doors' => '4',
            'passengers' => '4',
            'luggage' => '2',
            'transmission' => 'automatic',
            'air_conditioning' => 'yes',
            'minimum_age' => '2018',
            'image' => 'assets/images/cars/08.jpg',
        ],
        [
            'name'  => 'DB11 Coupe',
            'mark'  => 'Aston Martin',
            'price' => '199.99',
            'doors' => '4',
            'passengers' => '4',
            'luggage' => '2',
            'transmission' => 'automatic',
            'air_conditioning' => 'yes',
            'minimum_age' => '2018',
            'image' => 'assets/images/cars/09.jpg',
        ],
        [
            'name'  => 'RS 7',
            'mark'  => 'Audi',
            'price' => '199.99',
            'doors' => '4',
            'passengers' => '4',
            'luggage' => '2',
            'transmission' => 'automatic',
            'air_conditioning' => 'yes',
            'minimum_age' => '2018',
            'image' => 'assets/images/cars/10.jpg',
        ],
    ];


    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Car::factory(10)->create();

        foreach($this->cars as $car){
            Car::create([
                'name'  => $car['name'],
                'mark'  => $car['mark'],
                'price' => $car['price'],
                'doors' => $car['doors'],
                'passengers' => $car['passengers'],
                'luggage' => $car['luggage'],
                'transmission' => $car['transmission'],
                'air_conditioning' => $car['air_conditioning'],
                'minimum_age' => $car['minimum_age'],
                'image' => $car['image'],
            ]);
        }
        
    }
}
