<?php

namespace App\Http\Controllers\Auth;

use App\Controllers\Controller;
use App\Country;
use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        $countries = Country::OrderBy('name', 'ASC')->get();

        return view('auth.register', compact('countries'));
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'mobile' => 'required|unique:users'
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

        $code = User::generateRandomString();

        $checked = User::where('token', $code)->first();

        while (!empty($checked)){
            $code = User::generateRandomString();
            $checked = User::where('token', $code)->first();
        }

        return User::create([
            'name' => $data['name'],
            'mobile' => $data['mobile'],
            'email' => $data['email'],
            'role_id' => 2,
            'country_id' => $data['countryCode'],
            'password' => bcrypt($data['password']),
            'token' => $code
        ]);
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        /* code api sms */

//        User::sendSms($user->mobile, "Votre code de confirmation est $user->token");

        /* end code api sms */

//        $this->guard()->login($user);

        return redirect()->route('welcome', ['mobile' => addslashes($request->input('mobile')), 'token' => bin2hex(random_bytes(32))]);
    }

    public function welcome(){

        $mobile = Input::get('mobile');
        $token = Input::get('token');

//        dd('ok');

        if (empty($token)){
            return redirect('/404');
        }

        $data = User::where('mobile', $mobile)->first();

        if (empty($data)){
            return redirect('/404');
        }

//        auth()->login($data);

        return view('auth.welcome', compact('data'));
    }
}
