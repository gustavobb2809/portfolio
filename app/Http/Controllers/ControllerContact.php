<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerContact extends Controller
{
    //

    public function save(Request $req)
    {
       DB::table('contact_us')->insert([
           'name' => $req->name,
           'email' => $req->email,
           'title' => $req->title,
           'mesagem' => $req->mesagem
       ]);
    }
}
