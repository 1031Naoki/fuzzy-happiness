{"filter":false,"title":"index.blade.php","tooltip":"/blog/resources/views/index.blade.php","undoManager":{"mark":26,"position":26,"stack":[[{"start":{"row":0,"column":0},"end":{"row":24,"column":0},"action":"remove","lines":["<!DOCTYPE html>","<html lang=\"{{ str_replace('_', '-', app()->getLocale()) }}\">","    <head>","        <meta charset=\"utf-8\">","        <title>Blog</title>","        <!-- Fonts -->","        <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,600\" rel=\"stylesheet\">","    </head>","    <body>","        <h1>Blog Name</h1>","        <div class='posts'>","            @foreach ($posts as $post)","                <div class='post'>","                    <h2 class='title'>{{ $post->title }}</h2>","                    <p class='body'>{{ $post->body}}</p>","                </div>","            @endforeach","        </div>","        <div class='paginate'>","            {{ $post->links() }}","        </div>","        ","    </body>","</html>",""],"id":49}],[{"start":{"row":0,"column":0},"end":{"row":17,"column":7},"action":"insert","lines":["<!DOCTYPE html>","<html lang=\"{{ str_replace('_', '-', app()->getLocale()) }}\">","    <head>","        <meta charset=\"utf-8\">","        <title>Blog</title>","        <!-- Fonts -->","        <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,600\" rel=\"stylesheet\">","    </head>","    <body>","        <h1>Blog Name</h1>","        <div class='posts'>","            <div class='post'>","                <h2 class='title'>Title</h2>","                <p class='body'>This is a sample body.</p>","            </div>","        </div>","    </body>","</html>"],"id":50}],[{"start":{"row":0,"column":0},"end":{"row":17,"column":7},"action":"remove","lines":["<!DOCTYPE html>","<html lang=\"{{ str_replace('_', '-', app()->getLocale()) }}\">","    <head>","        <meta charset=\"utf-8\">","        <title>Blog</title>","        <!-- Fonts -->","        <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,600\" rel=\"stylesheet\">","    </head>","    <body>","        <h1>Blog Name</h1>","        <div class='posts'>","            <div class='post'>","                <h2 class='title'>Title</h2>","                <p class='body'>This is a sample body.</p>","            </div>","        </div>","    </body>","</html>"],"id":51}],[{"start":{"row":0,"column":0},"end":{"row":17,"column":7},"action":"insert","lines":["<!DOCTYPE html>","<html lang=\"{{ str_replace('_', '-', app()->getLocale()) }}\">","    <head>","        <meta charset=\"utf-8\">","        <title>Blog</title>","        <!-- Fonts -->","        <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,600\" rel=\"stylesheet\">","    </head>","    <body>","        <h1>Blog Name</h1>","        <div class='posts'>","            <div class='post'>","                <h2 class='title'>Title</h2>","                <p class='body'>This is a sample body.</p>","            </div>","        </div>","    </body>","</html>"],"id":52}],[{"start":{"row":0,"column":0},"end":{"row":17,"column":7},"action":"remove","lines":["<!DOCTYPE html>","<html lang=\"{{ str_replace('_', '-', app()->getLocale()) }}\">","    <head>","        <meta charset=\"utf-8\">","        <title>Blog</title>","        <!-- Fonts -->","        <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,600\" rel=\"stylesheet\">","    </head>","    <body>","        <h1>Blog Name</h1>","        <div class='posts'>","            <div class='post'>","                <h2 class='title'>Title</h2>","                <p class='body'>This is a sample body.</p>","            </div>","        </div>","    </body>","</html>"],"id":53}],[{"start":{"row":0,"column":0},"end":{"row":19,"column":7},"action":"insert","lines":["<!DOCTYPE html>","<html lang=\"{{ str_replace('_', '-', app()->getLocale()) }}\">","    <head>","        <meta charset=\"utf-8\">","        <title>Blog</title>","        <!-- Fonts -->","        <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,600\" rel=\"stylesheet\">","    </head>","    <body>","        <h1>Blog Name</h1>","        <div class='posts'>","            @foreach ($posts as $post)","                <div class='post'>","                    <h2 class='title'>{{ $post->title }}</h2>","                    <p class='body'>{{ $post->body }}</p>","                </div>","            @endforeach","        </div>","    </body>","</html>"],"id":54}],[{"start":{"row":0,"column":0},"end":{"row":19,"column":7},"action":"remove","lines":["<!DOCTYPE html>","<html lang=\"{{ str_replace('_', '-', app()->getLocale()) }}\">","    <head>","        <meta charset=\"utf-8\">","        <title>Blog</title>","        <!-- Fonts -->","        <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,600\" rel=\"stylesheet\">","    </head>","    <body>","        <h1>Blog Name</h1>","        <div class='posts'>","            @foreach ($posts as $post)","                <div class='post'>","                    <h2 class='title'>{{ $post->title }}</h2>","                    <p class='body'>{{ $post->body }}</p>","                </div>","            @endforeach","        </div>","    </body>","</html>"],"id":55},{"start":{"row":0,"column":0},"end":{"row":22,"column":7},"action":"insert","lines":["<!DOCTYPE html>","<html lang=\"{{ str_replace('_', '-', app()->getLocale()) }}\">","    <head>","        <meta charset=\"utf-8\">","        <title>Blog</title>","        <!-- Fonts -->","        <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,600\" rel=\"stylesheet\">","    </head>","    <body>","        <h1>Blog Name</h1>","        <div class='posts'>","            @foreach ($posts as $post)","                <div class='post'>","                    <h2 class='title'>{{ $post->title }}</h2>","                    <p class='body'>{{ $post->body }}</p>","                </div>","            @endforeach","        </div>","        <div class='paginate'>","            {{ $posts->links() }}","        </div>","    </body>","</html>"]}],[{"start":{"row":8,"column":10},"end":{"row":9,"column":8},"action":"insert","lines":["","        "],"id":56}],[{"start":{"row":9,"column":8},"end":{"row":9,"column":67},"action":"insert","lines":["<h3><a href=\"/posts/{{ $post->id }}\">{{ $post->title }}</a>"],"id":57}],[{"start":{"row":9,"column":7},"end":{"row":9,"column":67},"action":"remove","lines":[" <h3><a href=\"/posts/{{ $post->id }}\">{{ $post->title }}</a>"],"id":58},{"start":{"row":9,"column":6},"end":{"row":9,"column":7},"action":"remove","lines":[" "]},{"start":{"row":9,"column":5},"end":{"row":9,"column":6},"action":"remove","lines":[" "]},{"start":{"row":9,"column":4},"end":{"row":9,"column":5},"action":"remove","lines":[" "]},{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"remove","lines":["    "]},{"start":{"row":8,"column":10},"end":{"row":9,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":13,"column":20},"end":{"row":13,"column":79},"action":"insert","lines":["<h3><a href=\"/posts/{{ $post->id }}\">{{ $post->title }}</a>"],"id":59}],[{"start":{"row":13,"column":79},"end":{"row":13,"column":120},"action":"remove","lines":["<h2 class='title'>{{ $post->title }}</h2>"],"id":60}],[{"start":{"row":13,"column":79},"end":{"row":13,"column":80},"action":"insert","lines":["<"],"id":61},{"start":{"row":13,"column":80},"end":{"row":13,"column":81},"action":"insert","lines":[">"]}],[{"start":{"row":13,"column":80},"end":{"row":13,"column":81},"action":"insert","lines":["/"],"id":62},{"start":{"row":13,"column":81},"end":{"row":13,"column":82},"action":"insert","lines":["3"]}],[{"start":{"row":13,"column":82},"end":{"row":13,"column":83},"action":"remove","lines":[">"],"id":63},{"start":{"row":13,"column":81},"end":{"row":13,"column":82},"action":"remove","lines":["3"]},{"start":{"row":13,"column":80},"end":{"row":13,"column":81},"action":"remove","lines":["/"]},{"start":{"row":13,"column":79},"end":{"row":13,"column":80},"action":"remove","lines":["<"]}],[{"start":{"row":13,"column":19},"end":{"row":13,"column":61},"action":"remove","lines":[" <h2 class='title'>{{ $post->title }}</h2>"],"id":64},{"start":{"row":13,"column":19},"end":{"row":13,"column":78},"action":"insert","lines":["<h3><a href=\"/posts/{{ $post->id }}\">{{ $post->title }}</a>"]}],[{"start":{"row":0,"column":0},"end":{"row":22,"column":7},"action":"remove","lines":["<!DOCTYPE html>","<html lang=\"{{ str_replace('_', '-', app()->getLocale()) }}\">","    <head>","        <meta charset=\"utf-8\">","        <title>Blog</title>","        <!-- Fonts -->","        <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,600\" rel=\"stylesheet\">","    </head>","    <body>","        <h1>Blog Name</h1>","        <div class='posts'>","            @foreach ($posts as $post)","                <div class='post'>","                   <h3><a href=\"/posts/{{ $post->id }}\">{{ $post->title }}</a>","                    <p class='body'>{{ $post->body }}</p>","                </div>","            @endforeach","        </div>","        <div class='paginate'>","            {{ $posts->links() }}","        </div>","    </body>","</html>"],"id":65},{"start":{"row":0,"column":0},"end":{"row":22,"column":7},"action":"insert","lines":["<!DOCTYPE html>","<html lang=\"{{ str_replace('_', '-', app()->getLocale()) }}\">","    <head>","        <meta charset=\"utf-8\">","        <title>Blog</title>","        <!-- Fonts -->","        <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,600\" rel=\"stylesheet\">","    </head>","    <body>","        <h1>Blog Name</h1>","        <div class='posts'>","            @foreach ($posts as $post)","                <div class='post'>","                    <h3><a href=\"/posts/{{ $post->id }}\">{{ $post->title }}</a></3>","                    <p class='body'>{{ $post->body }}</p>","                </div>","            @endforeach","        </div>","        <div class='paginate'>","            {{ $posts->links() }}","        </div>","    </body>","</html>"]}],[{"start":{"row":0,"column":0},"end":{"row":22,"column":7},"action":"remove","lines":["<!DOCTYPE html>","<html lang=\"{{ str_replace('_', '-', app()->getLocale()) }}\">","    <head>","        <meta charset=\"utf-8\">","        <title>Blog</title>","        <!-- Fonts -->","        <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,600\" rel=\"stylesheet\">","    </head>","    <body>","        <h1>Blog Name</h1>","        <div class='posts'>","            @foreach ($posts as $post)","                <div class='post'>","                    <h3><a href=\"/posts/{{ $post->id }}\">{{ $post->title }}</a></3>","                    <p class='body'>{{ $post->body }}</p>","                </div>","            @endforeach","        </div>","        <div class='paginate'>","            {{ $posts->links() }}","        </div>","    </body>","</html>"],"id":66},{"start":{"row":0,"column":0},"end":{"row":23,"column":7},"action":"insert","lines":["","<!DOCTYPE html>","<html lang=\"{{ str_replace('_', '-', app()->getLocale()) }}\">","    <head>","        <meta charset=\"utf-8\">","        <title>Blog</title>","        <!-- Fonts -->","        <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,600\" rel=\"stylesheet\">","    </head>","    <body>","        <h1>Blog Name</h1>","        <div class='posts'>","            @foreach ($posts as $post)","                <div class='post'>","                    <h3><a href=\"/posts/{{ $post->id }}\">{{ $post->title }}</a></3>","                    <p class='body'>{{ $post->body }}</p>","                </div>","            @endforeach","        </div>","        <div class='paginate'>","            {{ $posts->links() }}","        </div>","    </body>","</html>"]}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"remove","lines":["",""],"id":67}],[{"start":{"row":0,"column":0},"end":{"row":22,"column":7},"action":"remove","lines":["<!DOCTYPE html>","<html lang=\"{{ str_replace('_', '-', app()->getLocale()) }}\">","    <head>","        <meta charset=\"utf-8\">","        <title>Blog</title>","        <!-- Fonts -->","        <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,600\" rel=\"stylesheet\">","    </head>","    <body>","        <h1>Blog Name</h1>","        <div class='posts'>","            @foreach ($posts as $post)","                <div class='post'>","                    <h3><a href=\"/posts/{{ $post->id }}\">{{ $post->title }}</a></3>","                    <p class='body'>{{ $post->body }}</p>","                </div>","            @endforeach","        </div>","        <div class='paginate'>","            {{ $posts->links() }}","        </div>","    </body>","</html>"],"id":68},{"start":{"row":0,"column":0},"end":{"row":22,"column":7},"action":"insert","lines":["<!DOCTYPE html>","<html lang=\"{{ str_replace('_', '-', app()->getLocale()) }}\">","    <head>","        <meta charset=\"utf-8\">","        <title>Blog</title>","        <!-- Fonts -->","        <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,600\" rel=\"stylesheet\">","    </head>","    <body>","        <h1>Blog Name</h1>","        <div class='posts'>","            @foreach ($posts as $post)","                <div class='post'>","                    <h2 class='title'>{{ $post->title }}</h2>","                    <p class='body'>{{ $post->body }}</p>","                </div>","            @endforeach","        </div>","        <div class='paginate'>","            {{ $posts->links() }}","        </div>","    </body>","</html>"]}],[{"start":{"row":13,"column":20},"end":{"row":13,"column":61},"action":"remove","lines":["<h2 class='title'>{{ $post->title }}</h2>"],"id":69},{"start":{"row":13,"column":20},"end":{"row":13,"column":79},"action":"insert","lines":["<h3><a href=\"/posts/{{ $post->id }}\">{{ $post->title }}</a>"]}],[{"start":{"row":9,"column":26},"end":{"row":10,"column":0},"action":"insert","lines":["",""],"id":70},{"start":{"row":10,"column":0},"end":{"row":10,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":10,"column":8},"end":{"row":10,"column":44},"action":"insert","lines":["[<a href='/posts/create'>create</a>]"],"id":71}],[{"start":{"row":0,"column":0},"end":{"row":23,"column":7},"action":"remove","lines":["<!DOCTYPE html>","<html lang=\"{{ str_replace('_', '-', app()->getLocale()) }}\">","    <head>","        <meta charset=\"utf-8\">","        <title>Blog</title>","        <!-- Fonts -->","        <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,600\" rel=\"stylesheet\">","    </head>","    <body>","        <h1>Blog Name</h1>","        [<a href='/posts/create'>create</a>]","        <div class='posts'>","            @foreach ($posts as $post)","                <div class='post'>","                    <h3><a href=\"/posts/{{ $post->id }}\">{{ $post->title }}</a>","                    <p class='body'>{{ $post->body }}</p>","                </div>","            @endforeach","        </div>","        <div class='paginate'>","            {{ $posts->links() }}","        </div>","    </body>","</html>"],"id":72},{"start":{"row":0,"column":0},"end":{"row":24,"column":0},"action":"insert","lines":["<!DOCTYPE html>","<html lang=\"{{ str_replace('_', '-', app()->getLocale()) }}\">","    <head>","        <meta charset=\"utf-8\">","        <title>Blog</title>","        <!-- Fonts -->","        <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,600\" rel=\"stylesheet\">","    </head>","    <body>","        <h1>Blog Name</h1>","        <div class='posts'>","            @foreach ($posts as $post)","                <div class='post'>","                    <h2 class='title'>{{ $post->title }}</h2>","                    <p class='body'>{{ $post->body }}</p>","                </div>","            @endforeach","        </div>","        <div class='paginate'>","            {{ $posts->links() }}","        </div>","    </body>","</html>","Copy",""]}],[{"start":{"row":13,"column":20},"end":{"row":13,"column":61},"action":"remove","lines":["<h2 class='title'>{{ $post->title }}</h2>"],"id":73},{"start":{"row":13,"column":20},"end":{"row":13,"column":79},"action":"insert","lines":["<h3><a href=\"/posts/{{ $post->id }}\">{{ $post->title }}</a>"]}],[{"start":{"row":9,"column":26},"end":{"row":10,"column":0},"action":"insert","lines":["",""],"id":74},{"start":{"row":10,"column":0},"end":{"row":10,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":10,"column":8},"end":{"row":10,"column":44},"action":"insert","lines":["[<a href='/posts/create'>create</a>]"],"id":75}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":0,"column":0},"end":{"row":0,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1615028583755,"hash":"614b8ec36e98127d6215b55505148b8176e97cb4"}