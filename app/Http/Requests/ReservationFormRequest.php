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
            'city'       => ['required', 'string', 'max:50'],
            'zip_code'   => ['nullable', 'numeric', 'regex:^\d{4}$'],
            'phone'      => ['required', 'numeric', 'regex:^(?:\+63|0)9\d{9}$'],
            'email'      => ['required', 'string', 'email', 'max:50'],
            'check_in_date' => ['required', 'string', 'max:50'],
            'check_in_time' => ['required', 'string', 'max:50'],
            'check_out_time'=> ['required', 'string', 'max:50'],
            'adults'   => ['nullable', 'numeric', 'regex:/^\d+$/'],
            'kids'     => ['nullable', 'numeric', 'regex:/^\d+$/'],
            'branch'   => ['nullable', 'string', 'max:50'],
            'occasion' => ['requird', 'string', 'max:50'],
            'party_package' => ['nullable', 'string', 'max:50'],
            'special_req'   => ['nullable', 'string', 'max:255'],
            'name'     => ['required', 'string', 'max:50'],
            'price'    => ['requird', 'numeric', 'regex:/^\d{1,6}(\.\d{1,2})?$/'],
            'quantity' => ['required', 'numeric', 'min:0', 'regex:/^\d+(\.\d{1,2})?$/']
        ];
    }
}
