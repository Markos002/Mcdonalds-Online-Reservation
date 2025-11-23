<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationFormRequest extends FormRequest
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
            'first_name' => ['required', 'string', 'max:50'],
            'last_name'  => ['required', 'string', 'max:50'],
            'address'    => ['required', 'string', 'max:100'],
            'city'       => ['nullable', 'string', 'max:50'],
            'zip_code'   => ['nullable', 'numeric', 'regex:/^\d{4}$/'],
            'phone'      => ['required', 'numeric', 'regex:/^(?:\+63|0)9\d{9}$/'],
            'email'      => ['required', 'string', 'email', 'max:50'],
            'check_in_date' => ['required', 'string', 'max:50'],
            'check_in_time' => ['required', 'string', 'max:50'],
            'adults'   => ['nullable', 'numeric', 'regex:/^\d+$/'],
            'kids'     => ['nullable', 'numeric', 'regex:/^\d+$/'],
            'occasion' => ['required', 'string', 'max:50'],
            'party_package' => ['nullable', 'string'],
            'package_price' => ['nullable', 'numeric'],
            
            'food_packages'               => ['required', 'array', 'min:1'],
            'food_packages.*.name'        => ['required', 'string', 'max:50'],
            'food_packages.*.price'       => ['required', 'numeric', 'regex:/^\d{1,6}(\.\d{1,2})?$/'],
            'food_packages.*.quantity'    => ['required', 'integer', 'min:1'],
            'addons'    => ['nullable', 'array'],
            'addons.*name' => ['nullable', 'string'],
            'addons.*price' => ['nullable']

        ];
    }
}
