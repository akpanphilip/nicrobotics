<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermsController extends Controller
{
    public function index(){
        return view('terms.index');
    }
    public function privacyPolicy(){
        return view('terms.privacy-policy');
    }
    public function serviceAgreement(){
        return view('terms.service-agreement');
    }
}
