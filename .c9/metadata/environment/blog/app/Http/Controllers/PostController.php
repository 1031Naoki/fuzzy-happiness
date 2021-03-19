
{"filter":false,"title":"PostController.php","tooltip":"/blog/app/Http/Controllers/PostController.php","undoManager":{"mark":54,"position":54,"stack":[[{"start":{"row":11,"column":11},"end":{"row":11,"column":12},"action":"insert","lines":["v"],"id":63},{"start":{"row":11,"column":12},"end":{"row":11,"column":13},"action":"insert","lines":["i"]}],[{"start":{"row":11,"column":13},"end":{"row":11,"column":14},"action":"insert","lines":["e"],"id":64},{"start":{"row":11,"column":14},"end":{"row":11,"column":15},"action":"insert","lines":["w"]}],[{"start":{"row":11,"column":15},"end":{"row":11,"column":16},"action":"insert","lines":["("],"id":65},{"start":{"row":11,"column":16},"end":{"row":11,"column":17},"action":"insert","lines":[")"]}],[{"start":{"row":11,"column":16},"end":{"row":11,"column":18},"action":"insert","lines":["''"],"id":66}],[{"start":{"row":11,"column":17},"end":{"row":11,"column":18},"action":"insert","lines":["i"],"id":67},{"start":{"row":11,"column":18},"end":{"row":11,"column":19},"action":"insert","lines":["n"]},{"start":{"row":11,"column":19},"end":{"row":11,"column":20},"action":"insert","lines":["d"]},{"start":{"row":11,"column":20},"end":{"row":11,"column":21},"action":"insert","lines":["e"]},{"start":{"row":11,"column":21},"end":{"row":11,"column":22},"action":"insert","lines":["x"]}],[{"start":{"row":11,"column":24},"end":{"row":11,"column":25},"action":"insert","lines":["-"],"id":68},{"start":{"row":11,"column":25},"end":{"row":11,"column":26},"action":"insert","lines":[">"]}],[{"start":{"row":11,"column":26},"end":{"row":11,"column":27},"action":"insert","lines":["w"],"id":69},{"start":{"row":11,"column":27},"end":{"row":11,"column":28},"action":"insert","lines":["i"]},{"start":{"row":11,"column":28},"end":{"row":11,"column":29},"action":"insert","lines":["t"]},{"start":{"row":11,"column":29},"end":{"row":11,"column":30},"action":"insert","lines":["h"]}],[{"start":{"row":11,"column":30},"end":{"row":11,"column":31},"action":"insert","lines":[" "],"id":70}],[{"start":{"row":11,"column":30},"end":{"row":11,"column":31},"action":"remove","lines":[" "],"id":71}],[{"start":{"row":11,"column":30},"end":{"row":11,"column":31},"action":"insert","lines":["("],"id":72},{"start":{"row":11,"column":31},"end":{"row":11,"column":32},"action":"insert","lines":[")"]}],[{"start":{"row":11,"column":31},"end":{"row":11,"column":33},"action":"insert","lines":["[]"],"id":73}],[{"start":{"row":11,"column":32},"end":{"row":11,"column":34},"action":"insert","lines":["''"],"id":74}],[{"start":{"row":11,"column":33},"end":{"row":11,"column":34},"action":"insert","lines":["p"],"id":75},{"start":{"row":11,"column":34},"end":{"row":11,"column":35},"action":"insert","lines":["o"]},{"start":{"row":11,"column":35},"end":{"row":11,"column":36},"action":"insert","lines":["s"]},{"start":{"row":11,"column":36},"end":{"row":11,"column":37},"action":"insert","lines":["t"]},{"start":{"row":11,"column":37},"end":{"row":11,"column":38},"action":"insert","lines":["s"]}],[{"start":{"row":11,"column":39},"end":{"row":11,"column":40},"action":"insert","lines":[" "],"id":76}],[{"start":{"row":11,"column":40},"end":{"row":11,"column":41},"action":"insert","lines":["="],"id":77},{"start":{"row":11,"column":41},"end":{"row":11,"column":42},"action":"insert","lines":[">"]}],[{"start":{"row":11,"column":42},"end":{"row":11,"column":43},"action":"insert","lines":[" "],"id":78}],[{"start":{"row":11,"column":44},"end":{"row":11,"column":45},"action":"remove","lines":[")"],"id":79},{"start":{"row":11,"column":43},"end":{"row":11,"column":44},"action":"remove","lines":["]"]}],[{"start":{"row":11,"column":55},"end":{"row":11,"column":56},"action":"insert","lines":["]"],"id":80}],[{"start":{"row":11,"column":56},"end":{"row":11,"column":57},"action":"insert","lines":[")"],"id":81}],[{"start":{"row":14,"column":0},"end":{"row":14,"column":1},"action":"insert","lines":[">"],"id":82}],[{"start":{"row":14,"column":0},"end":{"row":14,"column":1},"action":"remove","lines":[">"],"id":83}],[{"start":{"row":14,"column":0},"end":{"row":14,"column":1},"action":"insert","lines":["?"],"id":84},{"start":{"row":14,"column":1},"end":{"row":14,"column":2},"action":"insert","lines":[">"]}],[{"start":{"row":0,"column":0},"end":{"row":14,"column":2},"action":"remove","lines":["<?php","","namespace App\\Http\\Controllers;","","use App\\Post;","use Illuminate\\Http\\Request;","","class PostController extends Controller","{","    public function index(Post $post)","    {","    return view('index')->with(['posts' => $post->get()]);","    }","}","?>"],"id":85}],[{"start":{"row":0,"column":0},"end":{"row":14,"column":2},"action":"insert","lines":["<?php","","namespace App\\Http\\Controllers;","","use App\\Post;","use Illuminate\\Http\\Request;","","class PostController extends Controller","{","    public function index(Post $post)","    {","        return view('index')->with(['posts' => $post->get()]);  ","    }","}","?>"],"id":86}],[{"start":{"row":11,"column":36},"end":{"row":11,"column":58},"action":"remove","lines":["'posts' => $post->get("],"id":87}],[{"start":{"row":11,"column":36},"end":{"row":11,"column":37},"action":"remove","lines":[")"],"id":88}],[{"start":{"row":11,"column":36},"end":{"row":11,"column":66},"action":"insert","lines":["'posts' => $post->getByLimit()"],"id":89}],[{"start":{"row":11,"column":57},"end":{"row":11,"column":58},"action":"insert","lines":["P"],"id":90}],[{"start":{"row":11,"column":54},"end":{"row":11,"column":65},"action":"remove","lines":["getPByLimit"],"id":91},{"start":{"row":11,"column":54},"end":{"row":11,"column":72},"action":"insert","lines":["getPaginateByLimit"]}],[{"start":{"row":9,"column":4},"end":{"row":12,"column":5},"action":"remove","lines":["public function index(Post $post)","    {","        return view('index')->with(['posts' => $post->getPaginateByLimit()]);  ","    }"],"id":94}],[{"start":{"row":9,"column":4},"end":{"row":12,"column":1},"action":"insert","lines":["public function index(Post $post)","{","    return $post->get();","}"],"id":95}],[{"start":{"row":9,"column":24},"end":{"row":9,"column":25},"action":"remove","lines":["x"],"id":96},{"start":{"row":9,"column":23},"end":{"row":9,"column":24},"action":"remove","lines":["e"]},{"start":{"row":9,"column":22},"end":{"row":9,"column":23},"action":"remove","lines":["d"]},{"start":{"row":9,"column":21},"end":{"row":9,"column":22},"action":"remove","lines":["n"]},{"start":{"row":9,"column":20},"end":{"row":9,"column":21},"action":"remove","lines":["i"]}],[{"start":{"row":9,"column":20},"end":{"row":9,"column":21},"action":"insert","lines":["p"],"id":97},{"start":{"row":9,"column":21},"end":{"row":9,"column":22},"action":"insert","lines":["o"]},{"start":{"row":9,"column":22},"end":{"row":9,"column":23},"action":"insert","lines":["s"]},{"start":{"row":9,"column":23},"end":{"row":9,"column":24},"action":"insert","lines":["t"]}],[{"start":{"row":9,"column":23},"end":{"row":9,"column":24},"action":"remove","lines":["t"],"id":98},{"start":{"row":9,"column":22},"end":{"row":9,"column":23},"action":"remove","lines":["s"]},{"start":{"row":9,"column":21},"end":{"row":9,"column":22},"action":"remove","lines":["o"]},{"start":{"row":9,"column":20},"end":{"row":9,"column":21},"action":"remove","lines":["p"]}],[{"start":{"row":9,"column":20},"end":{"row":9,"column":21},"action":"insert","lines":["i"],"id":99},{"start":{"row":9,"column":21},"end":{"row":9,"column":22},"action":"insert","lines":["n"]},{"start":{"row":9,"column":22},"end":{"row":9,"column":23},"action":"insert","lines":["d"]},{"start":{"row":9,"column":23},"end":{"row":9,"column":24},"action":"insert","lines":["e"]},{"start":{"row":9,"column":24},"end":{"row":9,"column":25},"action":"insert","lines":["x"]}],[{"start":{"row":10,"column":0},"end":{"row":10,"column":1},"action":"insert","lines":[" "],"id":100},{"start":{"row":10,"column":1},"end":{"row":10,"column":2},"action":"insert","lines":[" "]},{"start":{"row":10,"column":2},"end":{"row":10,"column":3},"action":"insert","lines":[" "]},{"start":{"row":10,"column":3},"end":{"row":10,"column":4},"action":"insert","lines":[" "]}],[{"start":{"row":10,"column":4},"end":{"row":10,"column":5},"action":"insert","lines":[" "],"id":101}],[{"start":{"row":10,"column":4},"end":{"row":10,"column":5},"action":"remove","lines":[" "],"id":102}],[{"start":{"row":12,"column":0},"end":{"row":12,"column":1},"action":"insert","lines":[" "],"id":103},{"start":{"row":12,"column":1},"end":{"row":12,"column":2},"action":"insert","lines":[" "]},{"start":{"row":12,"column":2},"end":{"row":12,"column":3},"action":"insert","lines":[" "]},{"start":{"row":12,"column":3},"end":{"row":12,"column":4},"action":"insert","lines":[" "]}],[{"start":{"row":14,"column":0},"end":{"row":14,"column":1},"action":"insert","lines":[" "],"id":104},{"start":{"row":14,"column":1},"end":{"row":14,"column":2},"action":"insert","lines":[" "]}],[{"start":{"row":14,"column":1},"end":{"row":14,"column":2},"action":"remove","lines":[" "],"id":105},{"start":{"row":14,"column":0},"end":{"row":14,"column":1},"action":"remove","lines":[" "]},{"start":{"row":13,"column":1},"end":{"row":14,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":13,"column":1},"end":{"row":14,"column":0},"action":"insert","lines":["",""],"id":106}],[{"start":{"row":0,"column":0},"end":{"row":13,"column":1},"action":"remove","lines":["<?php","","namespace App\\Http\\Controllers;","","use App\\Post;","use Illuminate\\Http\\Request;","","class PostController extends Controller","{","    public function index(Post $post)","    {","    return $post->get();","    }","}"],"id":107}],[{"start":{"row":1,"column":1},"end":{"row":1,"column":2},"action":"remove","lines":[">"],"id":108},{"start":{"row":1,"column":0},"end":{"row":1,"column":1},"action":"remove","lines":["?"]},{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"remove","lines":["",""]},{"start":{"row":0,"column":0},"end":{"row":14,"column":2},"action":"insert","lines":["<?php","","namespace App\\Http\\Controllers;","","use App\\Post;","use Illuminate\\Http\\Request;","","class PostController extends Controller","{","    public function index(Post $post)","    {","        return view('index')->with(['posts' => $post->get()]);  ","    }","}","?>"]}],[{"start":{"row":11,"column":8},"end":{"row":11,"column":62},"action":"remove","lines":["return view('index')->with(['posts' => $post->get()]);"],"id":109},{"start":{"row":11,"column":8},"end":{"row":11,"column":69},"action":"insert","lines":["return view('index')->with(['posts' => $post->getByLimit()]);"]}],[{"start":{"row":11,"column":8},"end":{"row":11,"column":71},"action":"remove","lines":["return view('index')->with(['posts' => $post->getByLimit()]);  "],"id":110},{"start":{"row":11,"column":8},"end":{"row":11,"column":77},"action":"insert","lines":["return view('index')->with(['posts' => $post->getPaginateByLimit()]);"]}],[{"start":{"row":12,"column":5},"end":{"row":13,"column":0},"action":"insert","lines":["",""],"id":111},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":13,"column":4},"end":{"row":16,"column":1},"action":"insert","lines":["public function show(Post $post)","{","    return view('show')->with(['post' => $post]);","}"],"id":112}],[{"start":{"row":14,"column":0},"end":{"row":14,"column":1},"action":"insert","lines":[" "],"id":113},{"start":{"row":14,"column":1},"end":{"row":14,"column":2},"action":"insert","lines":[" "]},{"start":{"row":14,"column":2},"end":{"row":14,"column":3},"action":"insert","lines":[" "]},{"start":{"row":14,"column":3},"end":{"row":14,"column":4},"action":"insert","lines":[" "]}],[{"start":{"row":16,"column":0},"end":{"row":16,"column":1},"action":"insert","lines":[" "],"id":114},{"start":{"row":16,"column":1},"end":{"row":16,"column":2},"action":"insert","lines":[" "]},{"start":{"row":16,"column":2},"end":{"row":16,"column":3},"action":"insert","lines":[" "]},{"start":{"row":16,"column":3},"end":{"row":16,"column":4},"action":"insert","lines":[" "]}],[{"start":{"row":16,"column":4},"end":{"row":16,"column":5},"action":"insert","lines":[" "],"id":115},{"start":{"row":16,"column":5},"end":{"row":16,"column":6},"action":"insert","lines":[" "]},{"start":{"row":16,"column":6},"end":{"row":16,"column":7},"action":"insert","lines":[" "]},{"start":{"row":16,"column":7},"end":{"row":16,"column":8},"action":"insert","lines":[" "]}],[{"start":{"row":14,"column":4},"end":{"row":14,"column":5},"action":"insert","lines":[" "],"id":116},{"start":{"row":14,"column":5},"end":{"row":14,"column":6},"action":"insert","lines":[" "]},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"insert","lines":[" "]},{"start":{"row":14,"column":7},"end":{"row":14,"column":8},"action":"insert","lines":[" "]}],[{"start":{"row":15,"column":4},"end":{"row":15,"column":5},"action":"insert","lines":[" "],"id":117},{"start":{"row":15,"column":5},"end":{"row":15,"column":6},"action":"insert","lines":[" "]},{"start":{"row":15,"column":6},"end":{"row":15,"column":7},"action":"insert","lines":[" "]},{"start":{"row":15,"column":7},"end":{"row":15,"column":8},"action":"insert","lines":[" "]}],[{"start":{"row":14,"column":4},"end":{"row":14,"column":8},"action":"remove","lines":["    "],"id":118}],[{"start":{"row":16,"column":4},"end":{"row":16,"column":8},"action":"remove","lines":["    "],"id":119}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":16,"column":4},"end":{"row":16,"column":4},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1614774281718,"hash":"9124e5f72558308a80c4cb96d5091c0e50893aee"}


