@extends('layouts.app')

@section('content')
    <h2>{{$sub->title}}</h2>
    <h4>Keywords:</h4>
    <div>
        <p>
            @if(count($keys)>1) 
                @foreach($keys as $key)
                    {{$key}},
                @endforeach
            @endif
        </p>
    </div>
    <h4>Abstract:</h4>
    <p>{{$sub->abstract}}</p>
    <hr>
    <small>Submitted by: ------ at {{$sub->created_at}}</small>
    <br><br>
    <a href="/submissions" class="btn btn-default">Go Back</a>
@endsection