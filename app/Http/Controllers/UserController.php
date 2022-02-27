<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersRequest;
use App\Models\Otp;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        try {
            $users = User::get();
            return $users;
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function create(UsersRequest $request)
    {
        try {

            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->photo = $request->photo;
            $user->dept_id = $request->dept_id;
            $user->role_id = 2;
            $user->verified = 0;
            $user->status = 1;
            $user->password = Hash::make($request->password);
            $user->save();

            $code = rand(111111, 999999);
            $otp = new Otp();
            $otp->otp_no = $code;
            $otp->u_id = $user->id;
            $otp->status = 0;

        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function login(UsersRequest $request)
    {

        try {
            $user = User::where('email', $request->email)->first();
            if ($user) {
                $check = Hash::check($request->password, $user->password);
                if ($check) {
                    Auth::login($user);
                    return redirect('/');
                } else {
                    return back()->with('fail', 'Password is wrong');
                }
            } else {
                return back()->with('fail', 'User does not exist.');
            }

        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
