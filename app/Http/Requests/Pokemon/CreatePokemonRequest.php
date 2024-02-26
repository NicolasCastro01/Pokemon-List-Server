<?php

namespace App\Http\Requests\Pokemon;

use Illuminate\Foundation\Http\FormRequest;

class CreatePokemonRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'image_url' => ['required', 'string'],
        ];
    }
}
