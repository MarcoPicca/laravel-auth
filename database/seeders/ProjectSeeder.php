<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = array(
            array(
                "title" => "Titolo elemento 1",
                "image_url" => "https://www.example.com/immagine1.jpg",
                "date" => "2024-02-12",
                "description" => "Descrizione dell'elemento 1"
            ),
            array(
                "title" => "Titolo elemento 2",
                "image_url" => "https://www.example.com/immagine2.jpg",
                "date" => "2024-02-13",
                "description" => "Descrizione dell'elemento 2"
            ),
            array(
                "title" => "Titolo elemento 3",
                "image_url" => "https://www.example.com/immagine2.jpg",
                "date" => "2024-02-13",
                "description" => "Descrizione dell'elemento 3"
            ),
            array(
                "title" => "Titolo elemento 4",
                "image_url" => "https://www.example.com/immagine2.jpg",
                "date" => "2024-02-13",
                "description" => "Descrizione dell'elemento 4"
            ),
            array(
                "title" => "Titolo elemento 5",
                "image_url" => "https://www.example.com/immagine2.jpg",
                "date" => "2024-02-13",
                "description" => "Descrizione dell'elemento 5"
            ),
        );

        foreach ($projects as $project) {
            $newProject = new Project();
            $newProject->title = $project['title'];
            $newProject->image_url = $project['image_url'];
            $newProject->date = $project['date'];
            $newProject->description = $project['description'];
            $newProject->save();
        }
    }
}
