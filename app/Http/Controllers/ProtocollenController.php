<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class ProtocollenController extends Controller
{

//    work in progress
//    private $views = [
//            'airway' => 'protocollen.airway',
//            'breathing' => 'protocollen.breathing',
//        ];

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


//    work in progress
//    public function show($id) {
//        return view($this->views[$id]);
//        switch ( $id ) {
//            case 'airway' :
//                return view('protocollen.airway');
//        }
//        return $id;
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('protocollen');
    }
}
