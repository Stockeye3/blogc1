@extends('layouts.master')

@section ('content')

<div class="col-sm-8 blog-main">
    <!--<p> hello show </p>-->
    <h3> {{ $post->title }} </h3>
    
    
    <p>{{ $post->body }} </p>
    
    <div class="comments">
<!--        @foreach($post->comments as $comment)
        {{$comment->body}}
        @endforeach
        -->
    </div>
    
</div>
    @endsection