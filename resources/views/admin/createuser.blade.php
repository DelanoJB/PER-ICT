@extends('layouts.dashboard')
@section('page_heading','Admin')

@section('section')
    {{ Form::open(['route' => ['users.store'], 'class' => 'form-horizontal']) }}


            <div class="col-sm-6">
                <a href="admin">
                    <button type="button" class="btn btn-primary">
                    <i class="fa fa-arrow-left"></i> Terug
                    </button>
                </a>
            </div>
        </div>
        <div class="col-sm-6">
            {{ Form::label('first_name', 'Voornaam', ['class' => 'control-label']) }}
            {{ Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'Voornaam']) }}
        </div>
        <div class="col-sm-6">
            {{ Form::label('last_name', 'Achternaam', ['class' => 'control-label']) }}
            {{ Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Achternaam']) }}
        </div>
    <div class="col-sm-6">
        {{ Form::label('function', 'Functie', ['class' => 'control-label'] )  }}
        {{ Form::select('function', ['Arts' => 'Arts', 'Hulpverlener' => 'Hulpverlener', 'Ambulancepersoneel' => 'Ambulancepersoneel', 'Verpleger' => 'Verpleger'],  'Arts', ['class' => 'form-control' ]) }}
    </div>
        <div class="col-sm-6">
            {{ Form::label('date_of_birth', 'Geboortedatum', ['class' => 'control-label']) }}
            {{ Form::date('date_of_birth', \Carbon\Carbon::now(), ['class' => 'form-control', 'placeholder' => 'Geboortedatum']) }}
        </div>
        <div class="col-sm-6">
        {{ Form::label('postal_code', 'Postcode', ['class' => 'control-label']) }}
        {{ Form::text('postal_code', null, ['class' => 'form-control', 'placeholder' => 'Postcode']) }}
        </div>
        <div class="col-sm-2">
        {{ Form::label('housenumber', 'Huisnummer', ['class' => 'control-label']) }}
        {{ Form::text('housenumber', null, ['class' => 'form-control', 'placeholder' => 'Huisnummer']) }}
        </div>
        <div class="col-sm-4">
            {{ Form::label('street', 'Straat', ['class' => 'control-label']) }}
            {{ Form::text('street', null, ['class' => 'form-control', 'placeholder' => 'Straat']) }}
        </div>
        <div class="col-sm-6">
            {{ Form::label('residence', 'Woonplaats', ['class' => 'control-label']) }}
            {{ Form::text('residence', null, ['class' => 'form-control', 'placeholder' => 'Woonplaats']) }}
        </div>
        <div class="col-sm-6">
            {{ Form::label('email', 'E-mail', ['class' => 'control-label']) }}
            {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'E-mail']) }}
        </div>
        <div class="col-sm-6">
            {{ Form::label('phone_number', 'Telefoonnummer', ['class' => 'control-label']) }}
            {{ Form::text('phone_number', null, ['class' => 'form-control', 'placeholder' => 'Telefoonnummer']) }}
        </div>
        <div class="col-sm-6">
            {{ Form::label('username', 'Gebruikersnaam', ['class' => 'control-label']) }}
            {{ Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Gebruikersnaam']) }}
        </div>
        <div class="col-sm-6">
            {{ Form::label('password', 'Wachtwoord', ['class' => 'control-label']) }}
            {{ Form::text('password', null, ['class' => 'form-control', 'placeholder' => 'Wachtwoord']) }}
        </div>
        <div class="col-sm-6">
            {{ Form::label('password2', 'Herhaal Wachtwoord', ['class' => 'control-label']) }}
            {{ Form::text('password2', null, ['class' => 'form-control', 'placeholder' => 'Herhaal Wachtwoord']) }}
        </div>
    <div class="col-sm-6">
        {{ Form::submit('Gebruiker toevoegen',
          array('class'=>'btn btn-primary')) }}
    </div>

    {{ Form::close() }}
<div class="col-sm-12">
    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
        </ul>
    @endif
</div>
@endsection
@include('widgets.panel', array('header'=>true, 'as'=>'cotable'))

@stop