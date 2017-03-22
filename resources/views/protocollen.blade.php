@extends('layouts.dashboard')

@push('stylesheets')
<!-- Example -->
<!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
@endpush

@section('main_container')

    <!-- page content -->
    <div class="right_col" role="main">
        Hoofdstuk 3     Zorgverlening
        <br>
        <a href="{{ url ('/airway') }}" class="btn btn-info">3.1 Airway</a>
        <a href="{{ url ('/breathing') }}" class="btn btn-info">3.2 Breathing</a>
        <a href="{{ url ('/circulation') }}" class="btn btn-info">3.3 Circulation</a>
        <a href="{{ url ('/disability') }}" class="btn btn-info">3.4 Disability</a>
        <a href="{{ url ('/exposure') }}" class="btn btn-info">3.5 Exposure</a>


        <br><br>
        Hoofstuk 4      Algemeen
        <br>
        <a href="{{ url ('/misselijkheid') }}" class="btn btn-info">4.1 Misselijkheid</a>
        <a href="{{ url ('/onrust') }}" class="btn btn-info">4.2 Onrust</a>
        <a href="{{ url ('/pijnbestrijding') }}" class="btn btn-info">4.3 Pijnbestrijding</a>
        <a href="{{ url ('/shock') }}" class="btn btn-info">4.4 Shock</a>
        <a href="{{ url ('/wegraking') }}" class="btn btn-info">4.5 Wegraking</a>

        <br><br>
        Hoofdstuk 5     Reanimatie
        <br>
        <a href="{{ url ('/reanimatie') }}" class="btn btn-info">5.1 Reanimatie</a>
        <a href="{{ url ('/reanimatievolwassene') }}" class="btn btn-info">5.2 Reanimatie Volwassene</a>
        <a href="{{ url ('/reanimatiekind') }}" class="btn btn-info">5.3 Reanimatie Kind</a>
        <a href="{{ url ('/ROSC') }}" class="btn btn-info">5.4 ROSC</a>

        <br><br>
        Hoofdstuk 6     Cardiologie
        <br>
        <a href="{{ url ('/acuutcoronairsyndroom') }}" class="btn btn-info">6.1 Acuut Coronair Syndroom</a>
        <a href="{{ url ('/acuutcoronairsyndroomregio') }}" class="btn btn-info">6.2 Acuut Coronair Syndroom Regio</a>
        <a href="{{ url ('/astmacardiale') }}" class="btn btn-info">6.3 Astma Cardiale</a>
        <a href="{{ url ('/bradycardievolwassene') }}" class="btn btn-info">6.4 Bradycardie Volwassene</a>
        <a href="{{ url ('/bradycardiekind') }}" class="btn btn-info">6.5 Bradycardie Kind</a>
        <a href="{{ url ('/cardiogeneshock') }}" class="btn btn-info">6.6 Cardiogene Shock</a>
        <a href="{{ url ('/LVAD') }}" class="btn btn-info">6.7 LVAD</a>
        <a href="{{ url ('/pacemaker') }}" class="btn btn-info">6.8 Pacemaker</a>
        <a href="{{ url ('/tachycardievolwassene') }}" class="btn btn-info">6.9 Tachycardie Volwassene</a>
        <a href="{{ url ('/tachycardiekind') }}" class="btn btn-info">6.10 Tachycardie Kind</a>

        <br><br>
        Hoofdstuk 7     Interne
        <br>
        <a href="{{ url ('/acutebijnierschorsinsufficientie') }}" class="btn btn-info">7.1 Acute Bijnierschorsinsufficiëntie</a>
        <a href="{{ url ('/ALTE') }}" class="btn btn-info">7.2 ALTE</a>
        <a href="{{ url ('/anafylxieallergie') }}" class="btn btn-info">7.3 Anafylxie Allergie</a>
        <a href="{{ url ('/astmabronchiale') }}" class="btn btn-info">7.4 Astma Bronchiale</a>
        <a href="{{ url ('/epiglottitis') }}" class="btn btn-info">7.5 Epiglottitis</a>
        <a href="{{ url ('/hypohyperthermie') }}" class="btn btn-info">7.6 Hypo / Hyperthermie</a>
        <a href="{{ url ('/hypohyperglykemie') }}" class="btn btn-info">7.7 Hypo / Hyperglykemie</a>
        <a href="{{ url ('/intoxicaties') }}" class="btn btn-info">7.8 Intoxicaties</a>
        <a href="{{ url ('/intoxicatiesspecifiek') }}" class="btn btn-info">7.9 Intoxicaties (Specifiek)</a>
        <a href="{{ url ('/laryngitissubglottica') }}" class="btn btn-info">7.10 Laryngitis Subglottica</a>
        <a href="{{ url ('/neusbloeding') }}" class="btn btn-info">7.11 Neusbloeding</a>
        <a href="{{ url ('/obstructietracheacanule') }}" class="btn btn-info">7.12 Obstructie Tracheacanule</a>
        <a href="{{ url ('/pijnlijkesikkelcelcrisis') }}" class="btn btn-info">7.13 Pijnlijke Sikkelcelcrisis</a>



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