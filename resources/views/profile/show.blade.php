@extends('layouts.dashboard')
@section('main_container')
    <div class="right_col" role="main">
        <div class="col-md-9">
            <h1> {{$user->first_name}}'s Profiel</h1>
        </div>
        {{ Form::open(['method' => 'post', 'class' => 'form-horizontal']) }}
        <div class="form-group">
            <div class="form-group">
                <div class="col-sm-6">
                    <a href="{{ url()->previous() }}">
                        <button type="button" class="btn btn-primary">
                            <i class="fa fa-arrow-left"></i> Terug
                        </button>
                    </a>
                </div>
            </div>
            <div class="col-sm-6">
                {{ Form::label('voornaam', 'Voornaam', ['class' => 'control-label']) }}
                {{ Form::text('id', $user->first_name, ['class' => 'form-control', 'readonly' => 'true']) }}
            </div>
            <div class="col-sm-6">
                {{ Form::label('achternaam', 'Achternaam', ['class' => 'control-label']) }}
                {{ Form::text('id', $user->last_name, ['class' => 'form-control', 'readonly' => 'true']) }}
            </div>
            <div class="col-sm-6">
                {{ Form::label('functie', 'Functie', ['class' => 'control-label']) }}
                {{ Form::text('id', $user->function, ['class' => 'form-control', 'readonly' => 'true']) }}
            </div>
            <div class="col-sm-6">
                {{ Form::label('geboortedatum', 'Geboortedatum', ['class' => 'control-label']) }}
                {{ Form::text('id', $user->date_of_birth, ['class' => 'form-control', 'readonly' => 'true']) }}
            </div>
            <div class="col-sm-4">
                {{ Form::label('straat', 'Straat', ['class' => 'control-label']) }}
                {{ Form::text('id', $user->street, ['class' => 'form-control', 'readonly' => 'true']) }}
            </div>
            <div class="col-sm-2">
                {{ Form::label('huisnummer', 'Huisnummer', ['class' => 'control-label']) }}
                {{ Form::number('id', $user->housenumber, ['class' => 'form-control', 'readonly' => 'true']) }}
            </div>
            <div class="col-sm-6">
                {{ Form::label('woonplaats', 'Woonplaats', ['class' => 'control-label']) }}
                {{ Form::text('id', $user->residence, ['class' => 'form-control', 'readonly' => 'true']) }}
            </div>
            <div class="col-sm-6">
                {{ Form::label('email', 'E-mail', ['class' => 'control-label']) }}
                {{ Form::text('id', $user->email, ['class' => 'form-control', 'readonly' => 'true']) }}
            </div>
            <div class="col-sm-6">
                {{ Form::label('telefoonnummer', 'Telefoonnummer', ['class' => 'control-label']) }}
                {{ Form::text('id', $user->phone_number, ['class' => 'form-control', 'readonly' => 'true']) }}
            </div>
        </div>
        <div>

            {{ Form::close() }}
    </div>
@endsection