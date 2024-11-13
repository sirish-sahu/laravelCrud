<?php

namespace App\Http\Controllers;
use App\Models\Register;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    function index(){
        return view('welcome');
    }
    function register(){
        return view('register');
    }
    function store(Request $request){
        // upload image 
        $imageName = time().'.'.$request->image->extension(); 
        $request->image->move(public_path('images'), $imageName);

        $result = $request->all();
        $result["hobby"] = implode(",",$result["hobby"]);
        $result["img"] = $imageName;

        Register::create($result);

        // return redirect()->route("welcome");
        return redirect()->route("welcome")->with('success','insertedd sucessfully');
    }

    function display(){
        $data = Register::get();
        return view("welcome",['data'=>$data]);
    }

    function delete($id){
        Register::where("id","=",$id)->delete();
        return redirect()->route("welcome");
    }

    function update($id){
        $data = Register::where("id" ,"=",$id)->first();
        return view("update",compact("data"));
    }

    function updateInDb(Request $request){
        $data=[
            'name' => $request->name,
            'email' => $request->email,
            'gender' => $request->gender,
            'city' => $request->city,
            'hobby' => implode(",",$request->hobby),
            'dob' => $request->dob,
        ];
        if($request->hasFile('img')){
            $imageName = time().'.'.$request->image->extension(); 
            $request->image->move(public_path('images'), $imageName);
            $data["img"] = $imageName;
        }
        Register::where("id" ,"=" ,$request->id)->update($data);
        return redirect()->route("welcome");
    }
}
