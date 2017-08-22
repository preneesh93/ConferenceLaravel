@extends('layouts.app')

@section('content')
    <h1>Submissions</h1>
    @if(count($subs) > 0)
        @foreach($subs as $sub)
            <div class="well">
                <h3><a href="/submissions/{{$sub->id}}">{{$sub->title}}</a></h3>
                <small>Submitted on: {{$sub->created_at}}</small>
            </div>
        @endforeach
        {{$subs->links()}}
    @else
        <p>No Submissions found!</p>
    @endif
@endsection