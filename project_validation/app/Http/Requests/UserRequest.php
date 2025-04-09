<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'required|alpha_num|min:6',
            'age' => 'required|numeric|min:18|max:100 ',
            'city' => 'required|string',
            //
        ];
    }
    // public function messages(){
    //     return[
    //         'name' => 'Name is required',
    //         'email' => 'Email is required',
    //         'password' => 'password is required',
    //         'age' => 'Age is required ',
    //         'city' => 'city is required',
    //     ];
//     }

    //    public function attributes(){
    //     return[
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|email',
    //         'password' => 'required|alpha_num|min:6',
    //         'age' => 'required|numeric|min:18|max:100 ',
    //         'city' => 'required|string',
    //         //
    //     ];
    //    }
       protected function preparedforvalidation(): void{
        $this->merge([
            'username' => strtoupper($this->username),
        ]);
       }
       
 }
