@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto bg-white p-6 shadow-md rounded-lg mt-10">
    <h2 class="text-2xl font-bold mb-4 text-center">Contact Us</h2>
    <form action="{{ route('contact.submit') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 font-semibold">Name</label>
            <input type="text" name="name" class="w-full p-2 border rounded" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-semibold">Email</label>
            <input type="email" name="email" class="w-full p-2 border rounded" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-semibold">Message</label>
            <textarea name="message" class="w-full p-2 border rounded" rows="4" required></textarea>
        </div>
        <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded">Send Message</button>
    </form>
</div>
@endsection

@if(session('success'))
    <div class="bg-green-200 text-green-800 p-3 mb-4 rounded">
        {{ session('success') }}
    </div>
@endif