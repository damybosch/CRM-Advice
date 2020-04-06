<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function index() {
        $users = User::all();
 
        return view(
            'admin.users',
            ['users' => $users]
        );
     }

     public function getUser(Request $request, $id) {
        $user = User::findOrFail($id);

       return view(
           'admin.user', 
           ['user_data' => $user]
       );
    }

    public function update(Request $request) {
        //dd($request);

        // TO DO:
        // Check de database of er het zelfde email adres al aanwezig is. Naast die van de user zelf! 

        $request->validate([
            'id' => 'required',
            'name' => 'required|min:6',
            'email' => 'required|email',
            'role' => 'required',
            'isActive' => 'required'
        ]);

        $user = User::find($request->id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->isActive = $request->isActive;

        $user->save();

        return redirect('admin/user/' . $user->id)->with('success', 'Succesfully updated the user');
    }

     public function store(Request $request) {
         

         $request->validate([
             'name' => 'required|min:6',
             'email' => 'required|unique:users|email',
             'role' => 'required',
             'password' => 'required|same:confirm_password',
             'confirm_password' => 'required' 
         ]);

         $user_password = Hash::make($request->password);
         $user = new User;
         $user->name = $request->name;
         $user->email = $request->email;
         $user->role = $request->role;
         $user->password = $user_password;

         $user->save();

         return redirect('admin/users')->with('success', 'Succesfully added a user');

        //  $name = $request->input('name');
        //  $email = $request->input('email');
        //  $role = $request->input('role');
        //  $password = $request->input('password');
        //  dd($role);
     }

     
}
