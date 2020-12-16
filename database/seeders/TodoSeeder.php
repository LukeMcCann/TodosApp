<?php

namespace Database\Seeders;

use App\Models\Todo;
use Illuminate\Database\Seeder;

final class TodoSeeder extends Seeder
{
    private $todos;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->todos = Todo::factory(5)->create();
    }
}
