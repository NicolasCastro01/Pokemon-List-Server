<?php

namespace Tests\Unit;

use App\Entities\Pokemon;
use App\Http\Controllers\Pokemon\PokemonController;
use App\Repositories\PokemonRepository;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PokemonControllerTest extends TestCase
{
    use RefreshDatabase;
    public function setUp(): void
    {
        parent::setUp();
    }

    public function test_import_pokemon(): void
    {
        $pokemonImported = $this->post('/api/pokemon/import', [
            'name' => 'Charmander',
            'image_url' => 'http://testadefogo.com'
        ]);

        $this->assertTrue(!$pokemonImported->isEmpty());
    }

    public function test_list_all_pokemons_from_database_local(): void
    {
        $pokemons = $this->get('/api/pokemon/all');
        $this->assertTrue(!$pokemons->isEmpty());
    }
}
