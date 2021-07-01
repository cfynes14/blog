<!DOCTYPE html>
<html>
<head>
<title>My Blog
</title>
<link href="/css/app.css" rel="stylesheet"> 
</head>

<body>
    @foreach ($posts as $post)
        <article>
            <h1>
                <a href="/posts/{{ $post->slug }}">
                    {{ $post->title }}
                </a>  
            </h1>

            <div>
                {{ $post->excerpt }}
            </div>
        </article>  
    @endforeach

<script src='/js/app.js'></script>
</body>
</html>
