<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StorePortfolioRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'images' => 'required|array',
            'images.*' => 'required|image|max:4096'
        ];
    }

    public function validated($key = null, $default = null)
    {
        return [
            'name' => $this->name,
            'description' => $this->description
        ];
    }
}
