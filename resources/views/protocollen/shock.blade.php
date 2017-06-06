@extends('layouts.dashboard')

@push('stylesheets')
<!-- Example -->
<!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
@endpush

@section('main_container')

    <!-- page content -->
    <div class="right_col" role="main">
    <img src="Shock.png">
    <br>
    <a href="{{ url ('/cardiogeneshock') }}" class="btn btn-info">6.6 Cardiogene Shock</a>
    <a href="{{ url ('/anafylxieallergie') }}" class="btn btn-info">7.3 Anafylaxie Allergie</a>


    <br><br>
    </div>
    <!-- /page content -->

    <!-- footer content -->
    <footer>
        <div class="pull-right">
            HBO-ICT Patiënt Event Registratie
        </div>
        <div class="clearfix"></div>
    </footer>
    <!-- /footer content -->
@endsection