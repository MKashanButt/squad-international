<?php

namespace App\Http\Controllers;

use App\Models\FormSubmission;
use Illuminate\Http\Request;

class FormController extends Controller
{
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
