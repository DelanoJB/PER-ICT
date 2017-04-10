@extends('layouts.dashboard')

@section('main_container')

    <!-- page content -->
    <div class="right_col" role="main">
        <table class="table table-striped table-hover">
            <thead>
            <th class="col-sm-2">ID</th>
            <th class="col-sm-2">Naam patiënt</th>
            <th class="col-sm-1">Notities</th>
            <th class="col-sm-1">Tijd</th>
            </thead>
            <tbody>
            @foreach ($injury_cards as $injury_card)
                <tr class="row-link" style="cursor: pointer;">
                    <td class="table-text">{{ $injury_card->id}}</td>
                    <td class="table-text">{{ $injury_card->name}}</td>
                    <td class="table-text">{{ $injury_card->notes}}</td>
                    <td class="table-text">{{ $injury_card->time1}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{ url ('/injury_card/create') }}" class="btn btn-info">Gewondekaart maken</a>
    </div>
@endsection