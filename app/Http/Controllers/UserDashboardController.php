<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function index(){

        return view('dashboard.index');
    }
    public function referral(){
        return view('dashboard.referral');
    }
    public function update(Request $request){
        $this->validate($request, [
            'username' => 'required|min:5|max:15|unique:users',
            'firstname' => 'required|max:50',
            'lastname' => 'required|max:50',
            'mobile' => 'required|max:50',
            'address' => 'required|max:50',
            'city' => 'required|max:50',
            'country' => 'required|max:50',
            'postcode' => 'max:50',
            'dob' => 'max:50'
        ]);
        $firstname = $request->firstname;
        $lastname = $request->lastname;
        $mobile = $request->mobile;
        $address = $request->address;
        $city = $request->city;
        $country = $request->country;
        $postcode = $request->postcode;
        $dob = $request->dob;
        $id = auth()->user()->id;
        $user = User::find($id);

        $user->firstname = $firstname;
        $user->lastname = $lastname;
        $user->mobile = $mobile;
        $user->address = $address;
        $user->city = $city;
        $user->country = $country;
        $user->postcode = $postcode;
        $user->dob = $dob;

        $user->save();
        return back()->with('userUpdated', 'Successfully Updated!');
    }
    public function update_info(){
        return view('dashboard.update-info');
    }
    public function updateAvatar(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $id = auth()->user()->id;

        $user = User::find($id);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('userImages'), $imageName);

        $user->avatar = $imageName;

        $user->save();
        return back()->with('image_updated', 'Image successfully updated!');
    }
    public function updateEmail(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|max:50|unique:users',
        ]);

        $id = auth()->user()->id;
        $email = $request->email;

        $user = User::find($id);
        $user->email = $email;

        $user->save();
        return back()->with('status_email', 'Email successfully updated!');
    }
    public function download(){
        return view('dashboard.download');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
