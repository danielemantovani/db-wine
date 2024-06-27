<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreWineRequest extends FormRequest
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
            'winery' => ['required', 'min:5'],
            'wine' => ['required', 'min:5'],
            'location' => ['nullable'],
            'image' => ['nullable'],
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'winery.required' => 'Inserire la cantina',
            'winery.min' => 'Inserire almeno 5 caratteri per la cantina',
            'wine.required' => 'Inserire il nome del vino',
            'wine.min' => 'Inserire almeno 5 caratteri per il nome del vino',
        ];
    }
}
