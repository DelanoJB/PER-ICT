@extends('layouts.dashboard')

@push('stylesheets')
<!-- Example -->
<!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
@endpush

@section('main_container')

    <!-- page content -->
    <div class="right_col" role="main">
        <img src="Disability.png">

        <br>
        <a href="{{ url ('/exposure') }}" class="btn btn-info">3.5 Exposure</a>
        <a href="{{ url ('/hypohyperglykemie') }}" class="btn btn-info">7.7 Hypo / Hyperglykemie</a>

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