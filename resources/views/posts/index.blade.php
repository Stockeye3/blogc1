@extends('layouts.master')

@section('content')


<div class="col-sm-8 blog-main">
<?php $posts = App\Post::orderBy('created_at', 'desc')->get(); ?>
<!--i added the above line (copy paste from the controller function ) to remove the error
but now i have to copy this line in all views... i think there s a syntax error in the compact 
or in the return function-->
    @foreach($posts as $post)
    @include('posts.post')
    @endforeach




    <nav class="blog-pagination">
        
        <a class="btn btn-outline-primary" href="#">Older</a>
        
        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
        
    </nav>

</div>


@endsection