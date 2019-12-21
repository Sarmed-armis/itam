<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\Profile;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\UserSetting;



class AccountController extends Controller
{
    //

public function CreateAccount(Request $Request){



    $Request->validate(
        [
            "FullName"=>'required',
            "Country"=>'required',
            "AccountType"=>'required',
            "password"=>'required',
            "email"=>'required|unique:users'
        ]
    );




    $user_id=User::create([
        'name' => $Request->FullName,
        'email' => $Request->email,
        'password' => Hash::make($Request->password),
    ]);



    $UserSetting=UserSetting::create([
        'user_id'=>$user_id->id
        ,'country_id'=>$Request->Country
        , 'profile_id'=>$Request->AccountType
    ]);





 return redirect('Dashboard');


}

    public function Displayaccounts(){

        $Countries=Country::all();
        $profiles=Profile::all();

        return view('registration',
            [
                'Countries'=>$Countries,
                'profiles'=>$profiles
            ]
        );

    }

}
