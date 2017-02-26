@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Verfügbare Aktivitäten</div>
                <div class="panel-body">
                    
                    @foreach ($activities as $activity)
                        <p>Id: {{ $activity->id }}
                        Name: {{ $activity->name }}
                        Typ: {{ $activity->type }}
                        Erstellt: {{ $activity->created_at }}</p>
                    @endforeach
                                        
                    <a href="{{ url('/activities') }}"
                        onclick="event.preventDefault();
                                 document.getElementById('addActivity-form').submit();">
                        Annehmen
                    </a>

                    <form id="addActivity-form" action="{{ url('/activities') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                        <input type="hidden" name="activity" value="{{ $activity->id }}">
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
