<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $types = Type::all();
        $types_id = $types->pluck('id')->all();
        for ($i = 0; $i < 10; $i++) {
            $new_project = new Project();
            $new_project->slug = Str::slug($new_project->nome_progetto);
        }
    }
}
