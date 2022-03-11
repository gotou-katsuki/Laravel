<?php

namespace App\Providers;


 use Validator;
 use App\Http\Validators\HelloValidator;

 class HelloServiceProvider extends Provider
{

    public function boot()
    {
       Validator::extend('hello', function($attribute, $value,
               $parameters, $validator) {
           return $value % 2 == 0;
       });
    }
}