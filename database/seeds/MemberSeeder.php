<?php

use Illuminate\Database\Seeder;
// use Faker;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $faker->addProvider(new Faker\Provider\en_US\Person($faker));
        $faker->addProvider(new Faker\Provider\Internet($faker));
        $faker->addProvider(new Faker\Provider\en_US\PhoneNumber($faker));

        DB::table('subscriptions')->insert([
          [
            'name' => 'Silver',
            'price' => 50.0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
          ],
          [
            'name' => 'Gold',
            'price' => 75.0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
          ],
          [
            'name' => 'Platinum',
            'price' => 99.0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
          ]
        ]);

        $subscription_ids = DB::table('subscriptions')->pluck('id');

        for($i = 0; $i < 10; $i++) {
            DB::table('members')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'phone' => $faker->phoneNumber,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'subscription_id' => $subscription_ids->shuffle()->first()
            ]);
        }
    }
}
