<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Profile;
use App\User;
use Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;


class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

 
    public function index(Request $request)
    {
       
    }

   
    public function create()
    {
        
    }

  
    public function store(Request $request)
    {
        
    }

   
    public function show(Profile $profile)
    {
        
    }

  
    public function edit(Profile $profile)
    {
        $profile = User::findOrFail(Auth::id())->profile;
        return view('dashboard.user_profile', [
            'profile' => $profile
        ]);
    }

   
    public function update(Request $request, Profile $profile)
    {
       
        $request->validate([
            'website_url' => ['required', 'url']
        ]);

        // if(request()->file('logo')):
        //     if(Storage::exists($profile->logo))
        //         Storage::delete($profile->logo);
        //     $profile->logo = request()->file('logo')->store('public/images');
        // endif; 
        
        $profile->website_url = request('website_url');
        $profile->update();

        return back()->with([ 
            'message' => 'Updated successfully.', 
            'alert-type' => 'success'
        ]);
    }

   
    public function destroy(Profile $profile)
    {
        
    }

}
