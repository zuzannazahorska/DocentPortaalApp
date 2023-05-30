<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Location;
use App\Models\Teacher;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        $categories = Category::all();
        $locations = Location::all();

        return view('register', [
            'categories' => $categories,
            'locations' => $locations
        ]);
    }
    public function register(Request $request)
    {

        // Validate the request data
        // $request->validate([
        //     'lastname' => 'required',
        //     'firstname' => 'required',
        //     'email' => 'required|email',
        //     'phone' => 'required',
        //     'website' => 'nullable|url',
        //     'remarks' => 'nullable',
        //     'description' => 'nullable',
        //     'approved' => 'nullable',
        //     'category_id' => 'required|exists:categories,id',
        //     'location_id' => 'required|exists:locations,id',
        //     'streetnt' => 'required',
        //     'codecity' => 'required',
        // ]);
        // Create a new teacher using the Teacher model
        $teacher = new Teacher();
        $teacher->lastname = $request->lastname;
        $teacher->firstname = $request->firstname;
        $teacher->email = $request->email;
        $teacher->phone = $request->phone;
        $teacher->website = $request->website;
        $teacher->remarks = $request->remarks;
        $teacher->description = $request->description;
        $teacher->approved = 0;
        $teacher->category_id = $request->category_id;
        $teacher->location_id = $request->location_id;
        $teacher->streetnr = $request->streetnr;
        $teacher->codecity = $request->codecity;
        $teacher->save();
        // Redirect the user
        return redirect()->back()->with('success', 'Registration successful');
    }


}