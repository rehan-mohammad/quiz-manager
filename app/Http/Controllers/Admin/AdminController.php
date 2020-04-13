<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->is_admin != "1"){
            Session::flash( 'flash_message', 'You do not have access to this page' );

            return redirect( url( '/' ) );
        }

        return view(
            'admin.index'
        );

    }

    public function register()
    {

        return view(
            'admin.register'
        );

    }

}
