@extends('layouts.dashboard')

@section('main_container')
    <div class="right_col" role="main">
        <div class="col-md-9">
            <a href="createuser">
                <button type="button" class="btn btn-primary">
                    Gebruiker Aanmaken
                </button>
            </a>
            <a href="edit">
                <button type="button" class="btn btn-primary">
                    Edit
                </button>
            </a>
            <div class="flash-message">
                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                    @if(Session::has('alert-' . $msg))
                        <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                    @endif
                @endforeach
            </div>



            <table class="table table-striped table-hover">
                <thead>
                <th class="col-sm-1">Voornaam</th>
                <th class="col-sm-1">Achternaam</th>
                <th class="col-sm-1">Functie</th>
                <th class="col-sm-1">Telefoonnumer</th>
                <th class="col-sm-1">E-mailadres</th>
                </thead>
                <tbody>
                @foreach ($users as $user)
                    <tr class="row-link" style="cursor: pointer;"
                        data-href="{{action('UserController@edit', ['id' => $user->id]) }}">
                        <td class="table-text">{{ $user->first_name}}</td>
                        <td class="table-text">{{ $user->last_name}}</td>
                        <td class="table-text">{{ $user->function}}</td>
                        <td class="table-text">{{ $user->phone_number}}</td>
                        <td class="table-text">{{ $user->email}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
