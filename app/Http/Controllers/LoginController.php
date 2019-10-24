<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use SoapClient;

class LoginController extends Controller
{

    public function home()
    {
        if (session()->has('authenticated')) {
            return redirect()->action('HomeController@home');
        } else {
            $nama = 'Welcome';
            return view('login', ['nama' => $nama]);
        }
    }

    public function pagesignup()
    {
        return view('page-signup');
    }

    public function login()
    {
        if ($_POST['username'] == "superadmin") {
            if ($_POST['password'] == "admin") {

                session()->put('authenticated', true);
                session()->put('username', 'superadmin');
                session()->put('nama', 'Admin');
                session()->put('branchid', 'WPI');
                session()->put('role_id', '1');

                return redirect()->action('HomeController@home');
            } else {
                return redirect()->action('LoginController@home')->with('message', 'Wrong username or password!');
            }
        } else {
            $client = new SoapClient("http://ws.megafinance.co.id:8888/index.php?r=authentication/service");
            $result = $client->Login($_POST['username'], $_POST['password']);
            $row = json_decode($result, true);

            if ($row['IsError'] == "") {

                session()->put('authenticated', true);
                session()->put('username', $row['Records']['username']);
                session()->put('nama', $row['Records']['display_name']);
                session()->put('branchid', $row['Records']['branch_id']);
                session()->put('role_id', '2');

                return redirect()->action('HomeController@home');
            } else {
                return redirect()->action('LoginController@home')->with('message', 'Wrong username or password!');
            }
        }
    }

    public function logout()
    {
        session()->flush();
        return redirect()->action('LoginController@home');
    }
}
