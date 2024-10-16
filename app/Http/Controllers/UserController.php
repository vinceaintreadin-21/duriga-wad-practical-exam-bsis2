<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function showAllUsers(){
        //  $users = User::all();
        $users = User::orderby('created_at', 'desc')->get();

        return view('users', ['users' =>$users]);
    }

    public function createUser(){
        return view('create-user');
    }

    public function storeUser(Request $request){
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'birthdate' => 'required|date',
            'status' => 'required|string|max:10',
            'address' => 'required|string|max:255',
            'contact_number' => 'required|string|max:255',
            'password' => 'required|string'
        ]);

        $user = new User();
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->birthdate = $validated['birthdate'];
        $user->status = $validated['status'];
        $user->address = $validated['address'];
        $user->contact_number = $validated['contact_number'];
        $user->password = $validated['password'];
        $user->save();

        return redirect()->route('showAllUsers')->with('success', 'User Created Successfully');
    }

    public function showUser(Request $request){
        $user = User::find($request->id);

        if (!$user){
            return redirect()->route('showAllUsers')->with('error', "User Not Found");
        }
        return view('user', ['user' => $user]);

    }

    public function editUser(Request $request){
        $user = User::find($request->id);

        if (!$user){
            return redirect()->route('showAllUsers')->with('error', "User Not Found");
        }
        return view('edit-user', ['user' => $user]);

    }

    public function updateUser(Request $request){
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'birthdate' => 'required|date',
            'status' => 'required|string|max:10',
            'address' => 'required|string|max:255',
            'contact_number' => 'required|string|max:255',
            'password' => 'required|string'
        ]);

        $user = User::find($request->id);

        if (!$user){
            return redirect()->route('showAllUsers')->with('error', "User Not Found");
        }
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->birthdate = $validated['birthdate'];
        $user->status = $validated['status'];
        $user->address = $validated['address'];
        $user->contact_number = $validated['contact_number'];
        $user->password = $validated['password'];
        $user->save();

        return redirect()->route('showUser', ['id' => $user->id])->with('success', 'Successfully updated');


    }

    public function deleteUser(Request $request){
        $user = User::find($request->id);

        if ($user){
            $user->delete();
        }

        return redirect()->route('showAllUsers', ['id' => $user->id])->with('success', 'Successfully deleted');


    }
}
