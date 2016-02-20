<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class patientController extends Controller
{
    public function register() {
        return view('patient.register');
    }
    public function login() {
        return view('patient.login');
    }
}
