<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class medical_personnelController extends Controller
{
    public function register() {
        return view('medical_personnel.register');
    }
    public function login() {
        return view('medical_personnel.login');
    }
}
