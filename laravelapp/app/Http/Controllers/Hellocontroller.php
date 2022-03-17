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
}
