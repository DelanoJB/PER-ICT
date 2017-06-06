<?php namespace App\Http\Controllers;

use App\GewondenKaart;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class Injury_cardsController extends Controller {

    public function index()
    {
        return view('injury_card.index', [
            'injury_cards' => GewondenKaart::orderBy( 'id', 'asc' )->get (),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view ('injury_card.create'
            );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $injury_card = new GewondenKaart;

        $injury_card->gender = $request->get('gender');
        $injury_card->name = $request->get('name');
        $injury_card->birthday_day = $request->get('birthday_day');
        $injury_card->birthday_month = $request->get('birthday_month');
        $injury_card->birthday_year = $request->get('birthday_year');
        $injury_card->address = $request->get('address');
        $injury_card->allergies = $request->get('allergies');
        $injury_card->medication = $request->get('medication');
        $injury_card->past = $request->get('past');
        $injury_card->last_meal = $request->get('last_meal');
        $injury_card->exposure = $request->get('exposure');
        $injury_card->o_m = $request->get('o_m');
        $injury_card->head_diagnose = $request->get('head_diagnose');
        $injury_card->notes = $request->get('notes');
        /** table */
        $injury_card->time1 = $request->get('time1');
        $injury_card->code1 = $request->get('code1');
        $injury_card->applied1 = $request->get('applied1');
        $injury_card->treatment1 = $request->get('treatment1');
        $injury_card->time2 = $request->get('time2');
        $injury_card->code2 = $request->get('code2');
        $injury_card->applied2 = $request->get('applied2');
        $injury_card->treatment2 = $request->get('treatment2');
        $injury_card->time3 = $request->get('time3');
        $injury_card->code3 = $request->get('code3');
        $injury_card->applied3 = $request->get('applied3');
        $injury_card->treatment3 = $request->get('treatment3');
        $injury_card->time4 = $request->get('time4');
        $injury_card->code4 = $request->get('code4');
        $injury_card->applied4 = $request->get('applied4');
        $injury_card->treatment4 = $request->get('treatment4');

        $injury_card->save();

        $request->session()->flash('alert-success', 'Gewondekaart opgeslagen.');
        return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return view('injury_card.index', [
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}
