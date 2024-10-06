<?php

namespace App\Http\Requests\AlumniProfile;

use Illuminate\Foundation\Http\FormRequest;

class ImportRequest extends FormRequest
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
            // Validate that the file exists and is an Excel file (xlsx or csv)
            'alumni_file' => 'required|file|mimes:xlsx,csv',
        ];
    }

    public function messages()
    {
        return [
            'alumni_file.required' => 'Please upload a file.',
            'alumni_file.mimes' => 'Only Excel files (.xlsx or .csv) are allowed.',
        ];
    }
}
