<?php

namespace cmp\Http\Controllers;

use Illuminate\Http\Request;

use cmp\Http\Requests;
use cmp\Http\Controllers\Controller;

class AboutController extends Controller
{
    //
    public function index()
    {
       return view('store.sobreEmpresa');
    }
}
