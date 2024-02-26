<?php

namespace App\Repositories;

use App\Models\Pokemon;
use Illuminate\Support\Collection;

class PokemonRepository
{
    protected $model = Pokemon::class;

    public function all(): Collection
    {
        return $this->model::all();
    }

    public function findByName(string $name)
    {
        return $this->model::where('name', $name)->get();
    }

    public function import(string $name, string $image_url)
    {
        return $this->model::create([
            Pokemon::NAME => $name,
            Pokemon::IMAGE_URL => $image_url
        ]);
    }
}
