<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VacationController extends Controller {

    public function index() {
        $vacations = ["holiday1", "holiday 2", "vacation friends"];

        return view('vacations')->with('vacations', $vacations);
    }
}