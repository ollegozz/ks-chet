<?php declare(strict_types=1);

use App\Account;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class AccountsTableSeeder extends Seeder
{
    private $faker;

    public function __construct()
    {
        $this->faker = Faker::create();
    }

    /**
     * Run the database seeds.
     */
    public function run()
    {
        for ($i = 0; $i < 5000; ++$i) {
            try {
                Account::create([
                    'name'         => $this->faker->name,
                    'ls'           => random_int(
                        000000000000001,
                        999999999999999
                    ),
                    'house_number' => random_int(1, 99)
                ]);
            } catch (\Throwable $e) {
                echo $e->getMessage() . "\n";
                continue;
            }
        }
    }
}
