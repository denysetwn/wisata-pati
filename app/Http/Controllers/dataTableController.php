<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dataTableController extends Controller
{
    public function dataTable(){
        return view('admin.datatable');
    }
}
