<?php

class DatabaseSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
		$this->call('ClosingTableSeeder');
		$this->call('TaskTableSeeder');
		$this->call('SubscriptionTableSeeder');
	}

}

class UserTableSeeder extends Seeder {
    public function run()
    {
        DB::table('users')->delete();
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 100; $i++)
		{
		  $user = User::create(array(
		    'firstname' => $faker->firstName,
		    'lastname' => $faker->lastName,
		    'company' => $faker->company,
		    'email' => $faker->email,
		    'phone' => $faker->phoneNumber,
		    'password' => $faker->word
		  ));
		}
    }
}

class ClosingTableSeeder extends Seeder {
    public function run()
    {
        DB::table('closings')->delete();
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 500; $i++)
		{
		  $user = Closing::create(array(
		    'user_id' => $faker->numberBetween(1, 100),
		    'agent_id' => $faker->numberBetween(1,100),
		    'title' => $faker->catchPhrase,
		    'closes_at' => $faker->dateTimeBetween('now', '+6 months')
		  ));
		}
    }
}

class TaskTableSeeder extends Seeder {
    public function run()
    {
        DB::table('tasks')->delete();
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 500; $i++)
		{
		  $user = Task::create(array(
		    'name' => $faker->catchPhrase
		  ));
		}
    }
}

class SubscriptionTableSeeder extends Seeder {
    public function run()
    {
        DB::table('subscriptions')->delete();
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 100; $i++)
		{
		  $user = Subscription::create(array(
		    'user_id' => $faker->numberBetween(1, 100),
		    'level_id' => $faker->numberBetween(1,5),
		    'expires_at' => $faker->dateTimeBetween('now', '+6 months')
		  ));
		}
    }
}