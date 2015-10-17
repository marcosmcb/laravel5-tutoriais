<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;


class SongsController extends Controller
{
    //


    public function index(){

    	$songs = DB::table('songs')->get();

        //dd($songs);

    	return view('songs.index', compact('songs'));
    
    }

    public function show($id){
    
    	$song = DB::table('songs')->find($id);
    
    	return view('songs.show', compact('song'));
    }

    private function getSongs(){
    	
    	return ['Boyfriend', 'Be Alright', 'Fall'];
    	
    }
}
