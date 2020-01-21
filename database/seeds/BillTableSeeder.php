<?php

use Illuminate\Database\Seeder;

class BillTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bills')->insert([
            'user_id' => 1,
            'amount' => 10000,
            'type' => 'cash',
            'month' => 'januari',
            'due_date' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
