<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Song;

class SongsController extends Controller{
    //

    private $song;

    public function __construct(Song $song){
        $this->song = $song;
    }


    public function index(){

    	$songs = $this->song->get();

    	return view('songs.index', compact('songs'));    
    }

    public function show($slug){
    
    	$song = $this->song->whereSlug($slug)->first();
    
    	return view('songs.show', compact('song'));
    }

    //private function getSongs(){
    	
    //	return ['Boyfriend', 'Be Alright', 'Fall'];
    	
    //}

    public function edit($slug){

        $song = $this->song->whereSlug($slug)->first();
        
        return view('songs.edit', compact('song'));
    }

    public function update($slug, Request $request ){
        //dd(\Request::get('title'));
        //return 'Update the song';
    
        $song = $this->song->whereSlug($slug)->first();

        //$song->fill(['title' => $request->get('title')])->save();
        
        $song->fill($request->input())->save();

        //$song->title = $request->get('title');
        //$song->save();

        return redirect('songs');

    }
}
