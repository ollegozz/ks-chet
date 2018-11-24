<?php declare(strict_types=1);

use App\Counter;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class CountersTableSeeder extends Seeder
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
        $accounts = \App\Account::all();

        foreach ($accounts as $account) {
            for ($i = 0; $i < 3; ++$i) {
                try {
                    Counter::create([
                        'name'       => 'Счетчик №' . $i++,
                        'account_id' => $account->id,
                        'serial'     => random_int(000001, 999999)
                    ]);
                } catch (\Throwable $e) {
                    echo $e->getMessage() . "\n";
                    continue;
                }
            }
        }
    }
}
