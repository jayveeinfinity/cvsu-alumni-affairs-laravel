<?php

namespace App\Http\Controllers;

use App\Models\UserProfile;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function index() {
        $user = auth()->user();

        return view('user.profile.index', compact('user'));
    }

    public function edit($user_id) {
        $user = auth()->user();
        $profile = UserProfile::where('user_id', $user->id)->first();

        return view('user.profile.edit', compact('user'));
    }

    public function update(Request $request) {
        $userProfile = UserProfile::updateOrCreate([
            'user_id' => auth()->user()->id
        ], [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone_number' => $request->phone_number,
            'about' => $request->about
        ]);
    }
}
