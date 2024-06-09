<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'              => ['required',
                                    'min:3',
                                    'max:200'
                                ],
            'email'             => [
                                    'required',
                                    'email',
                                    'min:5',
                                    'max:150',
                                    'unique:users,email'
                                ],
            'school'            => ['required'],
            'education'         => ['required'],
            'gender'            => ['required'],
            'address'           => [
                                    'required',
                                    'min:3'
                                ],
            'password'          => [
                                    'required',
                                    'string',
                                    'min:8',
                                ],
            'confirmPassword'   => ['same:password']
        ];
    }
}
