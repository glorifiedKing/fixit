<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Professional;
use App\Vendor;
use App\Wallet;
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
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
      return Validator::make($data, [
          'first_name' => ['required', 'string', 'max:255'],
          'last_name' => ['required', 'string', 'max:255'],
          'country_id' => ['required', 'numeric'],
          'service_categories' => ['required_if:user_type,professional', 'numeric'],
          'date_of_birth' => ['required_if:user_type,student', 'date'],
          'student_school_id' => ['required_if:user_type,student'],
          'national_id' => ['required_if:user_type,parent'],
          'phone_number' => ['required_if:user_type,parent', 'numeric'],
          'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
          'password' => ['required', 'string', 'min:8', 'confirmed'],

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
      /*  return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        */
        //get usertype first
        $user_type = $data['user_type'];
        $name = $data['first_name'].' '.$data['middle_name'].' '.$data['last_name'];

        if($user_type == 'professional')
        {
          //create student
          $professional = new Professional;
          $professional->first_name = $data['first_name'];
          $professional->middle_name = $data['middle_name'];
          $professional->last_name = $data['last_name'];
          $professional->nationality = $data['nationality'];
          $professional->national_id = $data['national_id'];
          $professional->date_of_birth = $data['date_of_birth'];
          $professional->school_id = $data['school_id'];
          $professional->student_school_id = $data['student_school_id'];
          $professional->gender = $data['gender'];
          $professional->email = $data['email'];
          $professional->save();

          $user = User::create([
              'name' => $name,
              'email' => $data['email'],
              'password' => Hash::make($data['password']),
              'palmuser_type' => 'App\Student',
              'palmuser_id' => $professional->id,

          ]);
          $user->assignRole('Professional');
          //create wallet

          $wallet = new Wallet;
          $wallet->user_id = $user->id;
          $wallet->wallet_id = $professional->id."_P_".time();
          $wallet->save();
          return $user;
        }
        else if($user_type == 'vendor')
        {


          //create vendor
          $vendor = new Vendor;
          $vendor->first_name = $data['first_name'];
          $vendor->middle_name = $data['middle_name'];
          $vendor->last_name = $data['last_name'];
          $vendor->nationality = $data['nationality'];
          $vendor->national_id = $data['national_id'];
          $vendor->phone_number = $data['phone_number'];
          $vendor->gender = $data['gender'];
          $vendor->email = $data['email'];
          $vendor->save();

          $user = User::create([
              'name' => $name,
              'email' => $data['email'],
              'password' => Hash::make($data['password']),
              'palmuser_type' => 'App\StudentParent',
              'palmuser_id' => $vendor->id,

          ]);
          $user->assignRole('Vendor');
          $wallet = new Wallet;
          $wallet->user_id = $user->id;
          $wallet->wallet_id = $vendor->id."_V_".time();
          $wallet->save();
          return $user;
        }
    }
}
