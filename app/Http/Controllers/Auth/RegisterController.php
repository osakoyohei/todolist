<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Register;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * 新規登録画面を表示する。
     * 
    * @return View
    */
    public function showRegister()
    {
        return view('auth.register');
    }

    /**
     * 新規登録処理。
     * 
     * @param RegisterRequest $request
     * @return view
     */
    public function register(RegisterRequest $request)
    {
        \DB::beginTransaction();
        try {
            Register::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
            ]);
            \DB::commit();
        } catch(\Throwable $e) {
            \DB::rollback();
            abort(500);
        }
        
        return redirect(route('login.show'))->with('success', '新規登録完了しました！');
    }
}
