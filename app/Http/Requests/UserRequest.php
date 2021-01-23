<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
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
            Rule::unique('users')->ignore($this->user()->id, 'id'),
            'name' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:5'],
            'age' => ['required', 'integer','min:18', 'max:99'],
            'gender' => ['required'],
            'phonenum' =>['required', 'string'],
            'street' =>['required', 'string'],
            'city' =>['required', 'string'],
            'favs'=>['required']

        ];
    }
}
