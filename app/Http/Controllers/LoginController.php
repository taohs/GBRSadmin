<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
/**
 * Created by PhpStorm.
 * User: taohs
 * Date: 2016/10/12
 * Time: 23:26
 * @author taohaisong <taohaisong@gmail.com>
 * @date: 2016/10/12  Time: 23:26
 * @link http://www.php4s.com/
 * @copyright
 * @license http://www.php4s.com/license/
 * @package PHP
 */

class LoginController extends Controller
{

    function index()
    {
        // Session::put("key",1);
        // Session::save();
        echo Session::get("key");
//        session_start();
//        $request->session()->set("key", 1);
//        echo $request->session->get("key");
//        $_SESSION["key"] = 1;
//        echo $_SESSION["key"];
        return view("login");
    }

    function login()
    {
        return view("login");
    }
}
