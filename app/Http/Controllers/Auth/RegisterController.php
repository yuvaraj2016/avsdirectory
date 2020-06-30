<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use GuzzleHttp\Client;
use Laravel\Passport\Client as OClient;


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
    protected $redirectTo = RouteServiceProvider::HOME;

    public $successStatus = 200;

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
            'name' => ['required', 'string', 'max:255'],
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
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public static function getTokenAndRefreshToken() {
        // $oClient = OClient::where('password_client', 2)->first();
        try{
            $http = new Client;
            $response = $http->request('POST', 'http://avsapi.hridham.com/oauth/token', [
                'form_params' => [
                    'grant_type' => 'password',
                    'client_id' => '2',
                    'client_secret' => 'NPbuAQtxjb0XLXu1nE1vzMkYsC83MCrnCStVilpT',
                    'username' => 'admin@gmail.com',
                    'password' => '12345678',
                    'scope' => '*',
                ],
            ]);

            if($response->getStatusCode() === 200)
            {
                $result = json_decode((string) $response->getBody(), true);
                return response()->json($result, 200);

            }


        }
        catch(BadResponseException $ex)
        {
            $data = json_decode($ex->getResponse()->getBody()->getContents(), true);
            $errors = [];

            foreach($data as $k=>$v)
                $errors[$k]=$v;
            return response()->json($errors);
        }
        if($response->getStatusCode() == 201)
        {
            $tokenresponse = json_decode($response->getBody(),true);

            return response()->json($tokenresponses);

        }
        else
        {
            return 'Internal Server Error!<br>Check oauth/token<br>'.$response;
        }


    }

}
