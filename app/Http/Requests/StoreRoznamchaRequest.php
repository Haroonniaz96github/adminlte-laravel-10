<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRoznamchaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'country' => 'required|in:pakistan,afghanistan',
            'user_id' => 'required|exists:users,id',
            'total_name' => 'required|in:total,name',
            'sr_no' => 'required|string',
            'detail' => 'required|string',
            'afghani_date' => 'required|date',
            'date' => 'required|date',
            'afghani' => 'required|date',
            'afghani_total' => 'required|string',
            'pakistani_total' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Limit image size to 2MB
        ];
    }
}
