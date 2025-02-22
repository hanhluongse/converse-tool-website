@extends('layouts.app')

@section('content')
<h2 class="text-2xl font-bold mb-4">Shop Shoes</h2>
<div class="grid grid-cols-3 gap-4">
    @foreach ($shoes as $shoe)
        <div class="bg-white shadow-md p-4 rounded">
            <img src="{{ $shoe->image }}" alt="{{ $shoe->name }}" class="w-full h-40 object-cover rounded">
            <h3 class="text-lg font-semibold mt-2">{{ $shoe->name }}</h3>
            <p class="text-gray-600">${{ $shoe->price }}</p>
            <button class="bg-blue-500 text-white px-4 py-2 mt-2 rounded">Buy Now</button>
        </div>
    @endforeach
</div>
@endsection