{"changed":true,"filter":false,"title":"chiburi_events.blade.php","tooltip":"/cms/resources/views/chiburi_events.blade.php","value":"<x-app-layout>\n\n    <!--ヘッダー[START]-->\n    <x-slot name=\"header\">\n        <h2 class=\"font-semibold text-xl text-gray-800 leading-tight\">\n            <form action=\"{{ route('book_index') }}\" method=\"GET\" class=\"w-full max-w-lg\">\n                <x-button class=\"bg-gray-100 text-gray-900\"><a href=\"/\">{{ __('Mypage') }}</a></x-button>\n                <x-button class=\"bg-gray-100 text-gray-900\"><a href=\"index2\">全体情報</a></x-button>\n            </form>\n        </h2>\n    </x-slot>\n    <!--ヘッダー[END]-->\n            \n    <!-- バリデーションエラーの表示に使用-->\n    <x-errors id=\"errors\" class=\"bg-blue-500 rounded-lg\">{{$errors}}</x-errors>\n    <!-- バリデーションエラーの表示に使用-->\n    \n    <!--全エリア[START]-->\n    <div class=\"flex bg-gray-100\">\n        \n        <!--左エリア[START]--> \n        <div class=\"text-gray-700 text-left px-4 py-4 m-2\">\n            \n            <div class=\"bg-white overflow-hidden shadow-sm sm:rounded-lg\">\n                <div class=\"p-6 bg-white border-b border-gray-500 font-bold\">\n                    イベントを追加する\n                </div>\n            </div>\n\n            <!-- 本のタイトル -->\n            <form action=\"{{ url('chibu_events') }}\" method=\"POST\" class=\"w-full max-w-lg\">\n                @csrf\n                <div class=\"flex flex-col px-2 py-2\">\n                    <!-- カラム１ -->\n                    <div class=\"w-full md:w-1/1 px-3 mb-2 md:mb-0\">\n                        <label class=\"block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2\">\n                            イベントタイトル\n                        </label>\n                        <input name=\"event_title\" class=\"appearance-none block w-full text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white\" type=\"text\" placeholder=\"\">\n                    </div>\n                    <!-- カラム２ -->\n                    <div class=\"w-full md:w-1/1 px-3\">\n                        <label class=\"block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2\">\n                            イベント内容\n                        </label>\n                        <input name=\"event_content\" class=\"appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500\" type=\"text\" placeholder=\"\">\n                    </div>\n                    <!-- カラム３ -->\n                    <div class=\"w-full md:w-1/1 px-3 mb-2 md:mb-0\">\n                        <label class=\"block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2\">\n                            予約フォームのURL\n                        </label>\n                        <input name=\"event_url\" class=\"appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500\" type=\"text\" placeholder=\"\">\n                    </div>\n                    <!-- カラム4 -->\n                    <div class=\"flex flex-col\">\n                        <div class=\"text-gray-700 text-center px-4 py-2 m-2\">\n                            <x-button class=\"bg-blue-500 rounded-lg\">送信</x-button>\n                        </div>\n                    </div>\n                </div>\n            </form>\n        </div>\n        <!--左エリア[END]--> \n\n        <!--右側エリア[START]-->\n        <div class=\"flex-1 text-gray-700 text-left bg-blue-100 px-4 py-2 m-2\">\n            <!-- 現在の本 -->\n            @if (count($chiburi_events) > 0)\n                @foreach ($chiburi_events as $chiburi_event)\n                    <x-collection_event id=\"{{ $chiburi_event->id }}\" title=\"{{$chiburi_event->event_title}}\" content=\"{{$chiburi_event->event_content}}\" url=\"{{$chiburi_event->event_url}}\">\n                        {{ $chiburi_event->event_title }}</br>{{ $chiburi_event->event_content }}</br>{{ $chiburi_event->event_url }}\n                    </x-collection_event>\n                @endforeach\n            @endif\n        </div>\n        <!--右側エリア[[END]-->       \n    </div>\n    <!--全エリア[END]-->\n\n</x-app-layout>\n","undoManager":{"mark":99,"position":99,"stack":[[{"start":{"row":26,"column":16},"end":{"row":26,"column":26},"action":"remove","lines":["    本を管理する"],"id":104}],[{"start":{"row":26,"column":16},"end":{"row":26,"column":17},"action":"insert","lines":["i"],"id":105},{"start":{"row":26,"column":17},"end":{"row":26,"column":18},"action":"insert","lines":["b"]},{"start":{"row":26,"column":18},"end":{"row":26,"column":19},"action":"insert","lines":["e"]},{"start":{"row":26,"column":19},"end":{"row":26,"column":20},"action":"insert","lines":["n"]}],[{"start":{"row":26,"column":19},"end":{"row":26,"column":20},"action":"remove","lines":["n"],"id":106},{"start":{"row":26,"column":18},"end":{"row":26,"column":19},"action":"remove","lines":["e"]},{"start":{"row":26,"column":17},"end":{"row":26,"column":18},"action":"remove","lines":["b"]},{"start":{"row":26,"column":16},"end":{"row":26,"column":17},"action":"remove","lines":["i"]}],[{"start":{"row":26,"column":16},"end":{"row":26,"column":20},"action":"insert","lines":["イベント"],"id":107},{"start":{"row":26,"column":20},"end":{"row":26,"column":21},"action":"insert","lines":["を"]}],[{"start":{"row":26,"column":21},"end":{"row":26,"column":25},"action":"insert","lines":["追加する"],"id":108}],[{"start":{"row":32,"column":34},"end":{"row":32,"column":39},"action":"remove","lines":["books"],"id":109},{"start":{"row":32,"column":34},"end":{"row":32,"column":35},"action":"insert","lines":["c"]},{"start":{"row":32,"column":35},"end":{"row":32,"column":36},"action":"insert","lines":["h"]},{"start":{"row":32,"column":36},"end":{"row":32,"column":37},"action":"insert","lines":["i"]}],[{"start":{"row":32,"column":34},"end":{"row":32,"column":37},"action":"remove","lines":["chi"],"id":110},{"start":{"row":32,"column":34},"end":{"row":32,"column":45},"action":"insert","lines":["chibu_event"]}],[{"start":{"row":38,"column":31},"end":{"row":38,"column":32},"action":"remove","lines":["e"],"id":111},{"start":{"row":38,"column":30},"end":{"row":38,"column":31},"action":"remove","lines":["m"]},{"start":{"row":38,"column":29},"end":{"row":38,"column":30},"action":"remove","lines":["a"]},{"start":{"row":38,"column":28},"end":{"row":38,"column":29},"action":"remove","lines":["N"]},{"start":{"row":38,"column":27},"end":{"row":38,"column":28},"action":"remove","lines":[" "]},{"start":{"row":38,"column":26},"end":{"row":38,"column":27},"action":"remove","lines":["k"]},{"start":{"row":38,"column":25},"end":{"row":38,"column":26},"action":"remove","lines":["o"]},{"start":{"row":38,"column":24},"end":{"row":38,"column":25},"action":"remove","lines":["o"]},{"start":{"row":38,"column":23},"end":{"row":38,"column":24},"action":"remove","lines":["B"]}],[{"start":{"row":38,"column":23},"end":{"row":38,"column":24},"action":"insert","lines":["i"],"id":112},{"start":{"row":38,"column":24},"end":{"row":38,"column":25},"action":"insert","lines":["b"]},{"start":{"row":38,"column":25},"end":{"row":38,"column":26},"action":"insert","lines":["e"]},{"start":{"row":38,"column":26},"end":{"row":38,"column":27},"action":"insert","lines":["n"]}],[{"start":{"row":38,"column":26},"end":{"row":38,"column":27},"action":"remove","lines":["n"],"id":113},{"start":{"row":38,"column":25},"end":{"row":38,"column":26},"action":"remove","lines":["e"]},{"start":{"row":38,"column":24},"end":{"row":38,"column":25},"action":"remove","lines":["b"]},{"start":{"row":38,"column":23},"end":{"row":38,"column":24},"action":"remove","lines":["i"]}],[{"start":{"row":38,"column":23},"end":{"row":38,"column":27},"action":"insert","lines":["イベント"],"id":114},{"start":{"row":38,"column":27},"end":{"row":38,"column":28},"action":"insert","lines":["名"]}],[{"start":{"row":45,"column":25},"end":{"row":45,"column":26},"action":"remove","lines":["額"],"id":115},{"start":{"row":45,"column":24},"end":{"row":45,"column":25},"action":"remove","lines":["金"]}],[{"start":{"row":38,"column":27},"end":{"row":38,"column":28},"action":"remove","lines":["名"],"id":116}],[{"start":{"row":38,"column":27},"end":{"row":38,"column":31},"action":"insert","lines":["タイトル"],"id":117}],[{"start":{"row":45,"column":24},"end":{"row":45,"column":30},"action":"insert","lines":["イベント内容"],"id":118}],[{"start":{"row":52,"column":24},"end":{"row":52,"column":25},"action":"remove","lines":["数"],"id":119}],[{"start":{"row":52,"column":24},"end":{"row":52,"column":26},"action":"insert","lines":["予約"],"id":120},{"start":{"row":52,"column":26},"end":{"row":52,"column":29},"action":"insert","lines":["URL"]}],[{"start":{"row":52,"column":26},"end":{"row":52,"column":31},"action":"insert","lines":["フォームの"],"id":121}],[{"start":{"row":56,"column":20},"end":{"row":63,"column":24},"action":"remove","lines":["<!-- カラム４ -->","                    <div class=\"w-full md:w-1/1 px-3 mb-6 md:mb-0\">","                      <label class=\"block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2\">","                        発売日","                      </label>","                      <input name=\"published\" type=\"date\" class=\"appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500\" type=\"text\" placeholder=\"\">","                    </div>","                  </div>"],"id":122},{"start":{"row":56,"column":16},"end":{"row":56,"column":20},"action":"remove","lines":["    "]},{"start":{"row":56,"column":12},"end":{"row":56,"column":16},"action":"remove","lines":["    "]},{"start":{"row":56,"column":8},"end":{"row":56,"column":12},"action":"remove","lines":["    "]},{"start":{"row":56,"column":4},"end":{"row":56,"column":8},"action":"remove","lines":["    "]},{"start":{"row":56,"column":0},"end":{"row":56,"column":4},"action":"remove","lines":["    "]},{"start":{"row":55,"column":26},"end":{"row":56,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":56,"column":26},"end":{"row":56,"column":27},"action":"remove","lines":["５"],"id":123}],[{"start":{"row":56,"column":26},"end":{"row":56,"column":27},"action":"insert","lines":["4"],"id":124}],[{"start":{"row":40,"column":43},"end":{"row":40,"column":44},"action":"remove","lines":["e"],"id":125},{"start":{"row":40,"column":42},"end":{"row":40,"column":43},"action":"remove","lines":["m"]},{"start":{"row":40,"column":41},"end":{"row":40,"column":42},"action":"remove","lines":["a"]},{"start":{"row":40,"column":40},"end":{"row":40,"column":41},"action":"remove","lines":["n"]},{"start":{"row":40,"column":39},"end":{"row":40,"column":40},"action":"remove","lines":["_"]},{"start":{"row":40,"column":38},"end":{"row":40,"column":39},"action":"remove","lines":["m"]},{"start":{"row":40,"column":37},"end":{"row":40,"column":38},"action":"remove","lines":["e"]},{"start":{"row":40,"column":36},"end":{"row":40,"column":37},"action":"remove","lines":["t"]},{"start":{"row":40,"column":35},"end":{"row":40,"column":36},"action":"remove","lines":["i"]}],[{"start":{"row":40,"column":35},"end":{"row":40,"column":36},"action":"insert","lines":["e"],"id":126}],[{"start":{"row":40,"column":35},"end":{"row":40,"column":36},"action":"remove","lines":["e"],"id":127}],[{"start":{"row":40,"column":35},"end":{"row":40,"column":36},"action":"insert","lines":["e"],"id":128},{"start":{"row":40,"column":36},"end":{"row":40,"column":37},"action":"insert","lines":["v"]},{"start":{"row":40,"column":37},"end":{"row":40,"column":38},"action":"insert","lines":["e"]},{"start":{"row":40,"column":38},"end":{"row":40,"column":39},"action":"insert","lines":["n"]}],[{"start":{"row":40,"column":35},"end":{"row":40,"column":39},"action":"remove","lines":["even"],"id":129},{"start":{"row":40,"column":35},"end":{"row":40,"column":46},"action":"insert","lines":["event_title"]}],[{"start":{"row":47,"column":35},"end":{"row":47,"column":46},"action":"remove","lines":["item_amount"],"id":130}],[{"start":{"row":47,"column":35},"end":{"row":47,"column":36},"action":"insert","lines":["e"],"id":131},{"start":{"row":47,"column":36},"end":{"row":47,"column":37},"action":"insert","lines":["v"]},{"start":{"row":47,"column":37},"end":{"row":47,"column":38},"action":"insert","lines":["e"]}],[{"start":{"row":47,"column":35},"end":{"row":47,"column":38},"action":"remove","lines":["eve"],"id":132},{"start":{"row":47,"column":35},"end":{"row":47,"column":48},"action":"insert","lines":["event_content"]}],[{"start":{"row":54,"column":35},"end":{"row":54,"column":46},"action":"remove","lines":["item_number"],"id":133},{"start":{"row":54,"column":35},"end":{"row":54,"column":36},"action":"insert","lines":["e"]},{"start":{"row":54,"column":36},"end":{"row":54,"column":37},"action":"insert","lines":["v"]},{"start":{"row":54,"column":37},"end":{"row":54,"column":38},"action":"insert","lines":["e"]}],[{"start":{"row":54,"column":35},"end":{"row":54,"column":38},"action":"remove","lines":["eve"],"id":134},{"start":{"row":54,"column":35},"end":{"row":54,"column":44},"action":"insert","lines":["event_url"]}],[{"start":{"row":70,"column":24},"end":{"row":70,"column":25},"action":"remove","lines":["s"],"id":135},{"start":{"row":70,"column":23},"end":{"row":70,"column":24},"action":"remove","lines":["k"]},{"start":{"row":70,"column":22},"end":{"row":70,"column":23},"action":"remove","lines":["o"]},{"start":{"row":70,"column":21},"end":{"row":70,"column":22},"action":"remove","lines":["o"]},{"start":{"row":70,"column":20},"end":{"row":70,"column":21},"action":"remove","lines":["b"]}],[{"start":{"row":70,"column":20},"end":{"row":70,"column":21},"action":"insert","lines":["e"],"id":136},{"start":{"row":70,"column":21},"end":{"row":70,"column":22},"action":"insert","lines":["v"]},{"start":{"row":70,"column":22},"end":{"row":70,"column":23},"action":"insert","lines":["e"]},{"start":{"row":70,"column":23},"end":{"row":70,"column":24},"action":"insert","lines":["n"]}],[{"start":{"row":70,"column":23},"end":{"row":70,"column":24},"action":"remove","lines":["n"],"id":137},{"start":{"row":70,"column":22},"end":{"row":70,"column":23},"action":"remove","lines":["e"]},{"start":{"row":70,"column":21},"end":{"row":70,"column":22},"action":"remove","lines":["v"]},{"start":{"row":70,"column":20},"end":{"row":70,"column":21},"action":"remove","lines":["e"]},{"start":{"row":70,"column":19},"end":{"row":70,"column":20},"action":"remove","lines":["$"]}],[{"start":{"row":70,"column":19},"end":{"row":70,"column":25},"action":"insert","lines":["$books"],"id":138}],[{"start":{"row":70,"column":19},"end":{"row":70,"column":25},"action":"remove","lines":["$books"],"id":139},{"start":{"row":70,"column":19},"end":{"row":70,"column":34},"action":"insert","lines":["$chiburi_events"]}],[{"start":{"row":71,"column":22},"end":{"row":71,"column":28},"action":"remove","lines":["$books"],"id":140},{"start":{"row":71,"column":22},"end":{"row":71,"column":37},"action":"insert","lines":["$chiburi_events"]}],[{"start":{"row":71,"column":41},"end":{"row":71,"column":46},"action":"remove","lines":["$book"],"id":141},{"start":{"row":71,"column":41},"end":{"row":71,"column":56},"action":"insert","lines":["$chiburi_events"]}],[{"start":{"row":71,"column":55},"end":{"row":71,"column":56},"action":"remove","lines":["s"],"id":142}],[{"start":{"row":72,"column":37},"end":{"row":72,"column":42},"action":"remove","lines":["$book"],"id":143},{"start":{"row":72,"column":37},"end":{"row":72,"column":52},"action":"insert","lines":["$chiburi_events"]}],[{"start":{"row":72,"column":64},"end":{"row":72,"column":69},"action":"remove","lines":["$book"],"id":144},{"start":{"row":72,"column":64},"end":{"row":72,"column":79},"action":"insert","lines":["$chiburi_events"]}],[{"start":{"row":72,"column":89},"end":{"row":72,"column":90},"action":"remove","lines":["e"],"id":145},{"start":{"row":72,"column":88},"end":{"row":72,"column":89},"action":"remove","lines":["m"]},{"start":{"row":72,"column":87},"end":{"row":72,"column":88},"action":"remove","lines":["a"]},{"start":{"row":72,"column":86},"end":{"row":72,"column":87},"action":"remove","lines":["n"]},{"start":{"row":72,"column":85},"end":{"row":72,"column":86},"action":"remove","lines":["_"]},{"start":{"row":72,"column":84},"end":{"row":72,"column":85},"action":"remove","lines":["m"]},{"start":{"row":72,"column":83},"end":{"row":72,"column":84},"action":"remove","lines":["e"]},{"start":{"row":72,"column":82},"end":{"row":72,"column":83},"action":"remove","lines":["t"]},{"start":{"row":72,"column":81},"end":{"row":72,"column":82},"action":"remove","lines":["i"]}],[{"start":{"row":72,"column":81},"end":{"row":72,"column":82},"action":"insert","lines":["e"],"id":146},{"start":{"row":72,"column":82},"end":{"row":72,"column":83},"action":"insert","lines":["v"]},{"start":{"row":72,"column":83},"end":{"row":72,"column":84},"action":"insert","lines":["e"]}],[{"start":{"row":72,"column":81},"end":{"row":72,"column":84},"action":"remove","lines":["eve"],"id":147},{"start":{"row":72,"column":81},"end":{"row":72,"column":92},"action":"insert","lines":["event_title"]}],[{"start":{"row":72,"column":103},"end":{"row":72,"column":108},"action":"remove","lines":["$book"],"id":148},{"start":{"row":72,"column":103},"end":{"row":72,"column":118},"action":"insert","lines":["$chiburi_events"]}],[{"start":{"row":72,"column":120},"end":{"row":72,"column":131},"action":"remove","lines":["item_amount"],"id":149}],[{"start":{"row":72,"column":120},"end":{"row":72,"column":121},"action":"insert","lines":["e"],"id":150},{"start":{"row":72,"column":121},"end":{"row":72,"column":122},"action":"insert","lines":["v"]},{"start":{"row":72,"column":122},"end":{"row":72,"column":123},"action":"insert","lines":["e"]}],[{"start":{"row":72,"column":120},"end":{"row":72,"column":123},"action":"remove","lines":["eve"],"id":151},{"start":{"row":72,"column":120},"end":{"row":72,"column":133},"action":"insert","lines":["event_content"]}],[{"start":{"row":72,"column":136},"end":{"row":72,"column":137},"action":"remove","lines":["円"],"id":152}],[{"start":{"row":32,"column":45},"end":{"row":32,"column":46},"action":"insert","lines":["s"],"id":153}],[{"start":{"row":32,"column":34},"end":{"row":32,"column":46},"action":"remove","lines":["chibu_events"],"id":154},{"start":{"row":32,"column":34},"end":{"row":32,"column":52},"action":"insert","lines":["chibu_events_store"]}],[{"start":{"row":32,"column":46},"end":{"row":32,"column":52},"action":"remove","lines":["_store"],"id":155}],[{"start":{"row":72,"column":51},"end":{"row":72,"column":52},"action":"remove","lines":["s"],"id":156}],[{"start":{"row":72,"column":77},"end":{"row":72,"column":78},"action":"remove","lines":["s"],"id":157}],[{"start":{"row":72,"column":115},"end":{"row":72,"column":116},"action":"remove","lines":["s"],"id":158},{"start":{"row":72,"column":29},"end":{"row":72,"column":30},"action":"insert","lines":["2"]}],[{"start":{"row":72,"column":148},"end":{"row":72,"column":149},"action":"insert","lines":["2"],"id":159}],[{"start":{"row":72,"column":148},"end":{"row":72,"column":149},"action":"remove","lines":["2"],"id":160}],[{"start":{"row":72,"column":29},"end":{"row":72,"column":30},"action":"remove","lines":["2"],"id":161}],[{"start":{"row":0,"column":0},"end":{"row":81,"column":15},"action":"remove","lines":["<!-- resources/views/books.blade.php -->","<x-app-layout>","","    <!--ヘッダー[START]-->","    <x-slot name=\"header\">","        <h2 class=\"font-semibold text-xl text-gray-800 leading-tight\">","            <form action=\"{{ route('book_index') }}\" method=\"GET\" class=\"w-full max-w-lg\">","                <x-button class=\"bg-gray-100 text-gray-900\"><a href=\"/\">{{ __('Mypage') }}</a></x-button>","                <x-button class=\"bg-gray-100 text-gray-900\"><a href=\"index2\">全体情報</a></x-button>","            </form>","        </h2>","    </x-slot>","    <!--ヘッダー[END]-->","            ","        <!-- バリデーションエラーの表示に使用-->","       <x-errors id=\"errors\" class=\"bg-blue-500 rounded-lg\">{{$errors}}</x-errors>","        <!-- バリデーションエラーの表示に使用-->","    ","    <!--全エリア[START]-->","    <div class=\"flex bg-gray-100\">","","        <!--左エリア[START]--> ","        <div class=\"text-gray-700 text-left px-4 py-4 m-2\">","            ","            <div class=\"bg-white overflow-hidden shadow-sm sm:rounded-lg\">","                <div class=\"p-6 bg-white border-b border-gray-500 font-bold\">","                イベントを追加する","                </div>","            </div>","","","            <!-- 本のタイトル -->","            <form action=\"{{ url('chibu_events') }}\" method=\"POST\" class=\"w-full max-w-lg\">","                @csrf","                  <div class=\"flex flex-col px-2 py-2\">","                   <!-- カラム１ -->","                    <div class=\"w-full md:w-1/1 px-3 mb-2 md:mb-0\">","                      <label class=\"block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2\">","                       イベントタイトル","                      </label>","                      <input name=\"event_title\" class=\"appearance-none block w-full text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white\" type=\"text\" placeholder=\"\">","                    </div>","                    <!-- カラム２ -->","                    <div class=\"w-full md:w-1/1 px-3\">","                      <label class=\"block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2\">","                        イベント内容","                      </label>","                      <input name=\"event_content\" class=\"appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500\" type=\"text\" placeholder=\"\">","                    </div>","                    <!-- カラム３ -->","                    <div class=\"w-full md:w-1/1 px-3 mb-2 md:mb-0\">","                      <label class=\"block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2\">","                        予約フォームのURL","                      </label>","                      <input name=\"event_url\" class=\"appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500\" type=\"text\" placeholder=\"\">","                    </div>","                  <!-- カラム4 -->","                  <div class=\"flex flex-col\">","                      <div class=\"text-gray-700 text-center px-4 py-2 m-2\">","                             <x-button class=\"bg-blue-500 rounded-lg\">送信</x-button>","                      </div>","                   </div>","            </form>","        </div>","        <!--左エリア[END]--> ","    ","    ","    <!--右側エリア[START]-->","    <div class=\"flex-1 text-gray-700 text-left bg-blue-100 px-4 py-2 m-2\">","         <!-- 現在の本 -->","        @if (count($chiburi_events) > 0)","            @foreach ($chiburi_events as $chiburi_event)","                <x-collection id=\"{{ $chiburi_event->id }}\">{{ $chiburi_event->event_title }}</br>{{ $chiburi_event->event_content }}</x-collection>","            @endforeach","        @endif","    </div>","    <!--右側エリア[[END]-->       ","","</div>"," <!--全エリア[END]-->","","</x-app-layout>"],"id":162}],[{"start":{"row":0,"column":0},"end":{"row":81,"column":0},"action":"insert","lines":["<x-app-layout>","","    <!--ヘッダー[START]-->","    <x-slot name=\"header\">","        <h2 class=\"font-semibold text-xl text-gray-800 leading-tight\">","            <form action=\"{{ route('book_index') }}\" method=\"GET\" class=\"w-full max-w-lg\">","                <x-button class=\"bg-gray-100 text-gray-900\"><a href=\"/\">{{ __('Mypage') }}</a></x-button>","                <x-button class=\"bg-gray-100 text-gray-900\"><a href=\"index2\">全体情報</a></x-button>","            </form>","        </h2>","    </x-slot>","    <!--ヘッダー[END]-->","            ","    <!-- バリデーションエラーの表示に使用-->","    <x-errors id=\"errors\" class=\"bg-blue-500 rounded-lg\">{{$errors}}</x-errors>","    <!-- バリデーションエラーの表示に使用-->","    ","    <!--全エリア[START]-->","    <div class=\"flex bg-gray-100\">","        ","        <!--左エリア[START]--> ","        <div class=\"text-gray-700 text-left px-4 py-4 m-2\">","            ","            <div class=\"bg-white overflow-hidden shadow-sm sm:rounded-lg\">","                <div class=\"p-6 bg-white border-b border-gray-500 font-bold\">","                    イベントを追加する","                </div>","            </div>","","            <!-- 本のタイトル -->","            <form action=\"{{ url('chibu_events') }}\" method=\"POST\" class=\"w-full max-w-lg\">","                @csrf","                <div class=\"flex flex-col px-2 py-2\">","                    <!-- カラム１ -->","                    <div class=\"w-full md:w-1/1 px-3 mb-2 md:mb-0\">","                        <label class=\"block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2\">","                            イベントタイトル","                        </label>","                        <input name=\"event_title\" class=\"appearance-none block w-full text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white\" type=\"text\" placeholder=\"\">","                    </div>","                    <!-- カラム２ -->","                    <div class=\"w-full md:w-1/1 px-3\">","                        <label class=\"block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2\">","                            イベント内容","                        </label>","                        <input name=\"event_content\" class=\"appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500\" type=\"text\" placeholder=\"\">","                    </div>","                    <!-- カラム３ -->","                    <div class=\"w-full md:w-1/1 px-3 mb-2 md:mb-0\">","                        <label class=\"block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2\">","                            予約フォームのURL","                        </label>","                        <input name=\"event_url\" class=\"appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500\" type=\"text\" placeholder=\"\">","                    </div>","                    <!-- カラム4 -->","                    <div class=\"flex flex-col\">","                        <div class=\"text-gray-700 text-center px-4 py-2 m-2\">","                            <x-button class=\"bg-blue-500 rounded-lg\">送信</x-button>","                        </div>","                    </div>","                </div>","            </form>","        </div>","        <!--左エリア[END]--> ","","        <!--右側エリア[START]-->","        <div class=\"flex-1 text-gray-700 text-left bg-blue-100 px-4 py-2 m-2\">","            <!-- 現在の本 -->","            @if (count($chiburi_events) > 0)","                @foreach ($chiburi_events as $chiburi_event)","                    <x-collection id=\"{{ $chiburi_event->id }}\">","                        {{ $chiburi_event->event_title }}</br>{{ $chiburi_event->event_content }}","                    </x-collection>","                @endforeach","            @endif","        </div>","        <!--右側エリア[[END]-->       ","    </div>","    <!--全エリア[END]-->","","</x-app-layout>",""],"id":163}],[{"start":{"row":70,"column":33},"end":{"row":70,"column":34},"action":"insert","lines":["_"],"id":164},{"start":{"row":70,"column":34},"end":{"row":70,"column":35},"action":"insert","lines":["e"]},{"start":{"row":70,"column":35},"end":{"row":70,"column":36},"action":"insert","lines":["v"]},{"start":{"row":70,"column":36},"end":{"row":70,"column":37},"action":"insert","lines":["e"]},{"start":{"row":70,"column":37},"end":{"row":70,"column":38},"action":"insert","lines":["n"]}],[{"start":{"row":70,"column":38},"end":{"row":70,"column":39},"action":"insert","lines":["t"],"id":165}],[{"start":{"row":72,"column":34},"end":{"row":72,"column":40},"action":"insert","lines":["_event"],"id":166}],[{"start":{"row":71,"column":97},"end":{"row":71,"column":137},"action":"insert","lines":["</br>{{ $chiburi_event->event_content }}"],"id":167}],[{"start":{"row":71,"column":133},"end":{"row":71,"column":134},"action":"remove","lines":["t"],"id":168},{"start":{"row":71,"column":132},"end":{"row":71,"column":133},"action":"remove","lines":["n"]},{"start":{"row":71,"column":131},"end":{"row":71,"column":132},"action":"remove","lines":["e"]},{"start":{"row":71,"column":130},"end":{"row":71,"column":131},"action":"remove","lines":["t"]},{"start":{"row":71,"column":129},"end":{"row":71,"column":130},"action":"remove","lines":["n"]},{"start":{"row":71,"column":128},"end":{"row":71,"column":129},"action":"remove","lines":["o"]},{"start":{"row":71,"column":127},"end":{"row":71,"column":128},"action":"remove","lines":["c"]}],[{"start":{"row":71,"column":127},"end":{"row":71,"column":128},"action":"insert","lines":["u"],"id":169},{"start":{"row":71,"column":128},"end":{"row":71,"column":129},"action":"insert","lines":["r"]},{"start":{"row":71,"column":129},"end":{"row":71,"column":130},"action":"insert","lines":["l"]}],[{"start":{"row":70,"column":69},"end":{"row":70,"column":70},"action":"insert","lines":[" "],"id":170}],[{"start":{"row":70,"column":70},"end":{"row":70,"column":71},"action":"insert","lines":["t"],"id":171},{"start":{"row":70,"column":71},"end":{"row":70,"column":72},"action":"insert","lines":["i"]}],[{"start":{"row":70,"column":72},"end":{"row":70,"column":73},"action":"insert","lines":["t"],"id":172}],[{"start":{"row":70,"column":70},"end":{"row":70,"column":73},"action":"remove","lines":["tit"],"id":173},{"start":{"row":70,"column":70},"end":{"row":70,"column":75},"action":"insert","lines":["title"]}],[{"start":{"row":70,"column":75},"end":{"row":70,"column":76},"action":"insert","lines":["="],"id":174}],[{"start":{"row":70,"column":76},"end":{"row":70,"column":78},"action":"insert","lines":["\"\""],"id":175}],[{"start":{"row":70,"column":77},"end":{"row":70,"column":78},"action":"insert","lines":["["],"id":176}],[{"start":{"row":70,"column":77},"end":{"row":70,"column":78},"action":"remove","lines":["["],"id":177}],[{"start":{"row":70,"column":77},"end":{"row":70,"column":78},"action":"insert","lines":["{"],"id":178},{"start":{"row":70,"column":78},"end":{"row":70,"column":79},"action":"insert","lines":["{"]},{"start":{"row":70,"column":79},"end":{"row":70,"column":80},"action":"insert","lines":["}"]},{"start":{"row":70,"column":80},"end":{"row":70,"column":81},"action":"insert","lines":["}"]}],[{"start":{"row":70,"column":79},"end":{"row":70,"column":97},"action":"insert","lines":["$chiburi_event->id"],"id":179}],[{"start":{"row":70,"column":96},"end":{"row":70,"column":97},"action":"remove","lines":["d"],"id":180},{"start":{"row":70,"column":95},"end":{"row":70,"column":96},"action":"remove","lines":["i"]}],[{"start":{"row":70,"column":95},"end":{"row":70,"column":96},"action":"insert","lines":["e"],"id":181},{"start":{"row":70,"column":96},"end":{"row":70,"column":97},"action":"insert","lines":["v"]},{"start":{"row":70,"column":97},"end":{"row":70,"column":98},"action":"insert","lines":["e"]},{"start":{"row":70,"column":98},"end":{"row":70,"column":99},"action":"insert","lines":["a"]},{"start":{"row":70,"column":99},"end":{"row":70,"column":100},"action":"insert","lines":["t"]}],[{"start":{"row":70,"column":99},"end":{"row":70,"column":100},"action":"remove","lines":["t"],"id":182},{"start":{"row":70,"column":98},"end":{"row":70,"column":99},"action":"remove","lines":["a"]}],[{"start":{"row":70,"column":98},"end":{"row":70,"column":99},"action":"insert","lines":["n"],"id":183},{"start":{"row":70,"column":99},"end":{"row":70,"column":100},"action":"insert","lines":["t"]}],[{"start":{"row":70,"column":95},"end":{"row":70,"column":100},"action":"remove","lines":["event"],"id":184},{"start":{"row":70,"column":95},"end":{"row":70,"column":106},"action":"insert","lines":["event_title"]}],[{"start":{"row":70,"column":109},"end":{"row":70,"column":110},"action":"insert","lines":[" "],"id":185},{"start":{"row":70,"column":110},"end":{"row":70,"column":111},"action":"insert","lines":["c"]},{"start":{"row":70,"column":111},"end":{"row":70,"column":112},"action":"insert","lines":["o"]},{"start":{"row":70,"column":112},"end":{"row":70,"column":113},"action":"insert","lines":["n"]},{"start":{"row":70,"column":113},"end":{"row":70,"column":114},"action":"insert","lines":["t"]},{"start":{"row":70,"column":114},"end":{"row":70,"column":115},"action":"insert","lines":["e"]},{"start":{"row":70,"column":115},"end":{"row":70,"column":116},"action":"insert","lines":["n"]},{"start":{"row":70,"column":116},"end":{"row":70,"column":117},"action":"insert","lines":["t"]}],[{"start":{"row":70,"column":117},"end":{"row":70,"column":118},"action":"insert","lines":["="],"id":186}],[{"start":{"row":70,"column":118},"end":{"row":70,"column":120},"action":"insert","lines":["\"\""],"id":187}],[{"start":{"row":70,"column":119},"end":{"row":70,"column":120},"action":"insert","lines":["{"],"id":188},{"start":{"row":70,"column":120},"end":{"row":70,"column":121},"action":"insert","lines":["{"]},{"start":{"row":70,"column":121},"end":{"row":70,"column":122},"action":"insert","lines":["}"]},{"start":{"row":70,"column":122},"end":{"row":70,"column":123},"action":"insert","lines":["}"]}],[{"start":{"row":70,"column":121},"end":{"row":70,"column":134},"action":"insert","lines":["event_content"],"id":189}],[{"start":{"row":70,"column":137},"end":{"row":70,"column":138},"action":"insert","lines":[" "],"id":190},{"start":{"row":70,"column":138},"end":{"row":70,"column":139},"action":"insert","lines":["e"]},{"start":{"row":70,"column":139},"end":{"row":70,"column":140},"action":"insert","lines":["v"]},{"start":{"row":70,"column":140},"end":{"row":70,"column":141},"action":"insert","lines":["e"]}],[{"start":{"row":70,"column":141},"end":{"row":70,"column":142},"action":"insert","lines":["n"],"id":191},{"start":{"row":70,"column":142},"end":{"row":70,"column":143},"action":"insert","lines":["t"]}],[{"start":{"row":70,"column":142},"end":{"row":70,"column":143},"action":"remove","lines":["t"],"id":192},{"start":{"row":70,"column":141},"end":{"row":70,"column":142},"action":"remove","lines":["n"]},{"start":{"row":70,"column":140},"end":{"row":70,"column":141},"action":"remove","lines":["e"]},{"start":{"row":70,"column":139},"end":{"row":70,"column":140},"action":"remove","lines":["v"]},{"start":{"row":70,"column":138},"end":{"row":70,"column":139},"action":"remove","lines":["e"]}],[{"start":{"row":70,"column":138},"end":{"row":70,"column":139},"action":"insert","lines":["u"],"id":193},{"start":{"row":70,"column":139},"end":{"row":70,"column":140},"action":"insert","lines":["r"]},{"start":{"row":70,"column":140},"end":{"row":70,"column":141},"action":"insert","lines":["l"]},{"start":{"row":70,"column":141},"end":{"row":70,"column":142},"action":"insert","lines":["="]}],[{"start":{"row":70,"column":142},"end":{"row":70,"column":144},"action":"insert","lines":["\"\""],"id":194}],[{"start":{"row":70,"column":143},"end":{"row":70,"column":144},"action":"insert","lines":["e"],"id":195},{"start":{"row":70,"column":144},"end":{"row":70,"column":145},"action":"insert","lines":["v"]},{"start":{"row":70,"column":145},"end":{"row":70,"column":146},"action":"insert","lines":["e"]},{"start":{"row":70,"column":146},"end":{"row":70,"column":147},"action":"insert","lines":["n"]},{"start":{"row":70,"column":147},"end":{"row":70,"column":148},"action":"insert","lines":["t"]}],[{"start":{"row":70,"column":143},"end":{"row":70,"column":148},"action":"remove","lines":["event"],"id":196},{"start":{"row":70,"column":143},"end":{"row":70,"column":152},"action":"insert","lines":["event_url"]}],[{"start":{"row":70,"column":143},"end":{"row":70,"column":144},"action":"remove","lines":["e"],"id":197},{"start":{"row":70,"column":143},"end":{"row":70,"column":144},"action":"remove","lines":["v"]},{"start":{"row":70,"column":143},"end":{"row":70,"column":144},"action":"remove","lines":["e"]},{"start":{"row":70,"column":143},"end":{"row":70,"column":144},"action":"remove","lines":["n"]},{"start":{"row":70,"column":143},"end":{"row":70,"column":144},"action":"remove","lines":["t"]},{"start":{"row":70,"column":143},"end":{"row":70,"column":144},"action":"remove","lines":["_"]},{"start":{"row":70,"column":143},"end":{"row":70,"column":144},"action":"remove","lines":["u"]},{"start":{"row":70,"column":143},"end":{"row":70,"column":144},"action":"remove","lines":["r"]},{"start":{"row":70,"column":143},"end":{"row":70,"column":144},"action":"remove","lines":["l"]}],[{"start":{"row":70,"column":143},"end":{"row":70,"column":168},"action":"insert","lines":["$chiburi_event->event_url"],"id":198}],[{"start":{"row":70,"column":143},"end":{"row":70,"column":144},"action":"remove","lines":["$"],"id":199}],[{"start":{"row":70,"column":121},"end":{"row":70,"column":137},"action":"insert","lines":["$chiburi_event->"],"id":200}],[{"start":{"row":70,"column":159},"end":{"row":70,"column":160},"action":"insert","lines":["{"],"id":201},{"start":{"row":70,"column":160},"end":{"row":70,"column":161},"action":"insert","lines":["{"]}],[{"start":{"row":70,"column":185},"end":{"row":70,"column":186},"action":"insert","lines":["}"],"id":202},{"start":{"row":70,"column":186},"end":{"row":70,"column":187},"action":"insert","lines":["}"]}],[{"start":{"row":70,"column":161},"end":{"row":70,"column":162},"action":"insert","lines":["$"],"id":203}],[{"start":{"row":66,"column":51},"end":{"row":66,"column":62},"action":"remove","lines":["bg-blue-100"],"id":204},{"start":{"row":66,"column":50},"end":{"row":66,"column":51},"action":"remove","lines":[" "]}]]},"ace":{"folds":[],"scrolltop":796.9999999999998,"scrollleft":0,"selection":{"start":{"row":66,"column":50},"end":{"row":66,"column":62},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":55,"state":"start","mode":"ace/mode/php_laravel_blade"}},"timestamp":1710916527940}