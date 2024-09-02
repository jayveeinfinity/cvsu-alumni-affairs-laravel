<?php

namespace App\Http\Requests\UserRequests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'email' => 'required|email|unique:user_requests,email|unique:users,email',
            'student_number' => 'required|string|size:9',
            'name' => 'required|string|max:255',
            'course' => 'required|string|max:255',
            'year_graduated' => 'required|digits:4'
        ];
    }
    
    /**
     * Get the custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'email.required' => 'The email field is required.',
            'email.email' => 'Please provide a valid email address.',
            'email.unique' => 'This email address has already been taken.',
            'student_number.required' => 'The student number field is required.',
            'student_number.size' => 'The student number must be exactly 9 characters.',
            'name.required' => 'The name field is required.',
            'course.required' => 'The course field is required.',
            'year_graduated.required' => 'The year graduated field is required.',
            'year_graduated.digits' => 'The year graduated must be exactly 4 digits.',
        ];
    }
}
