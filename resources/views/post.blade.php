<!DOCTYPE html>
<html>
<head>
<title>My Blog
</title>
<link href="/css/app.css" rel="stylesheet"> 
</head>

<body>
    <article>
        <h1> {{ $post->title }} </h1>

        <div>
            {!! $post->body !!}
        </div>

    </article>

    <a href="/">Go back</a>

<script src='/js/app.js'></script>
</body>
</html>