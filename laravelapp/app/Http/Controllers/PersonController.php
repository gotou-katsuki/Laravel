<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;


    class PersonController extends Controller
{
   public function edit(Request $request)
{
   $person = Person::find($request->id);
   return view('person.edit', ['form' => $person]);
}

public function update(Request $request)
{
   $this->validate($request, Person::$rules);
   $person = Person::find($request->id);
   $form = $request->all();
   unset($form['_token']);
   $person->fill($form)->save();
   return redirect('/person');
}

public function delete(Request $request)
{
   $person = Person::find($request->id);
   return view('person.del', ['form' => $person]);
}

public function index(Request $request)
{
   $hasItems = Person::has('boards')->get();
   $noItems = Person::doesntHave('boards')->get();
   $param = ['hasItems' => $hasItems, 'noItems' => $noItems];
   return view('person.index', $param);
}
}