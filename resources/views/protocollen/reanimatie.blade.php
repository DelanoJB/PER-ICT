@extends ('layouts.dashboard')
@section('page_heading')

@section('section')

    <img src="Reanimatie.png">
<br>
    <a href="{{ url ('/overleden') }}" class="btn btn-info">12.6 Overleden</a>
    <a href="{{ url ('/LVAD') }}" class="btn btn-info">6.7 LVAD</a>
    <a href="{{ url ('/reanimatievolwassene') }}" class="btn btn-info">5.2 Reanimatie Volwassene</a>
    <a href="{{ url ('/reanimatiekind') }}" class="btn btn-info">5.3 Reanimatie Kind</a>


    <br><br>
@stop