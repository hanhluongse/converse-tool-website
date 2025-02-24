@extends('layouts.app')

@section('content')
    @php
        $showSteps = true;
        $currentStep = 6; 
    @endphp

    <div class="container mx-auto px-4 py-8">
        <!-- PHASE HEADER -->
        <div class="flex justify-between items-cemter mb-4">
            <!-- Left: Phase and Shoe -->
            <h2 class="font-bold text-lg">PHASE.6 デザインの確認</h2>

            <!-- Right: Price -->
            <p class="font-bold">PRICE: <span class="text-xl">￥10,250</span></p>
        </div>

        <div class="flex items-center space-x-4 mb-4">
            <img src="/images/shoes/画像 3.png" alt="Shoe Thumbnail" class="w-20 h-20">
            <h1 class="text-lg font-bold tracking-wide">ALL STAR ® HI</h1>
        </div>

        <!-- Shoe Design Preview -->
        <div class="grid grid-cols-2 gap-12">
            <!-- Left Shoe -->
            <div class="text-center">
                <div class="border p-2 bg-[#FAFAFA] flex items-center justify-center" >
                    <img src="{{ asset('images/progress/画像 61.png') }}" alt="左足アップ" class="w-40 h-40 object-contain">
                </div>
                <p class="mt-2 text-lg">左足アッパー</p>
            </div>
            
            <!-- Right Shoe -->
            <div class="text-center">
                <div class="border p-2 bg-[#FAFAFA] flex items-center justify-center" >
                    <img src="{{ asset('images/progress/画像 9.png') }}" alt="右足アップ" class="w-40 h-40 object-contain">
                </div>
                <p class="mt-2 text-lg">右足アッパー</p>
            </div>

            <!-- Left Tongue -->
            <div class="text-center">
                <div class="border p-2 bg-[#FAFAFA] flex items-center justify-center" >
                    <img src="{{ asset('images/progress/画像 10.png') }}" alt="左足タン" class="w-40 h-40 object-contain">
                </div>
                <p class="mt-2 text-lg">左足タン</p>
            </div>

            <!-- Right Tongue -->
            <div class="text-center">
                <div class="border p-2 bg-[#FAFAFA] flex items-center justify-center" >
                    <img src="{{ asset('images/progress/画像 11.png') }}" alt="右足タン" class="w-40 h-40 object-contain">
                </div>
                <p class="mt-2 text-lg">右足タン</p>
            </div>
        </div>

        <!-- Next Button -->
        <div class="mt-6 flex justify-end">
            <a 
                :href="selectedShoe ? '{{ route('staff-review', '') }}/' : '#'"
                class="bg-black text-white px-6 py-2 text-sm rounded-full block text-center"
            >
                NEXT
            </a>
        </div>
    </div>
@endsection