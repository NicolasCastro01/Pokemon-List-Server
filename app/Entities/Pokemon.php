<?php

namespace App\Entities;

class Pokemon 
{
    public string $name;
    public string $image_url;

    private function __construct(string $name, string $image_url)
    {
        
    }

    public static function create(string $name, string $image_url): Pokemon
    {
        return new Pokemon($name, $image_url);
    }

    public static function restore($name, $image_url): Pokemon
    {
        return self::create($name, $image_url);
    }
}