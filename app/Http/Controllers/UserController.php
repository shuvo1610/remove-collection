<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $collection = collect([
            'One',
            'Two',
            'Three',
            'Four'
        ]);

        $collection->pop();

        $collection = $collection->toArray();

        dd($collection);
    }
}
