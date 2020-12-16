<?php

namespace Database\Seeders;

use App\Models\Todo;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Seeder;

final class TodoSeeder extends Seeder
{
    private int $todoCount = 5;

    private Collection $todos;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->todos = Todo::factory($this->todoCount)->create();
    }
}
