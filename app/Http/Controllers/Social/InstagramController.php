<?php

namespace App\Http\Controllers\Social;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class InstagramController extends Controller
{
    
    public function redirectToInstagramProvider()
    {
        return Socialite::with('instagram')->scopes([
            "public_content"])->redirect();
    }
 
    public function handleProviderInstagramCallback()
    {
        $insta = Socialite::driver('instagram')->user();
        $details = [
            "access_token" => $insta->token
        ];
 
        if(Auth::user()->instagram){
            Auth::user()->instagram()->update($details);
        }else{
            Auth::user()->instagram()->create($details);
        }
        return redirect('/');
    }

}
