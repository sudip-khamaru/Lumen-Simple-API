<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function register( Request $request )
    {

        $user = User::create( [

            'username'  =>  $request->name,
            'email'     =>  $request->email,
            'api_token' =>  Hash::make( 'root123' ),

        ] );

        return $user;

    }

    public function login()
    {

        return response()->json( [ 

            'response'  =>  "Logged In", 
            'status'    =>  200,

        ] );

    }
}
