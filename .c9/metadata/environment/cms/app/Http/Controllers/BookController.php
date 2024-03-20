{"filter":false,"title":"BookController.php","tooltip":"/cms/app/Http/Controllers/BookController.php","ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":26,"column":21},"end":{"row":26,"column":21},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":0,"state":"php-start","mode":"ace/mode/php"}},"hash":"231739e77dea2bf2effb08bcf21bc5fdba6d6553","undoManager":{"mark":50,"position":50,"stack":[[{"start":{"row":5,"column":28},"end":{"row":6,"column":0},"action":"insert","lines":["",""],"id":107}],[{"start":{"row":6,"column":0},"end":{"row":6,"column":15},"action":"insert","lines":["use Validator; "],"id":108}],[{"start":{"row":31,"column":9},"end":{"row":31,"column":10},"action":"remove","lines":["/"],"id":109},{"start":{"row":31,"column":8},"end":{"row":31,"column":9},"action":"remove","lines":["/"]}],[{"start":{"row":31,"column":8},"end":{"row":57,"column":20},"action":"insert","lines":[" //バリデーション","    $validator = Validator::make($request->all(), [","         'item_name' => 'required|min:3|max:255',","         'item_number' => 'required | min:1 | max:3',","         'item_amount' => 'required | max:6',","         'published'   => 'required',","    ]);","","    //バリデーション:エラー ","    if ($validator->fails()) {","        return redirect('/')","            ->withInput()","            ->withErrors($validator);","    }","    //以下に登録処理を記述（Eloquentモデル）","","  // Eloquentモデル","  $books = new Book;","  $books->item_name   = $request->item_name;","  $books->item_number = $request->item_number;","  $books->item_amount = $request->item_amount;","  $books->published   = $request->published;","  $books->save(); ","  return redirect('/');","  ","  ","   //** ↑ 上をコピー ↑ **"],"id":110}],[{"start":{"row":15,"column":0},"end":{"row":15,"column":10},"action":"remove","lines":["        //"],"id":111}],[{"start":{"row":14,"column":5},"end":{"row":15,"column":0},"action":"remove","lines":["",""],"id":112}],[{"start":{"row":14,"column":5},"end":{"row":15,"column":0},"action":"insert","lines":["",""],"id":113},{"start":{"row":15,"column":0},"end":{"row":15,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":15,"column":8},"end":{"row":18,"column":7},"action":"insert","lines":["$books = Book::orderBy('created_at', 'asc')->get();","    return view('books', [","        'books' => $books","    ]);"],"id":114}],[{"start":{"row":92,"column":9},"end":{"row":92,"column":10},"action":"remove","lines":["/"],"id":115},{"start":{"row":92,"column":8},"end":{"row":92,"column":9},"action":"remove","lines":["/"]}],[{"start":{"row":92,"column":8},"end":{"row":93,"column":31},"action":"insert","lines":[" $book->delete();       //追加","    return redirect('/');  //追加"],"id":116}],[{"start":{"row":93,"column":4},"end":{"row":93,"column":5},"action":"insert","lines":["　"],"id":117},{"start":{"row":93,"column":5},"end":{"row":93,"column":6},"action":"insert","lines":["　"]},{"start":{"row":93,"column":6},"end":{"row":93,"column":7},"action":"insert","lines":["　"]}],[{"start":{"row":93,"column":6},"end":{"row":93,"column":7},"action":"remove","lines":["　"],"id":118}],[{"start":{"row":92,"column":8},"end":{"row":92,"column":9},"action":"remove","lines":[" "],"id":119}],[{"start":{"row":93,"column":5},"end":{"row":93,"column":6},"action":"remove","lines":["　"],"id":120},{"start":{"row":93,"column":4},"end":{"row":93,"column":5},"action":"remove","lines":["　"]},{"start":{"row":93,"column":0},"end":{"row":93,"column":4},"action":"remove","lines":["    "]},{"start":{"row":92,"column":35},"end":{"row":93,"column":0},"action":"remove","lines":["",""]},{"start":{"row":92,"column":34},"end":{"row":92,"column":35},"action":"remove","lines":["加"]},{"start":{"row":92,"column":33},"end":{"row":92,"column":34},"action":"remove","lines":["追"]},{"start":{"row":92,"column":32},"end":{"row":92,"column":33},"action":"remove","lines":["/"]},{"start":{"row":92,"column":31},"end":{"row":92,"column":32},"action":"remove","lines":["/"]},{"start":{"row":92,"column":30},"end":{"row":92,"column":31},"action":"remove","lines":[" "]}],[{"start":{"row":92,"column":29},"end":{"row":92,"column":30},"action":"remove","lines":[" "],"id":121},{"start":{"row":92,"column":28},"end":{"row":92,"column":29},"action":"remove","lines":[" "]},{"start":{"row":92,"column":24},"end":{"row":92,"column":28},"action":"remove","lines":["    "]},{"start":{"row":92,"column":23},"end":{"row":92,"column":24},"action":"remove","lines":[";"]}],[{"start":{"row":92,"column":23},"end":{"row":92,"column":24},"action":"insert","lines":[";"],"id":122}],[{"start":{"row":92,"column":24},"end":{"row":93,"column":0},"action":"insert","lines":["",""],"id":123},{"start":{"row":93,"column":0},"end":{"row":93,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":93,"column":29},"end":{"row":93,"column":35},"action":"remove","lines":["  //追加"],"id":124}],[{"start":{"row":93,"column":29},"end":{"row":94,"column":0},"action":"insert","lines":["",""],"id":125},{"start":{"row":94,"column":0},"end":{"row":94,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":94,"column":4},"end":{"row":94,"column":8},"action":"remove","lines":["    "],"id":126},{"start":{"row":94,"column":0},"end":{"row":94,"column":4},"action":"remove","lines":["    "]},{"start":{"row":93,"column":29},"end":{"row":94,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":76,"column":9},"end":{"row":76,"column":10},"action":"remove","lines":["/"],"id":127},{"start":{"row":76,"column":8},"end":{"row":76,"column":9},"action":"remove","lines":["/"]}],[{"start":{"row":76,"column":8},"end":{"row":77,"column":52},"action":"insert","lines":["//{books}id 値を取得 => Book $books id 値の1レコード取得","        return view('booksedit', ['book' => $book]);"],"id":128}],[{"start":{"row":85,"column":9},"end":{"row":85,"column":10},"action":"remove","lines":["/"],"id":129},{"start":{"row":85,"column":8},"end":{"row":85,"column":9},"action":"remove","lines":["/"]}],[{"start":{"row":85,"column":8},"end":{"row":111,"column":5},"action":"insert","lines":["//バリデーション","         $validator = Validator::make($request->all(), [","             'id' => 'required',","             'item_name' => 'required|min:3|max:255',","             'item_number' => 'required|min:1|max:3',","             'item_amount' => 'required|max:6',","             'published' => 'required',","        ]);","        //バリデーション:エラー","         if ($validator->fails()) {","             return redirect('/booksedit/'.$request->id)","                 ->withInput()","                 ->withErrors($validator);","        }","        ","        //データ更新","        $books = Book::find($request->id);","        $books->item_name   = $request->item_name;","        $books->item_number = $request->item_number;","        $books->item_amount = $request->item_amount;","        $books->published   = $request->published;","        $books->save();","        return redirect('/');","        ","        ","        //** ↑ 上をコピー ↑ **!","    }"],"id":130}],[{"start":{"row":119,"column":4},"end":{"row":119,"column":8},"action":"remove","lines":["    "],"id":131},{"start":{"row":119,"column":0},"end":{"row":119,"column":4},"action":"remove","lines":["    "]},{"start":{"row":118,"column":5},"end":{"row":119,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":118,"column":5},"end":{"row":119,"column":0},"action":"insert","lines":["",""],"id":132},{"start":{"row":119,"column":0},"end":{"row":119,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":120,"column":4},"end":{"row":120,"column":8},"action":"remove","lines":["    "],"id":133},{"start":{"row":120,"column":0},"end":{"row":120,"column":4},"action":"remove","lines":["    "]},{"start":{"row":119,"column":24},"end":{"row":120,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":119,"column":24},"end":{"row":120,"column":0},"action":"insert","lines":["",""],"id":134},{"start":{"row":120,"column":0},"end":{"row":120,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":112,"column":4},"end":{"row":112,"column":5},"action":"remove","lines":["}"],"id":135}],[{"start":{"row":15,"column":52},"end":{"row":15,"column":53},"action":"remove","lines":[">"],"id":136}],[{"start":{"row":15,"column":51},"end":{"row":15,"column":52},"action":"remove","lines":["-"],"id":137},{"start":{"row":15,"column":50},"end":{"row":15,"column":51},"action":"remove","lines":[")"]},{"start":{"row":15,"column":49},"end":{"row":15,"column":50},"action":"remove","lines":["'"]},{"start":{"row":15,"column":48},"end":{"row":15,"column":49},"action":"remove","lines":["c"]},{"start":{"row":15,"column":47},"end":{"row":15,"column":48},"action":"remove","lines":["s"]},{"start":{"row":15,"column":46},"end":{"row":15,"column":47},"action":"remove","lines":["a"]},{"start":{"row":15,"column":45},"end":{"row":15,"column":46},"action":"remove","lines":["'"]},{"start":{"row":15,"column":44},"end":{"row":15,"column":45},"action":"remove","lines":[" "]},{"start":{"row":15,"column":43},"end":{"row":15,"column":44},"action":"remove","lines":[","]},{"start":{"row":15,"column":42},"end":{"row":15,"column":43},"action":"remove","lines":["'"]},{"start":{"row":15,"column":41},"end":{"row":15,"column":42},"action":"remove","lines":["t"]},{"start":{"row":15,"column":40},"end":{"row":15,"column":41},"action":"remove","lines":["a"]},{"start":{"row":15,"column":39},"end":{"row":15,"column":40},"action":"remove","lines":["_"]},{"start":{"row":15,"column":38},"end":{"row":15,"column":39},"action":"remove","lines":["d"]},{"start":{"row":15,"column":37},"end":{"row":15,"column":38},"action":"remove","lines":["e"]},{"start":{"row":15,"column":36},"end":{"row":15,"column":37},"action":"remove","lines":["t"]},{"start":{"row":15,"column":35},"end":{"row":15,"column":36},"action":"remove","lines":["a"]},{"start":{"row":15,"column":34},"end":{"row":15,"column":35},"action":"remove","lines":["e"]},{"start":{"row":15,"column":33},"end":{"row":15,"column":34},"action":"remove","lines":["r"]},{"start":{"row":15,"column":32},"end":{"row":15,"column":33},"action":"remove","lines":["c"]},{"start":{"row":15,"column":31},"end":{"row":15,"column":32},"action":"remove","lines":["'"]},{"start":{"row":15,"column":30},"end":{"row":15,"column":31},"action":"remove","lines":["("]},{"start":{"row":15,"column":29},"end":{"row":15,"column":30},"action":"remove","lines":["y"]},{"start":{"row":15,"column":28},"end":{"row":15,"column":29},"action":"remove","lines":["B"]},{"start":{"row":15,"column":27},"end":{"row":15,"column":28},"action":"remove","lines":["r"]},{"start":{"row":15,"column":26},"end":{"row":15,"column":27},"action":"remove","lines":["e"]},{"start":{"row":15,"column":25},"end":{"row":15,"column":26},"action":"remove","lines":["d"]},{"start":{"row":15,"column":24},"end":{"row":15,"column":25},"action":"remove","lines":["r"]},{"start":{"row":15,"column":23},"end":{"row":15,"column":24},"action":"remove","lines":["o"]},{"start":{"row":15,"column":22},"end":{"row":15,"column":23},"action":"remove","lines":[":"]},{"start":{"row":15,"column":21},"end":{"row":15,"column":22},"action":"remove","lines":[":"]},{"start":{"row":15,"column":20},"end":{"row":15,"column":21},"action":"remove","lines":["k"]},{"start":{"row":15,"column":19},"end":{"row":15,"column":20},"action":"remove","lines":["o"]},{"start":{"row":15,"column":18},"end":{"row":15,"column":19},"action":"remove","lines":["o"]},{"start":{"row":15,"column":17},"end":{"row":15,"column":18},"action":"remove","lines":["B"]},{"start":{"row":15,"column":16},"end":{"row":15,"column":17},"action":"remove","lines":[" "]}],[{"start":{"row":15,"column":15},"end":{"row":15,"column":16},"action":"remove","lines":["="],"id":138},{"start":{"row":15,"column":14},"end":{"row":15,"column":15},"action":"remove","lines":[" "]},{"start":{"row":15,"column":13},"end":{"row":15,"column":14},"action":"remove","lines":["s"]},{"start":{"row":15,"column":12},"end":{"row":15,"column":13},"action":"remove","lines":["k"]},{"start":{"row":15,"column":11},"end":{"row":15,"column":12},"action":"remove","lines":["o"]},{"start":{"row":15,"column":10},"end":{"row":15,"column":11},"action":"remove","lines":["o"]},{"start":{"row":15,"column":9},"end":{"row":15,"column":10},"action":"remove","lines":["b"]},{"start":{"row":15,"column":8},"end":{"row":15,"column":9},"action":"remove","lines":["$"]}],[{"start":{"row":15,"column":8},"end":{"row":15,"column":88},"action":"insert","lines":["$books = Book::where('user_id',Auth::user()->id)->orderBy('created_at', 'asc')->"],"id":139}],[{"start":{"row":51,"column":20},"end":{"row":52,"column":0},"action":"insert","lines":["",""],"id":140},{"start":{"row":52,"column":0},"end":{"row":52,"column":2},"action":"insert","lines":["  "]}],[{"start":{"row":52,"column":2},"end":{"row":52,"column":38},"action":"insert","lines":["$books->user_id  = Auth::user()->id;"],"id":141}],[{"start":{"row":102,"column":42},"end":{"row":103,"column":0},"action":"insert","lines":["",""],"id":142},{"start":{"row":103,"column":0},"end":{"row":103,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":103,"column":4},"end":{"row":103,"column":8},"action":"remove","lines":["    "],"id":143},{"start":{"row":103,"column":0},"end":{"row":103,"column":4},"action":"remove","lines":["    "]},{"start":{"row":102,"column":42},"end":{"row":103,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":102,"column":41},"end":{"row":102,"column":42},"action":"remove","lines":[";"],"id":144},{"start":{"row":102,"column":40},"end":{"row":102,"column":41},"action":"remove","lines":[")"]},{"start":{"row":102,"column":39},"end":{"row":102,"column":40},"action":"remove","lines":["d"]},{"start":{"row":102,"column":38},"end":{"row":102,"column":39},"action":"remove","lines":["i"]},{"start":{"row":102,"column":37},"end":{"row":102,"column":38},"action":"remove","lines":[">"]},{"start":{"row":102,"column":36},"end":{"row":102,"column":37},"action":"remove","lines":["-"]},{"start":{"row":102,"column":35},"end":{"row":102,"column":36},"action":"remove","lines":["t"]},{"start":{"row":102,"column":34},"end":{"row":102,"column":35},"action":"remove","lines":["s"]},{"start":{"row":102,"column":33},"end":{"row":102,"column":34},"action":"remove","lines":["e"]},{"start":{"row":102,"column":32},"end":{"row":102,"column":33},"action":"remove","lines":["u"]},{"start":{"row":102,"column":31},"end":{"row":102,"column":32},"action":"remove","lines":["q"]},{"start":{"row":102,"column":30},"end":{"row":102,"column":31},"action":"remove","lines":["e"]},{"start":{"row":102,"column":29},"end":{"row":102,"column":30},"action":"remove","lines":["r"]},{"start":{"row":102,"column":28},"end":{"row":102,"column":29},"action":"remove","lines":["$"]},{"start":{"row":102,"column":27},"end":{"row":102,"column":28},"action":"remove","lines":["("]},{"start":{"row":102,"column":26},"end":{"row":102,"column":27},"action":"remove","lines":["d"]},{"start":{"row":102,"column":25},"end":{"row":102,"column":26},"action":"remove","lines":["n"]},{"start":{"row":102,"column":24},"end":{"row":102,"column":25},"action":"remove","lines":["i"]},{"start":{"row":102,"column":23},"end":{"row":102,"column":24},"action":"remove","lines":["f"]},{"start":{"row":102,"column":22},"end":{"row":102,"column":23},"action":"remove","lines":[":"]},{"start":{"row":102,"column":21},"end":{"row":102,"column":22},"action":"remove","lines":[":"]},{"start":{"row":102,"column":20},"end":{"row":102,"column":21},"action":"remove","lines":["k"]},{"start":{"row":102,"column":19},"end":{"row":102,"column":20},"action":"remove","lines":["o"]},{"start":{"row":102,"column":18},"end":{"row":102,"column":19},"action":"remove","lines":["o"]},{"start":{"row":102,"column":17},"end":{"row":102,"column":18},"action":"remove","lines":["B"]},{"start":{"row":102,"column":16},"end":{"row":102,"column":17},"action":"remove","lines":[" "]},{"start":{"row":102,"column":15},"end":{"row":102,"column":16},"action":"remove","lines":["="]},{"start":{"row":102,"column":14},"end":{"row":102,"column":15},"action":"remove","lines":[" "]},{"start":{"row":102,"column":13},"end":{"row":102,"column":14},"action":"remove","lines":["s"]},{"start":{"row":102,"column":12},"end":{"row":102,"column":13},"action":"remove","lines":["k"]},{"start":{"row":102,"column":11},"end":{"row":102,"column":12},"action":"remove","lines":["o"]},{"start":{"row":102,"column":10},"end":{"row":102,"column":11},"action":"remove","lines":["o"]},{"start":{"row":102,"column":9},"end":{"row":102,"column":10},"action":"remove","lines":["b"]},{"start":{"row":102,"column":8},"end":{"row":102,"column":9},"action":"remove","lines":["$"]}],[{"start":{"row":102,"column":8},"end":{"row":102,"column":77},"action":"insert","lines":["$books = Book::where('user_id',Auth::user()->id)->find($request->id);"],"id":145}],[{"start":{"row":75,"column":4},"end":{"row":79,"column":5},"action":"remove","lines":["public function edit(Book $book)","    {","        //{books}id 値を取得 => Book $books id 値の1レコード取得","        return view('booksedit', ['book' => $book]);","    }"],"id":146},{"start":{"row":75,"column":4},"end":{"row":78,"column":1},"action":"insert","lines":["public function edit($book_id){","    $books = Book::where('user_id',Auth::user()->id)->find($book_id);","    return view('booksedit', ['book' => $books]);","}"]}],[{"start":{"row":6,"column":15},"end":{"row":7,"column":0},"action":"insert","lines":["",""],"id":147}],[{"start":{"row":7,"column":0},"end":{"row":7,"column":9},"action":"insert","lines":["use Auth;"],"id":148}],[{"start":{"row":20,"column":5},"end":{"row":21,"column":0},"action":"insert","lines":["",""],"id":149},{"start":{"row":21,"column":0},"end":{"row":21,"column":4},"action":"insert","lines":["    "]},{"start":{"row":21,"column":4},"end":{"row":22,"column":0},"action":"insert","lines":["",""]},{"start":{"row":22,"column":0},"end":{"row":22,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":22,"column":4},"end":{"row":28,"column":5},"action":"insert","lines":["public function index()","    {","        $books = Book::where('user_id',Auth::user()->id)->orderBy('created_at', 'asc')->get();","    return view('books', [","        'books' => $books","    ]);","    }"],"id":150}],[{"start":{"row":22,"column":25},"end":{"row":22,"column":26},"action":"insert","lines":["2"],"id":151}],[{"start":{"row":24,"column":8},"end":{"row":26,"column":25},"action":"remove","lines":["$books = Book::where('user_id',Auth::user()->id)->orderBy('created_at', 'asc')->get();","    return view('books', [","        'books' => $books"],"id":152},{"start":{"row":24,"column":8},"end":{"row":27,"column":7},"action":"insert","lines":["    $books = Book::orderBy('created_at', 'asc')->get();","    return view('books', [","        'books' => $books","    ]);"]}],[{"start":{"row":24,"column":11},"end":{"row":24,"column":12},"action":"remove","lines":[" "],"id":153}],[{"start":{"row":24,"column":10},"end":{"row":24,"column":11},"action":"remove","lines":[" "],"id":154},{"start":{"row":24,"column":9},"end":{"row":24,"column":10},"action":"remove","lines":[" "]},{"start":{"row":24,"column":8},"end":{"row":24,"column":9},"action":"remove","lines":[" "]},{"start":{"row":24,"column":4},"end":{"row":24,"column":8},"action":"remove","lines":["    "]},{"start":{"row":24,"column":0},"end":{"row":24,"column":4},"action":"remove","lines":["    "]}],[{"start":{"row":24,"column":0},"end":{"row":24,"column":1},"action":"insert","lines":[" "],"id":155},{"start":{"row":24,"column":1},"end":{"row":24,"column":2},"action":"insert","lines":[" "]},{"start":{"row":24,"column":2},"end":{"row":24,"column":3},"action":"insert","lines":[" "]},{"start":{"row":24,"column":3},"end":{"row":24,"column":4},"action":"insert","lines":[" "]}],[{"start":{"row":26,"column":4},"end":{"row":26,"column":8},"action":"remove","lines":["    "],"id":156}],[{"start":{"row":27,"column":6},"end":{"row":27,"column":7},"action":"remove","lines":[";"],"id":157},{"start":{"row":27,"column":5},"end":{"row":27,"column":6},"action":"remove","lines":[")"]},{"start":{"row":27,"column":4},"end":{"row":27,"column":5},"action":"remove","lines":["]"]},{"start":{"row":27,"column":0},"end":{"row":27,"column":4},"action":"remove","lines":["    "]},{"start":{"row":26,"column":21},"end":{"row":27,"column":0},"action":"remove","lines":["",""]}]]},"timestamp":1710661479937}