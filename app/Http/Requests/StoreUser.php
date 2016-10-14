<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
        // return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
             'name' => 'required|unique:users,name,'.$this->id.'|max:255|min:4',
             'email' => 'required_without:id|unique:users,email,'.$this->id.'|email|min:6|max:255',
             'password' => 'required|confirmed'
        ];
    }
}
