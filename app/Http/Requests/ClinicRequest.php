<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClinicRequest extends FormRequest
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
            'patient_id' => 'required',
            'dated' => 'required|date',
            'symptom' => 'required|string|max:255',
            'diagnosis' => 'required|string|max:255',
            'drug' => 'required|string|max:255',
            'advice' => 'required|string|max:255',
        ];
    }
}
