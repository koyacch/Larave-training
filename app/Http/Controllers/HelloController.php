<?php

namespace App\Http\Controllers;

// Request、Responseのクラスを使えるようにする。

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    // ルートアクションのパラメーター変数として使う。初期値も設定。
    
    // public function index($id = 'noid', $pass = 'nopass'){
    //     return '
    //       <html>
    //             <head>
    //                 <title>Hello / Index</title>
    //             </head>
    //             <body>
    //                 <h1>Index</h1>
    //                 <p>これは、Helloコントローラーのindexアクションです。</p>
    //                 <p>ID : '.$id.'<br>PASS : '.$pass.'</p>
    //             </body>
    //         </html>';
    // }

    //　シングルアクションコントローラ
    
    // public function __invoke(){
    //     return '<html><head><title>Hello (single)</title></head><body>
    //     <h1>Single Action</h1>
    //     <p>これはシングルアクションコントローラーのアクションです。</p>
    //     </body></html>';
    // }
    
    // ResponseおよびRequestクラス、オブジェクト使用のテスト。
    
    // Public function index(Request $request, Response $response){
    //     $html = '<html><head><title>Hello / index（Response / Request）</title></head><body>
    //     <h1>Hello</h1>
    //     <h2>Request</h2><p>'.$request.'</p>
    //     <h2>Response</h2><p>'.$response.'</p>
    //     </body></html>';
        
    //     $response -> setContent($html);
    //     return $response;
    // }
 
    // resources/views/indexテンプレートをviewメソッドで表示。
    Public function index($id = '(none)'){
        
        // テンプレートへ渡す変数は連想配列で記述。
        $data = [
            'msg' => 'これはコントローラーから渡されたメッセージです。',
            'id' => $id
        ];
        // viewメソッドの第二引数に配列名を入れる。
        return view('hello.index', $data);
    }
    
}
