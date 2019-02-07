<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
  function admin() {
    return view("admin");
  }
  
  function users() {
    $userList = \App\User::all();
    return view("admin/users", ['userList' => $userList]);
  }
}
