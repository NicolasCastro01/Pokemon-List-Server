<?php

namespace App\Models;

use App\Entities\Pokemon as PokemonEntity;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pokemon extends Model
{
    use HasFactory, SoftDeletes;
    
    const NAME = 'name';
    const IMAGE_URL = 'image_url';

    protected $table = 'pokemon';

    protected $fillable = [
        self::NAME,
        self::IMAGE_URL
    ];

    protected $attributes = [
        Pokemon::NAME => 'string',
        Pokemon::IMAGE_URL => 'string'
    ];

    public function toEntity(): PokemonEntity
    {
        return PokemonEntity::restore($this->name, $this->image_url);
    }
}
