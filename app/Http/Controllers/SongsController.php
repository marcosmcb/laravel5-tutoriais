<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Song;

class SongsController extends Controller
{
    //


    public function index(Song $song){

    	$songs = $song->get();

    	return view('songs.index', compact('songs'));
    
    }

    public function show(Song $song){
    
    	//$song = Song::whereSlug($slug)->first();
    
    	return view('songs.show', compact('song'));
    }

    private function getSongs(){
    	
    	return ['Boyfriend', 'Be Alright', 'Fall'];
    	
    }

    public function edit(Song $song){

        return 'Edit the song with a title of ' . $song->title;

        return view('songs.edit', compact('song'));
    }
}
