<?php

namespace App\Imports;

use App\Models\AlumniProfile;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;

class AlumniProfilesImport implements ToModel, WithHeadingRow, WithCalculatedFormulas
{
    private $insertedRows = [];
    private $skippedRows = [];
    private $failedRows = [];

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if($row['no']) {
            // Validation rules
            $validator = Validator::make($row, [
                'student_number' => 'required|digits:9',
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'course' => 'required|string|max:255',
                'year_graduated' => 'required|digits:4|integer|min:1900',
            ]);

            if ($validator->fails()) {
                // Validation failed, track the row as failed
                $this->failedRows[] = ['row' => $row, 'errors' => $validator->errors()->toArray()];
                return null;
            }

            // Check if student number exists (skipped rows)
            if (AlumniProfile::where('student_number', $row['student_number'])->exists()) {
                $this->skippedRows[] = $row;
                return null;
            }

            // Row inserted successfully
            $this->insertedRows[] = $row;
            
            return new AlumniProfile([
                'student_number' => $row['student_number'],
                'first_name' => $row['first_name'],
                'last_name' => $row['last_name'],
                'course' => $row['course'],
                'year_graduated' => $row['year_graduated']
            ]);
        }
        
        return null;
    }

    public function getInsertedRows()
    {
        return $this->insertedRows;
    }

    public function getDuplicateRows()
    {
        return $this->skippedRows;
    }

    public function getFailedRows()
    {
        return $this->failedRows;
    }
}
