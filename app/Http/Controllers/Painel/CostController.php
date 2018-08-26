<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;

class CostController extends Controller
{
    public function __construct() {
        $this->middleware('auth:admin');
    }
}
