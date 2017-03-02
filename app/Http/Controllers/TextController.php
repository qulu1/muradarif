<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Text;

class TextController extends Controller
{
    public function index(){
    	$text = Text::all();
    	return view('admin.text', compact('text'));
    }

    public function store(Request $request){
    	$text = new Text;
    	$text->showman_text = $request->showman_text;
    	$text->singer_text = $request->singer_text;
    	$text->save();
    	return back();
    }

    public function edit($id){

        $text = Text::find($id);
        return view('admin.text-edit',compact('text'));
    }

    public function update($id, Request $request){
  
        $text = Text::find($id);
       
        $text->showman_text = $request->showman_text;
        $text->singer_text = $request->singer_text;
        $text->update();
        return redirect('/admin/text');
    }
    public function destroy($id){
        $text = Text::find($id);
        $text->delete();
        return redirect('/admin/text');
    }    

}
