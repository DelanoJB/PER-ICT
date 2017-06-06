@extends ('layouts.dashboard')

@section('main_container')
    <div class="right_col" role="main">
        <div class="col-md-9">

            <div class="col-sm-12">
   {{--             {!! Form::open(['route' => ['loan.destroy', $user->id], 'method'=>'DELETE']) !!}--}}
                {!! Form::button('<i class="fa fa-trash"></i>&nbspVerwijderen', array('type' => 'submit', 'class'=> 'btn btn-danger', 'onclick'=>'return confirm("Weet je zeker dat je de gebruiker wilt verwijderen?")')); !!}
                {!! Form::close() !!}
            </div>
{{--                {!! Form::model($user, ['route' => ['user.update', $user->id], 'method' => 'put', 'class' => 'form-horizontal']) !!}--}}
                <div class="form-group">
                    <div class="form-group">

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
                            {{ Form::select('function', ['Arts' => 'Arts', 'Hulpverlener' => 'Hulpverlener', 'Ambulancepersoneel' => 'Ambulancepersoneel'],  'Arts', ['class' => 'form-control' ]) }}
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
                            {{ Form::number('housenumber', null, ['class' => 'form-control', 'placeholder' => 'Huisnummer']) }}
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
                            {{ Form::number('phone_number', null, ['class' => 'form-control', 'placeholder' => 'Telefoonnummer']) }}
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


                    <div class="form-group">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn fa-check"></i> Opslaan
                            </button>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}





        </div>
    </div>
@endsection
