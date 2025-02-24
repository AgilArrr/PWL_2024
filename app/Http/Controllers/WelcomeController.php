<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class WelcomeController extends Controller
{
    public function hello()
    {
        return 'Hello World';
    }

   
}

Route::get('/hello', [WelcomeController::class,'hello']);

