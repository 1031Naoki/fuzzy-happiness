{"changed":true,"filter":false,"title":"index.blade.php","tooltip":"/blog/resources/views/index.blade.php","value":"<!DOCTYPE html>\n<html lang=\"{{ str_replace('_', '-', app()->getLocale()) }}\">\n    <head>\n        <meta charset=\"utf-8\">\n        <title>Blog</title>\n        <!-- Fonts -->\n        <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,600\" rel=\"stylesheet\">\n    </head>\n    <body>\n        <h1>Blog Name</h1>\n        <div class='posts'>\n            @foreach ($posts as $post)\n                <div class='post'>\n                    <h3><a href=\"/posts/{{ $post->id }}\">{{ $post->title }}</a>\n                    <p class='body'>{{ $post->body }}</p>\n                </div>\n            @endforeach\n        </div>\n        <div class='paginate'>\n            {{ $posts->links() }}\n        </div>\n    </body>\n</html>","undoManager":{"mark":13,"position":14,"stack":[[{"start":{"row":0,"column":0},"end":{"row":24,"column":0},"action":"remove","lines":["<!DOCTYPE html>","<html lang=\"{{ str_replace('_', '-', app()->getLocale()) }}\">","    <head>","        <meta charset=\"utf-8\">","        <title>Blog</title>","        <!-- Fonts -->","        <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,600\" rel=\"stylesheet\">","    </head>","    <body>","        <h1>Blog Name</h1>","        <div class='posts'>","            @foreach ($posts as $post)","                <div class='post'>","                    <h2 class='title'>{{ $post->title }}</h2>","                    <p class='body'>{{ $post->body}}</p>","                </div>","            @endforeach","        </div>","        <div class='paginate'>","            {{ $post->links() }}","        </div>","        ","    </body>","</html>",""],"id":2}],[{"start":{"row":0,"column":0},"end":{"row":17,"column":7},"action":"insert","lines":["<!DOCTYPE html>","<html lang=\"{{ str_replace('_', '-', app()->getLocale()) }}\">","    <head>","        <meta charset=\"utf-8\">","        <title>Blog</title>","        <!-- Fonts -->","        <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,600\" rel=\"stylesheet\">","    </head>","    <body>","        <h1>Blog Name</h1>","        <div class='posts'>","            <div class='post'>","                <h2 class='title'>Title</h2>","                <p class='body'>This is a sample body.</p>","            </div>","        </div>","    </body>","</html>"],"id":3}],[{"start":{"row":0,"column":0},"end":{"row":17,"column":7},"action":"remove","lines":["<!DOCTYPE html>","<html lang=\"{{ str_replace('_', '-', app()->getLocale()) }}\">","    <head>","        <meta charset=\"utf-8\">","        <title>Blog</title>","        <!-- Fonts -->","        <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,600\" rel=\"stylesheet\">","    </head>","    <body>","        <h1>Blog Name</h1>","        <div class='posts'>","            <div class='post'>","                <h2 class='title'>Title</h2>","                <p class='body'>This is a sample body.</p>","            </div>","        </div>","    </body>","</html>"],"id":4}],[{"start":{"row":0,"column":0},"end":{"row":17,"column":7},"action":"insert","lines":["<!DOCTYPE html>","<html lang=\"{{ str_replace('_', '-', app()->getLocale()) }}\">","    <head>","        <meta charset=\"utf-8\">","        <title>Blog</title>","        <!-- Fonts -->","        <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,600\" rel=\"stylesheet\">","    </head>","    <body>","        <h1>Blog Name</h1>","        <div class='posts'>","            <div class='post'>","                <h2 class='title'>Title</h2>","                <p class='body'>This is a sample body.</p>","            </div>","        </div>","    </body>","</html>"],"id":5}],[{"start":{"row":0,"column":0},"end":{"row":17,"column":7},"action":"remove","lines":["<!DOCTYPE html>","<html lang=\"{{ str_replace('_', '-', app()->getLocale()) }}\">","    <head>","        <meta charset=\"utf-8\">","        <title>Blog</title>","        <!-- Fonts -->","        <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,600\" rel=\"stylesheet\">","    </head>","    <body>","        <h1>Blog Name</h1>","        <div class='posts'>","            <div class='post'>","                <h2 class='title'>Title</h2>","                <p class='body'>This is a sample body.</p>","            </div>","        </div>","    </body>","</html>"],"id":6}],[{"start":{"row":0,"column":0},"end":{"row":19,"column":7},"action":"insert","lines":["<!DOCTYPE html>","<html lang=\"{{ str_replace('_', '-', app()->getLocale()) }}\">","    <head>","        <meta charset=\"utf-8\">","        <title>Blog</title>","        <!-- Fonts -->","        <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,600\" rel=\"stylesheet\">","    </head>","    <body>","        <h1>Blog Name</h1>","        <div class='posts'>","            @foreach ($posts as $post)","                <div class='post'>","                    <h2 class='title'>{{ $post->title }}</h2>","                    <p class='body'>{{ $post->body }}</p>","                </div>","            @endforeach","        </div>","    </body>","</html>"],"id":7}],[{"start":{"row":0,"column":0},"end":{"row":19,"column":7},"action":"remove","lines":["<!DOCTYPE html>","<html lang=\"{{ str_replace('_', '-', app()->getLocale()) }}\">","    <head>","        <meta charset=\"utf-8\">","        <title>Blog</title>","        <!-- Fonts -->","        <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,600\" rel=\"stylesheet\">","    </head>","    <body>","        <h1>Blog Name</h1>","        <div class='posts'>","            @foreach ($posts as $post)","                <div class='post'>","                    <h2 class='title'>{{ $post->title }}</h2>","                    <p class='body'>{{ $post->body }}</p>","                </div>","            @endforeach","        </div>","    </body>","</html>"],"id":8},{"start":{"row":0,"column":0},"end":{"row":22,"column":7},"action":"insert","lines":["<!DOCTYPE html>","<html lang=\"{{ str_replace('_', '-', app()->getLocale()) }}\">","    <head>","        <meta charset=\"utf-8\">","        <title>Blog</title>","        <!-- Fonts -->","        <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,600\" rel=\"stylesheet\">","    </head>","    <body>","        <h1>Blog Name</h1>","        <div class='posts'>","            @foreach ($posts as $post)","                <div class='post'>","                    <h2 class='title'>{{ $post->title }}</h2>","                    <p class='body'>{{ $post->body }}</p>","                </div>","            @endforeach","        </div>","        <div class='paginate'>","            {{ $posts->links() }}","        </div>","    </body>","</html>"]}],[{"start":{"row":8,"column":10},"end":{"row":9,"column":8},"action":"insert","lines":["","        "],"id":9}],[{"start":{"row":9,"column":8},"end":{"row":9,"column":67},"action":"insert","lines":["<h3><a href=\"/posts/{{ $post->id }}\">{{ $post->title }}</a>"],"id":10}],[{"start":{"row":9,"column":7},"end":{"row":9,"column":67},"action":"remove","lines":[" <h3><a href=\"/posts/{{ $post->id }}\">{{ $post->title }}</a>"],"id":11},{"start":{"row":9,"column":6},"end":{"row":9,"column":7},"action":"remove","lines":[" "]},{"start":{"row":9,"column":5},"end":{"row":9,"column":6},"action":"remove","lines":[" "]},{"start":{"row":9,"column":4},"end":{"row":9,"column":5},"action":"remove","lines":[" "]},{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"remove","lines":["    "]},{"start":{"row":8,"column":10},"end":{"row":9,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":13,"column":20},"end":{"row":13,"column":79},"action":"insert","lines":["<h3><a href=\"/posts/{{ $post->id }}\">{{ $post->title }}</a>"],"id":12}],[{"start":{"row":13,"column":79},"end":{"row":13,"column":120},"action":"remove","lines":["<h2 class='title'>{{ $post->title }}</h2>"],"id":13}],[{"start":{"row":13,"column":79},"end":{"row":13,"column":80},"action":"insert","lines":["<"],"id":14},{"start":{"row":13,"column":80},"end":{"row":13,"column":81},"action":"insert","lines":[">"]}],[{"start":{"row":13,"column":80},"end":{"row":13,"column":81},"action":"insert","lines":["/"],"id":15},{"start":{"row":13,"column":81},"end":{"row":13,"column":82},"action":"insert","lines":["3"]}],[{"start":{"row":13,"column":82},"end":{"row":13,"column":83},"action":"remove","lines":[">"],"id":16},{"start":{"row":13,"column":81},"end":{"row":13,"column":82},"action":"remove","lines":["3"]},{"start":{"row":13,"column":80},"end":{"row":13,"column":81},"action":"remove","lines":["/"]},{"start":{"row":13,"column":79},"end":{"row":13,"column":80},"action":"remove","lines":["<"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":256.5,"selection":{"start":{"row":13,"column":79},"end":{"row":13,"column":79},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1614869683854}