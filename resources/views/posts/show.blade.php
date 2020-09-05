@extends('layouts.app');

@section('content')
<a href="/posts"><button type="button" class="btn btn-outline-secondary mb-3">Go Back</button></a>
    <h1>{{$posts->title}}</h1>
    <div>
        {!!$posts->body!!}
    </div>
    <hr>
    <small>Written on {{$posts->created_at}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $posts->user_id)
            <a href="/posts/{{$posts->id}}/edit" class="btn btn-outline-success pr-3">Edit</a>

            {!!Form::open(['action'=>['PostsController@destroy', $posts->id], 'method' => 'POST', 'class'=> 'float-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete',['class'=>'btn btn-outline-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif
@endsection