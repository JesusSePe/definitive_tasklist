<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        /*for ($i=0; $i < 15; $i++) {
            DB::table('categories')->insert([
                'name' => Str::random(10)
            ]);
        }*/
        Task::factory()
            ->count(50)
            //->hasPosts(1)
            ->create();
    }
}
