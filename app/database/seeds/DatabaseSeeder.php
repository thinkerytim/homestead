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
		$this->call('TaskTableSeeder');
		$this->call('SubscriptionTableSeeder');
		$this->call('ClosingTableSeeder');
		$this->call('DocumentTableSeeder');
		$this->call('DocMidTableSeeder');
		$this->call('TaskMidTableSeeder');
	}

}

class UserTableSeeder extends Seeder {
    public function run()
    {
        DB::table('users')->truncate();
        Eloquent::unguard();
		$user = User::create(array(
		    'firstname' => 'Tim',
		    'lastname' => 'Kramer',
		    'company' => 'Thinkery',
		    'email' => 'tim@thethinkery.net',
		    'phone' => '',
		    'role' => 3,
		    'password' => Hash::make('sea1sea')
		  ));

		$user = User::create(array(
		    'firstname' => 'Broker',
		    'lastname' => 'User',
		    'company' => 'NW Realty',
		    'email' => 'broker@example.com',
		    'phone' => '',
		    'role' => 2,
		    'password' => Hash::make('sea1sea')
		  ));

		$user = User::create(array(
		    'firstname' => 'Agent',
		    'lastname' => 'User',
		    'company' => 'NW Realty',
		    'email' => 'agent@example.com',
		    'phone' => '',
		    'role' => 1,
		    'parent' => 2,
		    'password' => Hash::make('sea1sea')
		  ));

		$user = User::create(array(
		    'firstname' => 'Client',
		    'lastname' => 'User',
		    'company' => '',
		    'email' => 'client@example.com',
		    'phone' => '',
		    'role' => 0,
		    'parent' => 0,
		    'password' => Hash::make('sea1sea')
		  ));

        $faker = Faker\Factory::create();
        for ($i = 0; $i < 5; $i++)
		{
		  Eloquent::unguard();
		  $user = User::create(array(
		    'firstname' => $faker->firstName,
		    'lastname' => $faker->lastName,
		    'company' => $faker->company,
		    'email' => $faker->email,
		    'phone' => $faker->phoneNumber,
		    'role' => $faker->numberBetween(0,1),
		    'password' => Hash::make($faker->word)
		  ));
		}
    }
}

class TaskTableSeeder extends Seeder {
    public function run()
    {
        DB::table('tasks')->truncate();
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 50; $i++)
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
        DB::table('subscriptions')->truncate();
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 6; $i++)
		{
		  $user = Subscription::create(array(
		    'user_id' => $faker->numberBetween(1,5),
		    'level_id' => $faker->numberBetween(1,5),
		    'expires_at' => $faker->dateTimeBetween('now', '+6 months')
		  ));
		}
    }
}

class ClosingTableSeeder extends Seeder {
    public function run()
    {
        DB::table('closings')->truncate();
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 50; $i++)
		{
		  $user = Closing::create(array(
		    'user_id' => $faker->numberBetween(1,6),
		    'agent_id' => $faker->numberBetween(1,6),
		    'title' => $faker->catchPhrase,
		    'closes_at' => $faker->dateTimeBetween('now', '+6 months')
		  ));
		}
    }
}

class DocumentTableSeeder extends Seeder {
    public function run()
    {
        DB::table('documents')->truncate();
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 10; $i++)
		{
		  $user = Document::create(array(
		    'title' => $faker->company,
		    'description' => $faker->bs
		    //'path' => $faker->file('/tmp', '/tmp')
		  ));
		}
    }
}

class DocMidTableSeeder extends Seeder {
    public function run()
    {
        DB::table('closing_document')->truncate();
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 10; $i++)
		{
			DB::table('closing_document')->insert([
	            'closing_id' => rand(1,10),
	            'document_id' => rand(1, 10)
	        ]);
		}
    }
}

class TaskMidTableSeeder extends Seeder {
    public function run()
    {
        DB::table('closing_task')->truncate();
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 100; $i++)
		{
			DB::table('closing_task')->insert([
	            'closing_id' => rand(1,10),
	            'task_id' => rand(1, 50),
	            'status' => rand(0, 1),
	            'notes' => $faker->text(150),
	            'priority' => rand(0,3),
	            'due_at' => $faker->dateTimeBetween('now', '+1 months')
	        ]);
		}
    }
}