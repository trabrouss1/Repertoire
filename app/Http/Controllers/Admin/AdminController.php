<?php

namespace App\Http\Controllers\Admin;

use session;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rules\Password;

class AdminController extends Controller
{
    public function listUser(Request $request, User $user)
    {
        if($request->isMethod('POST')){
            $userId = $request->userId;
            $uti    = User::find($userId);
            $uti->delete();
            $user->save();
        }
        $users = User::all();
        return view("admin.index", compact('users'));
    }

    public function addUser(Request $request)
    {
        if($request->isMethod('POST')){
            $name  = $request->name;
            $email = $request->email;
            $pwd   = $request->password;

            if(empty($name) || empty($email))
                return redirect()->back()->with('danger', "Le nom ou le email est vide");

            if(strlen($pwd) < 8)
                return redirect()->back()->with('danger', 'Le mot de passe doit etre supperieur a 8 caractere');


            if(!filter_var($email, FILTER_VALIDATE_EMAIL))
                return redirect()->back()->with('danger', 'Ce n\'est pas un email');

            $hashPwd = password_hash($pwd, PASSWORD_DEFAULT);
            $user = new User();
            $user->name = $name;
            $user->email = $email;
            $user->password = $hashPwd;
            $user->save();
            return to_route('listUser')->with('success', "L'utilisateur <strong>$user->name</strong> a été cree avec succès.");
        }
        return view('admin.add');
    }

    public function editUser(Request $request, User $user)
    {
        if($request->isMethod('POST')){
            $name  = $request->name;
            $email = $request->email;
            $pwd   = $user->password;

            if(empty($name) || empty($email))
                return redirect()->back()->with('danger', "Le nom ou le email est vide");

            if(!filter_var($email, FILTER_VALIDATE_EMAIL))
                return redirect()->back()->with('danger', 'Ce n\'est pas un email');

            $user->name     = $name;
            $user->email    = $email;
            $user->password = $pwd;
            $user->save();
            return to_route('listUser')->with('success', "L'utilisateur <strong>$user->name</strong> a été modifié avec succès.");
        }

        return view('admin.edit', compact('user'));
    }

}