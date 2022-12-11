<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
{
    public function rules()
    {
        return [
            'text' => 'required',
            'short_text' => ['required', 'max:255'],
            'author_name' => 'required'
        ];
    }
}
