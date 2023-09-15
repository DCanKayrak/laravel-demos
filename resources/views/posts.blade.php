<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <link rel="stylesheet" href='/app.css'>
</head>
<body>
    <h3>Latest Posts</h3>
    <hr>
    <section class="blogs">
        @foreach($posts as $post)
        <article class="blog">
            <h1>{{ $post -> title }}</h1>
            <p>{!! $post -> body !!}</p>
            <a href="posts/<?php echo $post -> slug; ?>">Read More</a>
        </article>
        @endforeach
    </section>

</body>
</html>
