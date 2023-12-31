<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RefundRequest extends FormRequest
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
            'full_name'     => 'required|string|max:255',
            'email'        => 'required|email|max:255',
            'order_number'  => 'required|string|max:20|unique:refunds,order_number',
            'reason'       => 'required|string|max:255',
        ];
    }
}
