@extends('master')

@section('content')
    
    <h2>Home</h2>
    
    <div class="actives-list">
        
        @foreach ($actives as $active)
            <li>{{$active->id}}</li>
        @endforeach

    </div>
@endsection