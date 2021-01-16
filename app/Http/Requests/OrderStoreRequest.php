<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderStoreRequest extends FormRequest
{
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
            'name' => 'required|string|max:50',
            'phone' => 'required',
            'email' => 'required|email|unique:users',
            'state_id' => 'required',
            'district_id' => 'required',
            'place' => 'required',
            'product_id' => 'required',
            'quantity' => 'required',
            'rate' => 'required',
            'total_rate' => 'required'
        ];
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Name is required!',
            'phone.required' => 'Phone is required!',
            'email.required' => 'Email is required!',
            'state_id.required' => 'State is required!',
            'district_id.required' => 'District is required!',
            'place.required' => 'Place is required!',
            'product_id.required' => 'Product is required!',
            'quantity.required' => 'Quantity is required!',
            'rate.required' => 'Rate is required!',
            'total_rate.required' => 'Total Rate is required!'
        ];
    }
}
