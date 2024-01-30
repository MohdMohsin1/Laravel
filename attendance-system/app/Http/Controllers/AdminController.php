<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $users = User::all();
        return view('admin.users',['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (Auth::check() && Auth::user()->role != 'admin') {
            return redirect('/home')->with('status', 'Access Denied! Only admins can register new users.');
        }
        $user = User::create([
            'name' => $request['name'],
            'firstname' => $request['firstname'],
            'lastname' => $request['lastname'],
            'email' => $request['email'],
            'date_of_birth' => $request['date_of_birth'],
            'phone' => $request['phone'],
            'current_address' => $request['current_address'],
            'permanent_address' => $request['permanent_address'],
            'joining_date' => $request['joining_date'],
            'password' => Hash::make($request['password']),
        ]);
        // Auth::login($user);
        return redirect('/admin/create')->with('status','User register successfully!!!');

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
        $user = User::find($id);
        return view('admin.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $user=User::find($id);
        $user->name=$request->input('name');
        $user->firstname=$request->input('firstname');
        $user->lastname=$request->input('lastname');
        $user->email=$request->input('email');
        $user->date_of_birth=$request->input('date_of_birth');
        $user->phone=$request->input('phone');
        $user->current_address=$request->input('current_address');
        $user->permanent_address=$request->input('permanent_address');
        $user->role=$request->input('role');
        $user->joining_date=$request->input('joining_date');
        $user->save();

        return redirect('/admin')->with('status','user update successfully !!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
