<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return $users;
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
    public function store(Request $request)
    {
        $users = new User();
        $users->first_name = $request->first_name;
        $users->last_name = $request->last_name;
        $users->date_birth = $request->date_birth;
        $users->age = $request->age;
        $users->username = $request->username;
        $users->email = $request->email;
        $users->password=Hash::make('123456789');
        $users->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $users = User::find($request->id);
        $users->first_name = $request->first_name;
        $users->last_name = $request->last_name;
        $users->date_birth = $request->date_birth;
        $users->age = $request->age;
        $users->username = $request->username;
        $users->email = $request->email;
        $users->save();

        return $users;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $users = User::destroy($request->id);
        return $users;
    }
}
