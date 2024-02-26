<?php

namespace App\Http\Controllers\Pokemon;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pokemon\CreatePokemonRequest;
use App\Repositories\PokemonRepository;

class PokemonController extends Controller
{
    public function __construct(
        private readonly PokemonRepository $pokemonRepository
    ) {
        //
    }

    public function all()
    {
        return response($this->pokemonRepository->all(), 200);
    }

    public function import(CreatePokemonRequest $request)
    {
        $pokemonIsImported = $this->pokemonRepository->findByName($request->get('name'))->first();

        throw_unless(is_null($pokemonIsImported), (new \Exception("AlreadyExists")));

        $pokemonImported = $this->pokemonRepository->import($request->get('name'), $request->get('image_url'));

        return response($pokemonImported, 201);
    }
}
