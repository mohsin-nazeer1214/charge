<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\Fee;

class UserController extends Controller
{
    public function index(){
        return view('fee');
    }
    public function insert(Request $req){
        $fee=new Fee();
        $fee->sname=$req->sname;
        $fee->email=$req->email;
        $fee->roll=$req->roll;
        $fee->month=$req->month;
        $fee->clas=$req->clas;
        $fee->save();
        return redirect('fee');
       
    }
    public function show(){
        $views=Fee::all();
        return view('fetchdata',compact('views'));
    }
    
    public function edit($id){
        $see=Fee::find($id);
        return view('edit',compact('see'));
    }
    public function update(Request $req,$id){
        $fee=Fee::find($id);
        $fee->sname=$req->sname;
        $fee->email=$req->email;
        $fee->roll=$req->roll;
        $fee->month=$req->month;
        $fee->clas=$req->clas;
        $fee->save();
        return redirect('fee');
       
    }
    public function delete($id){
        $fee=Fee::find($id);
        $fee->delete();
        return redirect('fee');

        

    }
    class ImageuploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function image_upload()
    {
        return view('image_upload');
    }
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function upload_post_image(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $imageName = time().'.'.$request->image->extension();  
   
        $request->image->move(public_path('images'), $imageName);
   
        return back()->with('success','You have successfully upload image.');
   
    }

}