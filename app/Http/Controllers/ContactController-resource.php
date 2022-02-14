<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /** 
     * Display a listing of resource.
     * 
     * @return \Illuminate\Http\Response
    */
    public function index()
{
    return view('contacts',[
        "title"=>"Contacts"
    ]);
}


}



