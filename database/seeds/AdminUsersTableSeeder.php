<?php


use Illuminate\Database\Seeder;
use App\Administrator;

class AdminUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = 10;
        factory(Administrator::class, $count)->create();
    }
}
