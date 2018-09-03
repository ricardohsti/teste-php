<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Produto;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->truncate();

        factory(Produto::class, 50)->create();
    }
}
