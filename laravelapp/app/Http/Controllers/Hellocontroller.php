<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Http\Requests\HelloRequest;
use Validator; 
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;



class HelloController extends Controller
{
  
    public function edit(Request $request)
    {
       $item = DB::table('people')
           ->where('id', $request->id)->first();
       return view('hello.edit', ['form' => $item]);
    }
    
    public function update(Request $request)
    {
       $param = [
           'name' => $request->name,
           'mail' => $request->mail,
           'age' => $request->age,
       ];
       DB::table('people')
           ->where('id', $request->id)
           ->update($param);
       return redirect('/hello');
    }
    public function rest(Request $request)
    {
       return view('hello.rest');
    }
    public function ses_get(Request $request)
    {
       $sesdata = $request->session()->get('msg');
       return view('hello.session', ['session_data' => $sesdata]);
    }
    
    public function ses_put(Request $request)
    {
       $msg = $request->input;
       $request->session()->put('msg', $msg);
       return redirect('hello/session');
    }
    
}    
