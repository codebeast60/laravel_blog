<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        // return view('user.edit')->with('user', User::where('id', $id)->first());
        $user = auth()->user();
        return view('user.edit', compact('user'));
    }


    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'       => 'required',

        ]);
        $password = $request->input('old_password');
        if ($request->filled('password')) {
            if ($request->input('password') === $request->input('retype_password')) {

                $password = bcrypt($request->input('password'));
            } else {
                return redirect()->back()->with('error', 'Password not matched');
            }
        }


        User::where('id', auth()->user()->id)->update([
            'name'       => $request->input('name'),
            'password' => $password,
            'updated_at' => now()
        ]);

        return redirect('/')->with('message', 'profile updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
