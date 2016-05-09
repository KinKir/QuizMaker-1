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
    DB::table('admins')->insert([
      'name'      => 'Murad Sofiyev',
      'email'     => 'murad.s@code.edu.az',
      'password'  => Hash::make('12345Admin'),
    ]);

}

}
