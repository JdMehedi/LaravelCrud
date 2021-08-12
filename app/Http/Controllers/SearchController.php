<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class SearchController extends Controller
{
    public function results()
    {
        $users = User::where('name','like', '%'.request('query').'%')->get();




        return view('backend.search',)->with('name', 'Search results:'.request('query'))
            ->with('users',$users)
            ->with('query',request('query'));
    }
}
