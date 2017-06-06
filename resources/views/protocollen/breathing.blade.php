@extends('layouts.dashboard')

@push('stylesheets')
<!-- Example -->
<!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
@endpush

@section('main_container')

    <!-- page content -->
    <div class="right_col" role="main">
        <img src="Breathing.png">

        <br>
        <a href="{{ url ('/reanimatie') }}" class="btn btn-info">5.1 Reanimatie</a>
        <a href="{{ url ('/circulation') }}" class="btn btn-info">3.3 Circulation</a>


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