<?php

namespace Freakage\Auth\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct(User $users)
    {
       $this->users = $users;
    }
      /**
     * show login page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function index()
    {
      return view('auth::login');
    }

    /**
     * Validate login page
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function validateLoginCredentials(Request $request)
    {

        $userEmail = $request->email;
        $userPassword = $request->password;

        $userDetails = $this->users->where('email',$userEmail)->first();

        if($userDetails->password == $userPassword){
            return view('dashboard');
        }
        else{
            echo "Credentials Not Valid";
        }
    }
}
