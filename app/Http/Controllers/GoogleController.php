<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

use Laravel\Socialite\Facades\Socialite;

use Exception;

use App\Models\User;

use Illuminate\Support\Facades\Auth;


class GoogleController extends Controller

{

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function redirectToGoogle()

    {

        return Socialite::driver('google')->redirect();

    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function handleGoogleCallback()

    {

        try {


            $user = Socialite::driver('google')->user();


            $finduser = User::where('google_id', $user->id)->first();


            if ($finduser) {


                Auth::login($finduser);


                return redirect()->intended('home');


            } else {

                $newUser = User::create([

                    'name' => $user->name,

                    'email' => $user->email,

                    'google_id' => $user->id,

                    'password' => encrypt($user->email)

                ]);


                Auth::login($newUser);


                return redirect()->intended('dashboard');

            }


        } catch (Exception $e) {

            dd($e->getMessage());

        }

    }

}
//namespace App\Http\Controllers;
//
//use App\Models\User;
//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\Hash;
//use Laravel\Socialite\Facades\Socialite;
//
//class GoogleController extends Controller
//{
//    public function loginWithGoogle()
//    {
//        return Socialite::driver('google')->redirect();
//    }
//
//    public function callbackFromGoogle()
//    {
//        try {
//            $user = Socialite::driver('google')->user();
//
//            // Check Users Email If Already There
//            $is_user = User::where('email', $user->getEmail())->first();
//            if(!$is_user){
//
//                $saveUser = User::updateOrCreate([
//                    'google_id' => $user->getId(),
//                ],[
//                    'name' => $user->getName(),
//                    'email' => $user->getEmail(),
//                    'password' => Hash::make($user->getName().'@'.$user->getId())
//                ]);
//            }else{
//                $saveUser = User::where('email',  $user->getEmail())->update([
//                    'google_id' => $user->getId(),
//                ]);
//                $saveUser = User::where('email', $user->getEmail())->first();
//            }
//
//
//            Auth::loginUsingId($saveUser->id);
//
//            return redirect()->route('home');
//        } catch (\Throwable $th) {
//            throw $th;
//        }
//    }
//}
