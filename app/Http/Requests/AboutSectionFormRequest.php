<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Arr;

class AboutSectionFormRequest extends FormRequest
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
            'title'        => 'required|string|max:255',
            'bio'          => 'required|string',
            'birthday'     => 'required|date',
            'phone'        => 'required',
            'address'      => 'required|string|max:255',
            'languages'    => 'required|string|max:100',
            'freelance'    => 'required',
            'cv_url'       => 'required|file|mimes:pdf',
            'image_url'    => 'required|image|mimes:png,jpg',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required'      => 'Please provide at least one professional title.',
            'bio.required'          => 'Your bio is required.',
            'birthday.date'         => 'Please enter a valid date for your birthday.',
            'phone.required'           => 'Please enter a valid phone number.',
            'address.required'    => 'Address is required.',
            'freelance.required'    => 'Please specify your freelance availability.',
            'cv_url.required'           => 'The CV field is required.',
            'cv_url.file'           => 'The CV must be a file.',
            'cv_url.mimes'          => 'The CV must be a file of type: PDF',
            'cv_url.max'            => 'The CV may not be larger than 2MB.',
            'image_url.required'           => 'The About Image field is required.',
            'image_url.image'           => 'The About Image must be a Image.',
            'image_url.mimes'          => 'The About Image must be a file of type: PNG,JPG',
            'image_url.max'            => 'The About Image may not be larger than 2MB.'
        ];
        
    }
}
