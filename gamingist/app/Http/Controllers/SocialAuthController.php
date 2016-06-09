<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\SocialAccountService;
use Socialite;

class SocialAuthController extends Controller {

    protected $request;

    public function __construct(Request $request) {
        $this->request = $request;
    }

    public function redirect($provider) {
        return Socialite::driver($provider)->redirect();    
    }

    public function callback(SocialAccountService $service,$provider) {

        if (isset($this->request['error'])) {
            return redirect()->to('/error');
            //make your error route or do whatever you want!!
        } else {

            $user = $service->createOrGetUser(Socialite::driver($provider));

            auth()->login($user);

            return redirect()->to('/');
        }
    }

}
