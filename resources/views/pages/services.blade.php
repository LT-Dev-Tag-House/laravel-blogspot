@extends('layouts.app')

@section('content')
        <h1>{{$title}}</h1>
        <ul class="list-group">
            @if (count($options) > 0)
                @foreach ($options as $option)
                    <li class="list-group-item">{{$option}}</li>
                @endforeach
            @endif
        </ul>
@endsection
