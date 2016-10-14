<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CreateUser;
use App\Http\Requests\StoreUser;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\User;

class HomeController extends Controller
{
    function actionIndex()
    {
        return 1;         
    }

    function actionList()
    {
        // $users = DB::select('select * from gbrs_users', [1]);
        $users = User::find([1, 2, 4]);
        return view("admin.list", ['users' => $users]);
    }

    function actionCreate() {
        return view('admin.form');
    }

    function actionItem($id)
    {
        return view('admin.item', ['user' => User::findOrFail($id) ]);    
    }

    function actionStore(StoreUser $request){
        

    }

    function actionView($id)
    {
        return view('admin.view', ['user' => User::findOrFail($id) ]);    
    }
}
