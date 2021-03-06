<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagTodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tag_todo')->insert([
            [
                'id' => 1,
                'tag_id' => 1,
                'todo_id' => 1,
                'created_at' => '2022/01/01 11:11:11',
                'updated_at' => '2022/01/01 11:11:11',
            ],
            [
                'id' => 2,
                'tag_id' => 2,
                'todo_id' => 2,
                'created_at' => '2022/01/02 11:11:11',
                'updated_at' => '2022/01/02 11:11:11',
            ],
            [
                'id' => 3,
                'tag_id' => 3,
                'todo_id' => 3,
                'created_at' => '2022/01/03 11:11:11',
                'updated_at' => '2022/01/03 11:11:11',
            ],
            [
                'id' => 4,
                'tag_id' => 1,
                'todo_id' => 4,
                'created_at' => '2022/01/04 11:11:11',
                'updated_at' => '2022/01/04 11:11:11',
            ],
            [
                'id' => 5,
                'tag_id' => 1,
                'todo_id' => 6,
                'created_at' => '2022/01/06 11:11:11',
                'updated_at' => '2022/01/06 11:11:11',
            ],
            [
                'id' => 6,
                'tag_id' => 1,
                'todo_id' => 11,
                'created_at' => '2022/01/10 11:11:11',
                'updated_at' => '2022/01/10 11:11:11',
            ],
        ]);
    }
}
