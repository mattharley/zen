<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use \App\Http\Controllers\Controller as BaseController;

class ObviousController extends BaseController
{
    public function first(Request $request)
    {
        return view('obvious', [
            'thing' => $request->thing
        ]);
    }   

    public function second()
    {
        return View('obvious', [
            'thing' => request()->thing
        ]);
    }  

    public function third()
    {
        return response()->view('obvious', [
            'thing' => Request('thing')
        ]);
    }  
}
