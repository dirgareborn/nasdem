<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KonfigurasiRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'website_title' => 'nullable|string|max:255',
            'website_description' => 'nullable|string|max:255',
            'email' => 'nullable|string|max:255',
            'telepon' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'facebook' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
            'twitter' => 'nullable|string|max:255',
            'youtube' => 'nullable',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'pos_code' => 'nullable|string|max:255',

        ];
    }
}
