@extends('layout')

@section('title')
    Posts - Blog
@endsection

@section('content')
    <a href="/"><h3>Latest Posts</h3></a>
    <hr>
    <section class="blogs">
        @foreach($posts as $post)
        <article class="blog">
            <h1>{{ $post -> title }}</h1>
            <h5>Kategori - {{ $post -> category -> name}}</h5>
            <p>{!! $post -> body !!}</p>
            <a href="posts/<?php echo $post -> slug; ?>">Read More</a>
        </article>
        @endforeach
    </section>
@endsection
