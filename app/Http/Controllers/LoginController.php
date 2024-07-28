<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;

class LoginController extends Controller
{
    //
    public function index(){
        return view('login');
    }

    //
    public function authenticate(Request $request){
        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if($validator->passes()){
            if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
                return redirect()->route('home.index');
            }else{
                return redirect()->route('home.login')->with('error','either mail or password in invalid');      
            }


        } else{
            return redirect()->route('home.login')
                ->withInput()
                ->withErrors($validator);
        }
    }

    public function register(Request $request){
        $rules = [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
            'g-recaptcha-response' => 'required|recaptcha'
        ];
        // Validator::validate($request, $rules,[
        //     'name.required' => 'Name is required',
        //     'email.required' => 'Email is required',
        //     'email.email' => 'Email is invalid',
        //     'email.unique' => 'Email is already registered',
        //     'password.required' => 'Password is required',
        //     'password.confirmed' => 'Password confirmation does not match',
        //     'password_confirmation.required' => 'Password confirmation is required',
        //     'g-recaptcha-response.required' => 'Recaptcha is required',
        //     'g-recaptcha-response.recaptcha' => 'Recaptcha is invalid'
        // ]);
        return view('register');
    }

    public function processRegister(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ]);

        if($validator->passes()){
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->role = 'customer';
            $user->save();
            return redirect()->route('home.login')->with('success','you have been registered as a user');

        } else{
            return redirect()->route('home.register')
                ->withInput()
                ->withErrors($validator);
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home.login');

    }

}
