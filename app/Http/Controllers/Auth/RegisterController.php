<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Role;
use App\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function returnView(){
        return view('register');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
       return Validator::make($data, [
            'name' => 'required|string|max:20',
            'lastName' => 'required|string|max:20',
            'email' => 'required|string|email|max:50|unique:users',
            'username' => 'required|string|max:12|unique:users',
            'phone' => 'required|integer',
            'password' => 'required_with:password_confirmation|string|same:password_confirmation|min:8',
            'password_confirmation' => 'min:8',
            'location' => 'required|string|max:255',
            
        ]);

       
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */

    protected function create(array $data)
    {
        $user = new User;
        $profile= new Profile;
        $user->name =$data['name'];
        $user->lastName = $data['lastName'];
        $user->email = $data['email'];
        $user->username = $data['username'];
        $user->phone = $data['phone'];
        $user->password = Hash::make($data['password']);
        $user->location = $data['location'];
        $user->save();
        $user->roles()->attach(Role::where('name','user')->first());
        $profile->user_id = $user->id;
        $profile->image = 'default.png';
        $profile->description = 'Aquí va una descripcion';
        $profile->save();
        return $user;
        
    }
       //metodo sobreescrito de registerusers
    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('register');
    }  
}
