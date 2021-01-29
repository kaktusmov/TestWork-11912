<?php

namespace App\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class MessageRequest extends FormRequest
{
    public function rules()
    {
        return [
            'message' => 'string|required',
            'parent_id' => 'exists:App\Models\Message,id',
            'status' => Rule::in([0,1])
        ];
    }
}