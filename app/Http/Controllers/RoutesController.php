<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class RoutesController extends Controller
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

//Hoofdstuk3
    public function airway()
    {
        return view('protocollen.airway');
    }

    public function breathing()
    {
        return view('protocollen.breathing');
    }

    public function circulation()
    {
        return view('protocollen.circulation');
    }

    public function disability()
    {
        return view('protocollen.disability');
    }

    public function exposure()
    {
        return view('protocollen.exposure');
    }

//    Hoofdstuk4
    public function misselijkheid()
    {
        return view('protocollen.misselijkheid');
    }

    public function onrust()
    {
        return view('protocollen.onrust');
    }

    public function pijnbestrijding()
    {
        return view('protocollen.pijnbestrijding');
    }

    public function shock()
    {
        return view('protocollen.shock');
    }

    public function wegraking()
    {
        return view('protocollen.wegraking');
    }

//    Hoofdstuk5
    public function reanimatie()
    {
        return view('protocollen.reanimatie');
    }

    public function reanimatievolwassene()
    {
        return view('protocollen.reanimatievolwassene');
    }

    public function reanimatiekind()
    {
        return view('protocollen.reanimatiekind');
    }

    public function ROSC()
    {
        return view('protocollen.ROSC');
    }

//    Hoofdstuk6
    public function acuutcoronairsyndroom()
    {
        return view('protocollen.acuutcoronairsyndroom');
    }

    public function acuutcoronairsyndroomregio()
    {
        return view('protocollen.acuutcoronairsyndroomregio');
    }

    public function astmacardiale()
    {
        return view('protocollen.astmacardiale');
    }

    public function bradycardievolwassene()
    {
        return view('protocollen.bradycardievolwassene');
    }

    public function bradycardiekind()
    {
        return view('protocollen.bradycardiekind');
    }

    public function cardiogeneshock()
    {
        return view('protocollen.cardiogeneshock');
    }

    public function LVAD()
    {
        return view('protocollen.LVAD');
    }

    public function pacemaker()
    {
        return view('protocollen.pacemaker');
    }

    public function tachycardievolwassene()
    {
        return view('protocollen.tachycardievolwassene');
    }

    public function tachycardiekind()
    {
        return view('protocollen.tachycardiekind');
    }

//    Hoofdstuk7
    public function acutebijnierschorsinsufficientie()
    {
        return view('protocollen.acutebijnierschorsinsufficientie');
    }

    public function ALTE()
    {
        return view('protocollen.ALTE');
    }

    public function anafylxieallergie()
    {
        return view('protocollen.anafylxieallergie');
    }

    public function astmabronchiale()
    {
        return view('protocollen.astmabronchiale');
    }

    public function epiglottitis()
    {
        return view('protocollen.epiglottitis');
    }

    public function hypohyperthermie()
    {
        return view('protocollen.hypohyperthermie');
    }

    public function hypohyperglykemie()
    {
        return view('protocollen.hypohyperglykemie');
    }

    public function intoxicaties()
    {
        return view('protocollen.intoxicaties');
    }

    public function intoxicatiesspecifiek()
    {
        return view('protocollen.intoxicatiesspecifiek');
    }

    public function laryngitissubglottica()
    {
        return view('protocollen.laryngitissubglottica');
    }

    public function neusbloeding()
    {
        return view('protocollen.neusbloeding');
    }

    public function obstructietracheacanule()
    {
        return view('protocollen.obstructietracheacanule');
    }

    public function pijnlijkesikkelcelcrisis()
    {
        return view('protocollen.pijnlijkesikkelcelcrisis');
    }



}
