<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required',
            'description' => 'required',
            'icon' => 'required',
            'is_active' => 'nullable',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Title field is required',
            'description.required' => 'Description filed is required',
            'icon.required' => 'Icon field is required',
        ];
    }
}
