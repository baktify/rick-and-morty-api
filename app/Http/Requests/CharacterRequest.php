<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;

class CharacterRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            "name" => ["required", "string", "between:2,255"],
            // , Rule::unique('characters')->ignore('id')
            "status" => ["required", "in:alive,dead"],
            "gender" => ["required", "in:male,female"],
            "race" => ["required", "in:human,alien,robot,humanoid,animal"],
            "description" => ["required", "string", "between:3,65535"]
        ];
    }
}
