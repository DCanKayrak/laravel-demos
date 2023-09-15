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

    <article>
        <h3>{{ $post -> title }}</h3>
        {!! $post -> body !!}
    </article>
        <a href="/">Go Back</a>
</section>

</body>
</html>
