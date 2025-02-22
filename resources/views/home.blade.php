@extends('layouts.app')

@section('content')
<div class="text-center mt-10">
    <h1 class="text-3xl font-bold">Welcome to Shoe Shop</h1>
    <p class="text-gray-600 mt-2">Find the best shoes at affordable prices.</p>
    <a href="{{ route('shop') }}" class="bg-blue-500 text-white px-4 py-2 rounded mt-4 inline-block">Shop Now</a>
</div>
@endsection