<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Models\Education;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\SignUp\StoreRequest;

class SignUpController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('signup.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\StoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        // $userRequest = UserRequest::create($request->validated());
        $validated = $request->validated();
        
        DB::beginTransaction();
        try {
            // Create User
            $user = User::create([
                'email' => $validated['email']
            ]);

            // Create User Profile
            $userProfile = UserProfile::create([
                'user_id' => $user->id,
                'first_name' => $validated['first_name'],
                'last_name' => $validated['last_name']
            ]);

            // Add Educational Background
            $education = Education::create([
                'user_profile_id' => $userProfile->id,
                'institution' => 'Cavite State University Main Campus',
                'degree' => $validated['course'],
                'graduation_year' => $validated['year_graduated']
            ]);

            DB::commit();

            return redirect()->route('signup.create')->with('success', 'Successfully created.');
        } catch(Exception $e) {
            DB::rollBack();

            return redirect()->route('signup.create')->withErrors('Something when wrong! Try again.');
        }
    }
}
