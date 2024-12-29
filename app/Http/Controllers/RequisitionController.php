<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequisitionController extends Controller
{
    public function create(){
        return view('requisition.create');
    }
}
