<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    public function index(){
        $users = User::latest()->paginate(5);
        return view('admin.index', compact('users'))
        ->with('i',(request()->input('page' , 1)- 1 ) * 5);
    }
}
