<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EducationFormRequest extends FormRequest
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
            'institution' => 'required|string|max:255',
            'degree' => 'required|string|max:255',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'description' => 'nullable|string',
        ];
    }

     /**
     * Customize the error messages for the validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'institution.required' => 'Institution name is required.',
            'degree.required' => 'Degree name is required.',
            'end_date.after_or_equal' => 'End date must be after or equal to the start date.',
        ];
    }
}
