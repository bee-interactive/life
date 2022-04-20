<?php

namespace App\Http\Requests;

use App\Concerns\SendsAlerts;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;

class StoreBoardRequest extends FormRequest
{
    use SendsAlerts;

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
            'name' => 'required|max:255',
            'icon' => 'required|max:255',
            'color' => 'required|max:255',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'The board name is required',
            'icon.required' => 'The icon is required',
            'color.required' => 'The color is required',
        ];
    }

    /**
     * Handle a failed validation attempt.
     *
     * @param  \Illuminate\Contracts\Validation\Validator  $validator
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function failedValidation(Validator $validator)
    {
        $this->error("Le formulaire n'a pas pu être envoyé car il contient des erreurs.");

        throw (new ValidationException($validator))->redirectTo($this->getRedirectUrl());
    }
}
