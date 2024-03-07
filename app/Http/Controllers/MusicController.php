<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MusicController extends Controller
{
 public function welcome()
 {
    return view('welcome');
 }
 public function home()
 {
   return view('home');
 }
}
