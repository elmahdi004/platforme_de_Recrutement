<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Illuminate\Http\Request;

class EmployerJob extends Controller
{
    public function index($id){
        return Employer::find($id)->jobs()->withCount('candidates')->get();
    }
}
