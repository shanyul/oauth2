<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('oauth.clients');
    }

    public function authorizedClient()
    {
        return view('oauth.authorized_clients');
    }

    public function personalAccess()
    {
        return view('oauth.personal_access');
    }

    public function apiTestData(Request $request)
    {
        $data = [
            'code' => 200,
            'message' => 'success',
            'data' => 'hello word!',
        ];

        return response()->json($data);
    }
}
