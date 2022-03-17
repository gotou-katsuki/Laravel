<?php

namespace App;

use App\Person;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class PersonController extends Controller
{
    public function index(Request $request)
    {
        $items = Person::all();
        return view('person.index', ['items' => $items]);
    }
 }
  

