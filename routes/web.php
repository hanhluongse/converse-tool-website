<?php

use App\Models\Shoe;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('top');
})->name('top');

Route::get('/sneaker-select', function () {
    return view('sneaker-select');
})->name('sneaker-select');

Route::get('/left-upper', function () {
    return view('left-upper');
})->name('left-upper');

Route::get('/right-upper', function () {
    return view('right-upper');
})->name('right-upper');

Route::get('/left-tongue', function () {
    return view('left-tongue');
})->name('left-tongue');

Route::get('/right-tongue', function () {
    return view('right-tongue');
})->name('right-tongue');

Route::get('/design-review', function () {
    return view('design-review');
})->name('design-review');

Route::get('/staff-review', function () {
    return view('staff-review');
})->name('staff-review');

// Route::get('/shop', function () {
//     $shoes = Shoe::all();
//     return view('shop', compact('shoes'));
// })->name('shop');

// Route::get('/contact', function () {
//     return view('contact');
// })->name('contact');

// Route::post('/contact', function (Request $request) {
//     $request->validate([
//         'name' => 'required',
//         'email' => 'required|email',
//         'message' => 'required',
//     ]);

//     // Simulate sending an email (or integrate real email service)
//     Mail::raw("Message from: {$request->name}\n\n{$request->message}", function ($message) use ($request) {
//         $message->to('support@shoeshop.com')
//                 ->subject("Contact Form Message from {$request->name}");
//     });

//     return back()->with('success', 'Your message has been sent to ShoeShop. We will consider and feedback as soon as posible!');
// })->name('contact.submit');