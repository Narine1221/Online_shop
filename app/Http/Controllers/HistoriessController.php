<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Histories;

class HistoriessController extends Controller
{
    public function index() {
        $histories = Histories::get();

        return view("pages.histories.index", compact("histories"));
    }
}
