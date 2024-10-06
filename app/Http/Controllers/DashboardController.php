<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\JobPosting;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use App\Models\AlumniProfile;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $graduates = AlumniProfile::count();
        $jobPostings = JobPosting::count();
        $users = User::count();
        $userProfiles = UserProfile::count();

        $currentYear = Carbon::now()->year;
        $startYear = $currentYear - 9;  // Start year (10 years from current year)

        $graduates_data = DB::table('alumni_profiles')
            ->select('year_graduated', 'course', DB::raw('COUNT(*) as total_graduates'))
            ->whereIn('course', ['BSIT', 'BSCS'])
            ->whereBetween('year_graduated', [$startYear, $currentYear])
            ->groupBy('year_graduated', 'course')
            ->orderBy('year_graduated', 'asc')
            ->get();

        $years = [];
        $bsitData = [];
        $bscsData = [];
        
        // Ensure all years are included, even if there are no graduates for a specific year
        for ($year = $startYear; $year <= $currentYear; $year++) {
            $years[] = $year;
            $bsitData[$year] = 0; // Initialize with 0 graduates for each year
            $bscsData[$year] = 0; // Initialize with 0 graduates for each year
        }
        
        foreach ($graduates_data as $graduate) {
            if ($graduate->course == 'BSIT') {
                $bsitData[$graduate->year_graduated] = $graduate->total_graduates;
            } elseif ($graduate->course == 'BSCS') {
                $bscsData[$graduate->year_graduated] = $graduate->total_graduates;
            }
        }
        
        // Prepare the data for the chart, converting arrays to flat lists
        $bsitData = array_values($bsitData);
        $bscsData = array_values($bscsData);

        $chartData = [
            'years' => $years,
            'bsit' => $bsitData,
            'bscs' => $bscsData
        ];

        return view('admin.dashboard', compact('graduates', 'jobPostings', 'users', 'userProfiles', 'chartData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
