<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Interview;


class InterviewController extends Controller
{

    public function index(){
    	$interview = Interview::all();
    	return view('admin.interview',compact('interview')); 	
    	
    }
    public function store(Request $request){
        $this->validate($request, [
            'photo1' => 'required',
        ]);   
    	$interview = New Interview;
        $interview->text = $request->text;
        if ($request->hasFile('photo1')) {

            $name = time().".".$request->file("photo1")->extension();
            $request->file("photo1")->move(public_path().'/images',$name);  
            $interview->photo1 = $name;

        };       
        $interview->save();
    	return back();
    }

    public function edit($id){

        $interview = Interview::find($id);
        return view('admin.interview-edit',compact('interview'));

    }
    public function update($id, Request $request){
        $this->validate($request, [
            'photo1' => 'required',
        ]);         
        $interview = Interview::find($id);
        if ($request->hasFile('photo1')) {

            $name = time().".".$request->file("photo1")->extension();
            $request->file("photo1")->move(public_path().'/images',$name);  
            $interview->photo1 = $name;
        };       
        $interview->update();
        return redirect('/admin/interview');
    }
    public function destroy($id){
        $interview = Interview::find($id);
        $interview->delete();
        return redirect('/admin/interview');
    }    
}
