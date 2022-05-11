<?php

namespace App\Http\Controllers;

use App\Models\UserImage;
use Illuminate\Http\Request;

class imageupload extends Controller
{
    public function index(){
        return view('pic');
    }
    public function store(Request $request){
        $this->validate($request, [
            'image' => 'required|image|mimes:png|max:2048',
        ]);
        $imageName = rand(100000, 999999) . '.' . $request->image->extension();
        $request->image->move(public_path('userImages'), $imageName);


        $userImage = new UserImage();
        $userImage->image = $imageName;
        $userImage->save();

        return back()->with('status', 'Added successfully!');
    }
}
