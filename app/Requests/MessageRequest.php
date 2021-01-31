<?php

namespace App\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class MessageRequest extends FormRequest
{
    public function rules()
    {
        return [
            'message' => 'string|required'
        ];
    }
}