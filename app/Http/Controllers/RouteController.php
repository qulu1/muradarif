<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Singer;
use App\Gallery;
use App\Interview;
use App\Showman;
use App\Text;
use DB;




class RouteController extends Controller
{
	public function home(){
		return view("home.home");
	}

	public function singer(){
		$singer = Singer::all();
		$text = DB::select('select * from texts LIMIT 1');		
		return view("home.singer_composer", compact('singer', 'text'));
	}	

	public function showman(){
		$showman = Showman::all();
		$text = DB::select('select * from texts LIMIT 1');
		return view("home.show_man", compact('showman', 'text'));
	}

	public function gallery(){
		$gallery = Gallery::all();
		return view("home.gallery", compact('gallery'));
	}

	public function about(){
		return view("home.about_me");
	}	

	public function interview(){
		$interview = Interview::all();
		return view("home.interview", compact('interview'));
	}			
}
