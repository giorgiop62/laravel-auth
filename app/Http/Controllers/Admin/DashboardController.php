<?php

namespace App\Http\Controllers\Admin;
//da aggiungere se il controller lo abbiamo spostato a mano
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('admin.home');
    }
}
