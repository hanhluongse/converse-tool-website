<?php

use App\Models\Shoe;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/shop', function () {
    $shoes = Shoe::all();
    return view('shop', compact('shoes'));
})->name('shop');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', function (Request $request) {
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required',
    ]);

    // Simulate sending an email (or integrate real email service)
    Mail::raw("Message from: {$request->name}\n\n{$request->message}", function ($message) use ($request) {
        $message->to('support@shoeshop.com')
                ->subject("Contact Form Message from {$request->name}");
    });

    return back()->with('success', 'Your message has been sent to ShoeShop. We will consider and feedback as soon as posible!');
})->name('contact.submit');