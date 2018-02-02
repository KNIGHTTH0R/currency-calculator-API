<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Illuminate\Http\Request;
use Validator;
use GuzzleHttp\Client;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function calculate(Request $request)
    {
        $rules = array (
            'base_currency' => 'required|regex:/^[a-zA-Z]+$/u|size:3',
            'target_currency' => 'required|regex:/^[a-zA-Z]+$/u|max:3',
            'base_amount' => 'required|integer',
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect('home')
                ->withErrors($validator)
                ->withInput();
        } else {
            $client = new Client();
            $result = $client->request('GET','https://api.fixer.io/latest?base='.$request->input('base_currency'));
            $result =  json_decode($result->getBody()->getContents(), true);
            return view('result', ['result' => $result['rates'][$request->input('target_currency')]*$request->input('base_amount')]);
        }
    }
}
