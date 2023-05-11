<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class FaceBookController extends Controller
{
/**
 * Login Using Facebook
 */
 public function loginUsingFacebook()
 {
    return Socialite::driver('facebook')->redirect();
 }

 public function callbackFromFacebook()
 {
  try {
       $user = Socialite::driver('facebook')->user();
       $finduser = User::where('email', $user->getEmail())->first();
            if ($finduser) {
                Auth::login($finduser);
                $finduser->facebook_id=$user->getId();
		$finduser->update();
                return redirect()->intended('home');
            } else {
                $newUser = User::create([
                    'name' => $user->getName(),
                    'email' => $user->getEmail(),
                    'facebook_id' => $user->getId(),
                    'password' => Hash::make($user->getName().'@'.$user->getId())
                ]);
		$user_id=$newUser->id;
		copy(public_path()."/storage/usersphoto/0.jpg", public_path()."/storage/usersphoto/$user_id.jpg");
       		Auth::loginUsingId($newUser->id);
/*

       $saveUser = User::updateOrCreate([
           'facebook_id' => $user->getId(),
       ],[
           'name' => $user->getName(),
           'email' => $user->getEmail(),
           'password' => Hash::make($user->getName().'@'.$user->getId())
            ]);

       Auth::loginUsingId($saveUser->id);
*/

       return redirect()->route('home');
       }
        } catch (Exception $e) {

            dd($e->getMessage());

        }
   }
}
?>