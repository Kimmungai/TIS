<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
      $people=['peter','sera','puri','mum','dad'];
      return view('main', compact('people'));
    }
    public function about()
    {
      return view("pages.about");
    }
    public function plan()
    {
      return view("pages.plan");
    }
    public function lineUp()
    {
      return view("pages.line-up");
    }
    public function flow()
    {
      return view("pages.flow");
    }
    public function contact()
    {
      return view("pages.contact");
    }
    public function company()
    {
      return view("pages.company");
    }
}
