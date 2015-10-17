<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    //
    public function index(){

    	$lessons = ['My First Lesson',
    				'My Second Lesson',
    				'My Third Lesson'
    				];

    	$name = '<em> John Doe </em>';

    	//return view('pages.home', [ 'name' => $name, 'lessons' => $lessons]);
    	//return view('pages.home')->with('lessons',$lessons);
    	//return view('pages.home')->withName('Jefrey Blah Blah');
    	return view('pages.home', compact('lessons', 'name'));

    }
    public function about(){
    	return view('pages.about');
    }

}
