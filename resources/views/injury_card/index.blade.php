@extends('layouts.dashboard')
@section('main_container')


    <style>
        #lastform{
            padding-bottom: 20px;
        }
        #table_title{
            font-size: 14px;
        }
        th{
            border: 2px solid #c0c0c0;
        }

        td {
            border: 1px solid #ccc;
        }
        #date {
            padding-top: 8px;
        }
    </style>
    <!-- page content -->
    <div class="right_col" role="main">

    {{Form::open(['route' => ['injury_card.store'], 'class' => 'form-horizontal']) }}
    <div class="col-sm-6">
        {{ Form::label('gender', 'Geslacht', ['class' => 'control-label'] )  }}
        {{ Form::select('gender', ['Man' => 'Man', 'Vrouw' => 'Vrouw' ],  'Man', ['class' => 'form-control' ]) }}
    </div>
    <div class="col-sm-6">
        {{ Form::label('name', 'Naam', ['class' => 'control-label']) }}
        {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Naam']) }}
    </div>
    <div class="col-sm-1">
        {{ Form::label('birthday_day', 'Geboortedatum', ['class' => 'control-label']) }}
        {{ Form::text('birthday_day', null, ['class' => 'form-control', 'maxlength' => '2', 'placeholder' => '09']) }}
    </div>
    <div id="date" class="col-sm-1">
        {{ Form::label('birthday_month', ' ', ['class' => 'control-label']) }}
        {{ Form::text('birthday_month', null, ['class' => 'form-control','maxlength' => '2', 'placeholder' => '12']) }}
    </div>
    <div id="date" class="col-sm-2">
        {{ Form::label('birthday_year', ' ', ['class' => 'control-label']) }}
        {{ Form::text('birthday_year', null, ['class' => 'form-control','maxlength' => '4', 'placeholder' => '1980']) }}
    </div>

    <div class="col-sm-7">
        {{ Form::label('address', 'Adres', ['class' => 'control-label']) }}
        {{ Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'Kalverstraat 46']) }}
    </div>
    <div class="col-sm-6">
        {{ Form::label('allergies', 'Allergieën', ['class' => 'control-label']) }}
        {{ Form::text('allergies', null, ['class' => 'form-control', 'placeholder' => 'Pinda allergie']) }}
    </div>
    <div class="col-sm-6">
        {{ Form::label('medication', 'Medicatie', ['class' => 'control-label']) }}
        {{ Form::text('medication', null, ['class' => 'form-control', 'placeholder' => 'Cholesterolabsorbtieremmers']) }}
    </div>
    <div class="col-sm-6">
        {{ Form::label('past', 'Past', ['class' => 'control-label'] )  }}
        {{ Form::select('past', ['n.v.t.' => 'n.v.t.', 'CVA' => 'CVA', 'Epilepsie' => 'Epilepsie', 'Hartklachten' => 'Hartklachten', 'Kanker' => 'Kanker', 'Hoge bloeddruk' => 'Hoge bloeddruk', 'Suikerziekte' => 'Suikerziekte', 'COPD' => 'COPD' ],  'n.v.t.', ['class' => 'form-control' ]) }}
    </div>
    <div class="col-sm-6">
        {{ Form::label('last_meal', 'Last meal', ['class' => 'control-label']) }}
        {{ Form::text('last_meal', null, ['class' => 'form-control', 'placeholder' => 'Maaltijdsalade']) }}
    </div>
    <div class="col-sm-6">
        {{ Form::label('exposure', 'Exposure', ['class' => 'control-label']) }}
        {{ Form::text('exposure', null, ['class' => 'form-control', 'placeholder' => '2,5 uur']) }}
    </div>
    <div class="col-sm-6">
        {{ Form::label('o_m', 'Ongevalsmeganisme', ['class' => 'control-label']) }}
        {{ Form::text('o_m', null, ['class' => 'form-control', 'placeholder' => 'Ongevalsmechanisme']) }}
    </div>
    <div class="col-sm-6">
        {{ Form::label('head_diagnose', 'Hoofddiagnose', ['class' => 'control-label']) }}
        {{ Form::text('head_diagnose', null, ['class' => 'form-control', 'placeholder' => 'Hoofddiagnose']) }}
    </div>
    <div id="lastform" class="col-sm-12">
        {{ Form::label('notes', 'Notities', ['class' => 'control-label']) }}
        {{ Form::text('notes', null, ['class' => 'form-control', 'placeholder' => 'Notities']) }}
    </div>
    <div class="col-sm-12">
        <p id="table_title">Behandeling</p>
        <table>
            <tr>
                <th>Tijd</th>
                <th>Code</th>
                <th>Verricht door</th>
                <th>Behandeling</th>
            </tr>
            <tr>
                <td> <div>
                        {{ Form::label('time1', ' ', ['class' => 'control-label']) }}
                        {{ Form::text('time1', null, ['class' => 'form-control', 'placeholder' => '17:40']) }}
                    </div></td>
                <td> <div>
                        {{ Form::label('code1', ' ', ['class' => 'control-label']) }}
                        {{ Form::text('code1', null, ['class' => 'form-control', 'placeholder' => '45a']) }}
                    </div></td>
                <td> <div>
                        {{ Form::label('applied1', ' ', ['class' => 'control-label']) }}
                        {{ Form::text('applied1', null, ['class' => 'form-control', 'placeholder' => 'Jan Karelse']) }}
                    </div></td>
                <td> <div>
                        {{ Form::label('treatment1', ' ', ['class' => 'control-label']) }}
                        {{ Form::text('treatment1', null, ['class' => 'form-control', 'placeholder' => 'Reanimatie']) }}
                    </div></td>
            </tr>
            <tr>
                <td> <div>
                        {{ Form::label('time2', ' ', ['class' => 'control-label']) }}
                        {{ Form::text('time2', null, ['class' => 'form-control']) }}
                    </div></td>
                <td> <div>
                        {{ Form::label('code2', ' ', ['class' => 'control-label']) }}
                        {{ Form::text('code2', null, ['class' => 'form-control']) }}
                    </div></td>
                <td> <div>
                        {{ Form::label('applied2', ' ', ['class' => 'control-label']) }}
                        {{ Form::text('applied2', null, ['class' => 'form-control']) }}
                    </div></td>
                <td> <div>
                        {{ Form::label('treatment2', ' ', ['class' => 'control-label']) }}
                        {{ Form::text('treatment2', null, ['class' => 'form-control']) }}
                    </div></td>
            </tr>
            <tr>
                <td> <div>
                        {{ Form::label('time3', ' ', ['class' => 'control-label']) }}
                        {{ Form::text('time3', null, ['class' => 'form-control']) }}
                    </div></td>
                <td> <div>
                        {{ Form::label('code3', ' ', ['class' => 'control-label']) }}
                        {{ Form::text('code3', null, ['class' => 'form-control']) }}
                    </div></td>
                <td> <div>
                        {{ Form::label('applied3', ' ', ['class' => 'control-label']) }}
                        {{ Form::text('applied3', null, ['class' => 'form-control']) }}
                    </div></td>
                <td> <div>
                        {{ Form::label('treatment3', ' ', ['class' => 'control-label']) }}
                        {{ Form::text('treatment3', null, ['class' => 'form-control']) }}
                    </div></td>
            </tr>
            <tr>
                <td> <div>
                        {{ Form::label('time4', ' ', ['class' => 'control-label']) }}
                        {{ Form::text('time4', null, ['class' => 'form-control']) }}
                    </div></td>
                <td> <div>
                        {{ Form::label('code4', ' ', ['class' => 'control-label']) }}
                        {{ Form::text('code4', null, ['class' => 'form-control']) }}
                    </div></td>
                <td> <div>
                        {{ Form::label('applied4', ' ', ['class' => 'control-label']) }}
                        {{ Form::text('applied4', null, ['class' => 'form-control']) }}
                    </div></td>
                <td> <div>
                        {{ Form::label('treatment4', ' ', ['class' => 'control-label']) }}
                        {{ Form::text('treatment4', null, ['class' => 'form-control']) }}
                    </div></td>

            </tr>
        </table>
        <br>
        <div>
            {{ Form::submit('Gewondekaart opslaan',
              array('class'=>'btn btn-primary'
            )) }}
        </div>
    </div>
    {{Form::close()}}
    </div>

@endsection
