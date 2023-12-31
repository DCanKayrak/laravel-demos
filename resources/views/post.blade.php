@extends('layout')

@section('title')
    {{ $post -> title }} - Blog
@endsection

@section('content')
<h3>Latest Posts</h3>
<hr>
<section class="blogs">

    <article>
        by <a href="/author/{{$post-> author -> username}}">{{$post-> author -> name}}</a> about <a href="/category/{{$post->category->slug}}">{{ $post-> category -> name }}</a>
        <h3>{{ $post -> title }}</h3>
        {!! $post -> body !!}
    </article>
        <a href="/">Go Back</a>
</section>
@endsection
