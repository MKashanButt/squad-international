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

    public function render_review_page()
    {
        $data = Review::paginate(8);
        return view('reviews', [
            'data' => $data,
        ]);
    }

    public function store_reviews(Request $request)
    {
        $review = new Review;
        $review->client_name = $request->input('name');
        $review->email = $request->input('email');
        $review->review = $request->input('review');

        $review->save();

        return redirect()->back();
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
