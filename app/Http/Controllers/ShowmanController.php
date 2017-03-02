<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Showman;


class ShowmanController extends Controller
{

    public function index(){
    	$showman = Showman::all();
    	return view('admin.showman',compact('showman'));

    }
    public function store(Request $request){
        // $this->validate($request, [
        //     'title' => 'required|unique:portfolios|max:255',
        //     'photo' => 'required',
        // ]); 
    	$showman = New Showman;
        $showman->text = $request->text;
        $showman->save();
    	return back();
    }

    public function edit($id){

        $showman = Showman::find($id);
        return view('admin.showman-edit',compact('showman'));

    }
    public function update($id, Request $request){
        $this->validate($request, [
            'text' => 'required|max:255',
            // 'photo' => 'required',
        ]);         
        $showman = Showman::find($id);
        if ($request->hasFile('photo')) {

            $name = time().".".$request->file("photo")->extension();
            $request->file("photo")->move(public_path().'/images',$name);  
            $showman->photo = $name;
        };
        $showman->text = $request->text;
        $showman->update();
        return redirect('/admin/showman');
    }
    public function destroy($id){
        $showman = Showman::find($id);
        $showman->delete();
        return redirect('/admin/showman');
    }
}    

