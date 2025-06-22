<?php

namespace App\Http\Requests\Book;

use Illuminate\Foundation\Http\FormRequest;

class CreateBookRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'author_name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'The book name is required.',
            'author_name.required' => 'The author name is required.',
            'image_id.image' => 'The image must be a valid image file.',
            'image_id.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif, svg.',
            'image_id.max' => 'The image may not be greater than 2048 kilobytes.',
            'name.string' => 'The book name must be a string.',
            'author_name.string' => 'The author name must be a string.',
            'name.max' => 'The book name may not be greater than 255 characters.',
            'author_name.max' => 'The author name may not be greater than 255 characters',
            'image_id.nullable' => 'The image ID is optional and can be null.',
        ];
    }
}
