<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{


    public function underconstruction()
{
    return view('under-construction');
}
    /**
     * Display a listing of the resource.
     */
    
    /*index() prior to pagination
     public function index()
    {
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }
    
    public function index()
    {
        $users = User::paginate(10);
        return view('users.index', compact('users'));
    }

    */

    public function index()
    {
        $title = "All Users";
        $users = User::all();
        return view('users.index', compact('users', 'title'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
