<!doctype html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <h1 class="title">
            BlogName
        </h1>

        <p class="edit">[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p>
        
        <form action="/posts/{{ $post->id}}" id="form_delete" method="post">
            {{ csrf_field()}}
            {{ method_field('delete')}}
            <button type="submit" onclick="return deletePost(this);">delete</button>
        </form>
        
        <div class="content">
            <div class="content__post">
                <h3>{{ $post->title }}</h3>
                <p>{{ $post->body }}</p>    
            </div>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
        <script>
            function deletePost(e) {
                'use strict';
                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementByID('form_delete').submit();
                }
            }
        </script>
        
    </body>
</html>