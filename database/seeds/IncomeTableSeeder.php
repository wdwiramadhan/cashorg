<?php

use Illuminate\Database\Seeder;

class IncomeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('incomes')->insert([
            'user_id' => 1,
            'amount' => 10000,
            'type' => 'cash',
            'month' => 'januari',
            'organization_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
