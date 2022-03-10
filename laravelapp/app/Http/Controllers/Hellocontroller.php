<?php
namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Http\Requests\HelloRequest;
use Validator; 

    class HelloController extends Controller
{

    public function post(Request $request)
{
   $rules = [
       'name' => 'required',
       'mail' => 'email',
       'age' => 'numeric|between:0,150',
   ];
   $messages = [
       'name.required' => '名前は必ず入力して下さい。',
       'mail.email'  => 'メールアドレスが必要です。',
       'age.numeric' => '年齢を整数で記入下さい。',
       'age.between' => '年齢は0～150の間で入力下さい。',
   ];
   $validator = Validator::make($request->all(), $rules, $messages);
   if ($validator->fails()) {
       return redirect('/hello')
           ->withErrors($validator)
           ->withInput();
   }
   return view('hello.index', ['msg'=>'正しく入力されました！']);
}
}