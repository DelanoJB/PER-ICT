@extends('layouts.dashboard')

@push('stylesheets')
<!-- Example -->
<!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
@endpush

@section('main_container')

    <!-- page content -->
    <div class="right_col" role="main">
    <img src="Reanimatie.png">
<br>
    <a href="{{ url ('/overleden') }}" class="btn btn-info">12.6 Overleden</a>
    <a href="{{ url ('/LVAD') }}" class="btn btn-info">6.7 LVAD</a>
    <a href="{{ url ('/reanimatievolwassene') }}" class="btn btn-info">5.2 Reanimatie Volwassene</a>
    <a href="{{ url ('/reanimatiekind') }}" class="btn btn-info">5.3 Reanimatie Kind</a>


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