<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use App\favorite;

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

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }

    public function Signinfunc( Request $data ) {
        $var = new User;
        $var = User::where('name', $data->username)->where('password', $data->password)->first();
        if (isset($var)) {
            session(['favoper' => 'Enable']);
            session(['userid' => $var->id]);
            $userid = $var->id;
            $favorresult = favorite::select("houseid")->where('userid', $userid)->get();
            $favornum = $favorresult->count();
            $estates = DB::table('estates')->paginate(30);
            return view('homepage', ['estates' => $estates, 'favorResult' => $favorresult, "favornum" => $favornum]);
        }
        $loginerror = "No matched!";
        return view('signin', ['error' => $loginerror]);
    }
}
