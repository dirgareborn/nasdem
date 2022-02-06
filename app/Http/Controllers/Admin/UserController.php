<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\UserRequest;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function updateProfile(Request $request)
    {
        if(Auth::check()){
            $request->user()->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->get('password'))
            ]);
            return back()->with('success', 'Your password has been updated successfully.');
        }else{
            return redirect()->to('/login');
        }

    }

}
