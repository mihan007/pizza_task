<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    protected $toTruncate = ['products'];

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        foreach($this->toTruncate as $table) {
            DB::table($table)->truncate();
        }
        $this->call(ProductsTableSeeder::class);
        Model::reguard();
    }
}
