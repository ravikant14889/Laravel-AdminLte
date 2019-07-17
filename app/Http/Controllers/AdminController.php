<?php
namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
 
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin')->except('logout');
    }
    
	/**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard');
    }
 
    public function logout()
    {
      Auth::guard('admin')->logout();
      return redirect('/admin');
    }
}
