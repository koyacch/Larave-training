<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    
    public function __invoke(){
        return '<html><head><title>Hello (single)</title></head><body>
        <h1>Single Action</h1>
        <p>これはシングルアクションコントローラーのアクションです。</p>
        </body></html>';
    }
    
}
