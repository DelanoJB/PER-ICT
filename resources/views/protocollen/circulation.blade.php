@extends('layouts.dashboard')

@push('stylesheets')
<!-- Example -->
<!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
@endpush

@section('main_container')

    <!-- page content -->
    <div class="right_col" role="main">
        <img src="Circulation.png">

        <br>
        <a href="{{ url ('/disability') }}" class="btn btn-info">3.4 Disability</a>
        <a href="{{ url ('/shock') }}" class="btn btn-info">4.4 Shock</a>
        <a href="{{ url ('/tachycardievolwassene') }}" class="btn btn-info">6.9 Tachycardie Volwassene</a>
        <a href="{{ url ('/tachycardiekind') }}" class="btn btn-info">6.10 Tachycardie Kind</a>


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