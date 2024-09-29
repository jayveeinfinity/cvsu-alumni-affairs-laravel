<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserRequest;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequests\StoreRequest;

class UserRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

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
        $userRequest = UserRequest::create($request->validated());

        $user = User::create([
            'name' => $request->validated()['name'],
            'email' => $request->validated()['email'],
            'password' => bcrypt('password')
        ]);

        return redirect()->route('signup')->with('success', 'User request sent! Kindly check your email account.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserRequest $UserRequest
     * @return \Illuminate\Http\Response
     */
    public function show(UserRequest $UserRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserRequest $UserRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(UserRequest $UserRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\UserRequest $UserRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserRequest $UserRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserRequest $UserRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserRequest $UserRequest)
    {
        //
    }
}
