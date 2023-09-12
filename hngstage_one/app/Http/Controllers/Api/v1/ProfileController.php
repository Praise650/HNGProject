<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\Profile;
use Illumminate\Http\Response;
use App\Http\Controllers\Controller;
use Illumminate\Http\RedirectResponse;
use App\Http\Requests\StoreProfileRequest;
use App\Http\Requests\UpdateProfileRequest;
use App\Http\Resources\ProfileResource;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return ProfileResource::collection(Profile::all());

        // Get the profiles
    $profiles = Profile::all();

    // Return the profiles along with the status code
    return response()->json([
        'profiles' => $profiles,
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProfileRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Profile $profile)
    {
        return ProfileResource::make($profile);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfileRequest $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
