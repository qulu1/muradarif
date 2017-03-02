<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Singer;


class SingerController extends Controller
{
    public function index(){
    	$singer = Singer::all();
    	return view('admin.singer',compact('singer'));

    }
    public function store(Request $request){
        $this->validate($request, [
            'photo' => 'required|mimes:jpeg,bmp,png',
            'music' => 'required|mimetypes:video/mp4,audio/mpeg,video/quicktime'
        ]); 

    	$singer = New Singer;
        $singer->music_name = $request->music_name;

        if ($request->hasFile('photo')) {

            $name = time().".".$request->file("photo")->extension();
            $request->file("photo")->move(public_path().'/images',$name);  
            $singer->photo = $name;

        };

        if ($request->hasFile('music')) {
            $ad = time().".".$request->file("music")->extension();
            $request->file("music")->move(public_path().'/videos',$ad);  
            $singer->music = $ad;
        
        };

        $singer->save();
    	return back();
    }

    public function edit($id){

        $singer = Singer::find($id);
        return view('admin.singer-edit',compact('singer'));

    }
    public function update($id, Request $request){
        $this->validate($request, [
            'photo' => 'required',
        ]);         
        $singer = Singer::find($id);
        if ($request->hasFile('photo')) {

            $name = time().".".$request->file("photo")->extension();
            $request->file("photo")->move(public_path().'/images',$name);  
            $singer->photo = $name;
        };

        if ($request->hasFile('music')) {
            $ad = time().".".$request->file("music")->extension();
            $request->file("music")->move(public_path().'/videos',$ad);  
            $singer->music = $ad;
        };        
        $singer->music_name = $request->music_name;
        $singer->update();
        return redirect('/admin/singer');
    }
    public function destroy($id){
        $singer = Singer::find($id);
        $singer->delete();
        return redirect('/admin/singer');
    }
}
