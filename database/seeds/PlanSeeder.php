<?php

use Faker\Generator as Faker;
use App\Plan;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i <30 ; $i++) { 
            $plan=new Plan();
            $plan->location=$faker->city();
            $plan->image=$faker->imageUrl(640, 480, 'city', true);
            $plan->departure_date=$faker->date($format = 'Y-m-d', $min = 'now');
            $plan->arrival_date=$faker->date($format = 'Y-m-d', $min = 'now');
            $plan->departure_location=$faker->city();
            $plan->arrival_location=$faker->city();
            $plan->room=$faker->randomElement(['Camera singola', 'Camera doppia', 'Camera tripla', 'Camera matrimoniale', 'Appartamento']);
            $plan->package=$faker->randomElement(['Solo pernottamento', 'Formula tutto incluso', 'Pernottamento e colazione', 'Mezza pensione', 'HB + Bev.Canton Line']);
            $plan->price=$faker->numberBetween($min = 500, $max = 9000);
            
            $plan->save();
        }

    }
}