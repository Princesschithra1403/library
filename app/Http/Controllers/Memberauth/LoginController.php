<?php

namespace App\Http\Controllers\Memberauth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Throwable;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    // use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/admin/index';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest:admin')->except('logout');
    //     $this->middleware('guest:subadmin')->except('logout');
    // }

    public function showMemberLoginForm()
    {
        return view('Memberauth.login');
    }



    public function usercheck($user,$redirect_route,$guard){
       
            if($user->status == 1){
             return redirect($redirect_route)->with('success',"Logged in successfully");
            }else{
             \Auth::guard($guard)->logout();
             return back()->withInput()->with('error',"Your account was inactive");
            }
    }
    
    public function memberLogin(Request $request)
    {
        if(isset($request->usertype)){
               $validator=Validator::make($request->all(),[
                    "email"=>"required|email",
                    "password"=>"required|min:8",
                    "usertype"=>"required"
                   ]);
        if($validator->fails()){
         return redirect()->back()->withInput()->withErrors($validator->errors());
         }
        } else{
            return back()->withInput($request->only('email', 'remember'))->with('error',"Please select your usertype ");
        }
            if($request->usertype == "reviewer"){
                if (\Auth::guard('reviewer')->attempt($request->only(['email','password']), $request->get('remember'))){
                
                        $login_user = auth('reviewer')->user();
                        $redirect_route = '/reviewer/index';
                        $guard = 'reviewer';
                        return $this->usercheck($login_user,$redirect_route,$guard);
                    }
                return back()->withInput($request->only('email', 'remember'))->with('error',"Invalid Credentials");
            }
           else if($request->usertype == "librarian"){
            if (\Auth::guard('librarian')->attempt($request->only(['email','password']), $request->get('remember'))){
                $login_user = auth('librarian')->user();
                $redirect_route = '/librarian/index';
                $guard = 'librarian';
                return $this->usercheck($login_user,$redirect_route,$guard);  
                }
                return back()->withInput($request->only('email', 'remember'))->with('error',"Invalid Credentials");
            }
        }
       
       
      

      
    

    //  /**
    //  * Log the user out of the application.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
    //  */
    public function logout()
    {

        if((\Auth::guard('reviewer')->check())){
            \Auth::guard('reviewer')->logout();
        }
       else if((\Auth::guard('librarian')->check())){
            \Auth::guard('librarian')->logout();
        }
      

        return view('Memberauth.login');
    //   return redirect()->route('Reviewer.login');
    //     $this->guard()->logout();

    //     $request->session()->invalidate();

    //     $request->session()->regenerateToken();

    //     if ($response = $this->loggedOut($request)) {
    //         return $response;
    //     }

    //     return $request->wantsJson()
    //         ? new JsonResponse([], 204)
    //         : redirect()->route('admin.login');
    }
}
