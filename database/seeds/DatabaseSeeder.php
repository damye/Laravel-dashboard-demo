<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
//        DB::table('users')->insert([
//            'nickname' => str_random(10),
//            'email' => str_random(10).'@betme.com',
//            'password' => bcrypt('secret'),
//        ]);
        $this->call('TasksTableSeeder');
        $this->command->info('Task table seeded!');
    }
}
