<?php

namespace App\Http\Controllers;

use App\Models\FormSubmission;
use App\Models\Review;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function reviews()
    {
        $data = Review::all();
        return view('home', [
            'data' => $data,
        ]);
    }

    public function store_reviews(Request $request)
    {
        // $
    }

    public function store(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');

        $FormSubmission = new FormSubmission();

        $FormSubmission->name = $name;
        $FormSubmission->email = $email;
        $FormSubmission->message = $message;

        if ($FormSubmission->save()) {
            return redirect()->back()->with('message', 'Form Submitted');
        }
        return back()->withErrors($FormSubmission->getErrors())->withInput();
    }
}
