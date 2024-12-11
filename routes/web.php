<?php

use Illuminate\Support\Facades\Route;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('home');
});

// Route::get('/home', function () {
//     return view('home');
// });

Route::post('/contact/send', function (Illuminate\Http\Request $request) {
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string',
    ]);

    $details = [
        'name' => $request->name,
        'email' => $request->email,
        'message' => $request->message,
    ];

    Mail::to('mehedisarker379@gmail.com')->send(new ContactMail($details));

    return back()->with('success', 'Your message has been sent successfully!');
})->name('contact.send');

