<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamsController extends Controller
{
    public function index(){
        return view('teams.index');
    }

    public function create(){
        return view('teams.create');
    }

    public function update(){
        return view('teams.update');
    }
}
