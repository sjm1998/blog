@extends('layouts.app')

@section('content')
    <h1>About Us</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
                    </div>
                    @if(Auth::user())
            <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
            @endif
                </div>
            </div>
        @endforeach
        
    @else
        <p>No Information Available now</p>
    @endif
@endsection