<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\AlumniProfile;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\AlumniProfilesImport;
use App\Http\Requests\AlumniProfile\StoreRequest;
use App\Http\Requests\AlumniProfile\ImportRequest;

class AlumniProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumniProfiles = AlumniProfile::paginate(20);
        return view('admin.alumni-profiles.index', compact('alumniProfiles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $alumniProfile = AlumniProfile::create($request->validated());

        return response()->json('success', Response::HTTP_OK);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AlumniProfile $alumniProfile
     * @return \Illuminate\Http\Response
     */
    public function show(AlumniProfile $alumniProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AlumniProfile $alumniProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(AlumniProfile $alumniProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AlumniProfile $alumniProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AlumniProfile $alumniProfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AlumniProfile $alumniProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(AlumniProfile $alumniProfile)
    {
        //
    }

    /**
     * Upload excel file.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function import(ImportRequest $request)
    {
        $file = $request->file('alumni_file');
        $import = new AlumniProfilesImport();
        Excel::import($import, $file);

        $inserted = count($import->getInsertedRows());
        $duplicates = count($import->getDuplicateRows());
        $failed = count($import->getFailedRows());
        
        return response()->json(
            [
                'inserted' => $inserted,
                'duplicates' => $duplicates,
                'failed' => $failed,
                'failedRows' => $import->getFailedRows()
            ]
        , Response::HTTP_OK);
    }
}
