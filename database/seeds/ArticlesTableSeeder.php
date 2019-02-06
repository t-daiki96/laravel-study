<?php // database/seeds/ArticlesTableSeeder.php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;
use App\Article;

class ArticlesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('articles')->delete(); // ①
        factory(App\Article::class, 20)->create();
    }
}
