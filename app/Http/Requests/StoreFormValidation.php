<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFormValidation extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'name' => 'required|max:20',
            'email' => 'required|max:25'
        ];
    }

    public function messages() {
        return[
            'name.required' => 'name is also required',
            'name.max' => 'Name has not more than 20 more',
            'email.required' => 'email is also required'
        ];
    }

}
