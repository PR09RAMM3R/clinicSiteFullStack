<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\User;

class PageController extends Controller
{
    public function index()
    {   
        return view('index');
    }
    public function doctors()
    {
        $doctors = Doctor::all();
        return view('doctors')->with('doctors', $doctors);
    }
    public function services()
    {
        $services = Service::all();
        return view('services')->with('services', $services);
    }
    public function signin()
    {
        return view('signin');
    }
    public function signup()
    {
        return view('signup');
    }
    public function admin()
    {
        $doctors = Doctor::all();
        return view('adminPage.index')->with('doctors', $doctors);
    }
}
