<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CarRequest extends FormRequest
{
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
            'name' => ['required', 'string', 'max:255'],
            'mark' => ['required', 'string', 'max:225'],
            'price' => ['required', 'numeric'],
            'doors' => ['required', 'numeric', 'max:10'],
            'passengers' => ['required', 'numeric', 'max:10'],
            'luggage' => ['required', 'numeric', 'max:10'],
            'minimum_age' => ['required'],
            'transmission' => ['required', Rule::in(['manual', 'automatic'])],
            'air_conditioning' => ['required', Rule::in(['yes', 'no'])],
            'image' => ['required', 'file'],
        ];
    }
}
