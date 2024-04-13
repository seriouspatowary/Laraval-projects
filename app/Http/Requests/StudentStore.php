<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentStore extends FormRequest
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
        


        $emailRule = 'unique:students';

        // Check if the request method is PATCH
        if($this->method() == 'PATCH'){
            $emailRule = 'unique:students,email,'.$this->student;
        
            // Remove the password rule
            return [
                'name' => 'required',
                'mobile' => 'required|digits:10',
                'email'=> 'required|email|'.$emailRule,
               
            ];
        } else {
            // For other request methods, include the password rule
            return [
                'name' => 'required',
                'mobile' => 'required|digits:10',
                'email'=> 'required|email|'.$emailRule,
                'password'=> 'required|min:6',
            ];
        }
        
    }
}
