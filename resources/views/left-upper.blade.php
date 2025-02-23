@extends('layouts.app')

@section('content')
    @php
        $showSteps = true;
        $currentStep = 2; 
    @endphp

    <div class="container mx-auto px-4 py-8">
        <!-- PHASE HEADER -->
        <div class="flex justify-between items-center mb-4">
            <h2 class="font-bold text-lg">PHASE.2 左足のアップデザイン</h2>
            <p class="font-bold">PRICE: <span class="text-xl">￥8,250</span></p>
        </div>

        <!-- SHOE PREVIEW -->
        <div class="flex justify-center w-full bg-cover bg-center" style="background-image: url('{{ asset('images/bg-shoe-preview.png') }}');">
            <img src="{{ asset('images/shoe-preview.png') }}" alt="Shoe Preview" class="w-1/2">
        </div>

        <!-- CUSTOMIZATION TABS -->
        <div class="flex justify-center space-x-4 mt-6">
            <button 
                class="px-4 py-2 border rounded-full"
                :class="selectedTab === 'STANDARD' ? 'bg-black text-white' : 'bg-white text-black'"
                @click="selectedTab = 'STANDARD'">
                STANDARD
            </button>
            <button 
                class="px-4 py-2 border rounded-full"
                :class="selectedTab === 'TYPOGRAPHY' ? 'bg-black text-white' : 'bg-white text-black'"
                @click="selectedTab = 'TYPOGRAPHY'">
                TYPOGRAPHY
            </button>
            <button 
                class="px-4 py-2 border rounded-full"
                :class="selectedTab === 'NAME' ? 'bg-black text-white' : 'bg-white text-black'"
                @click="selectedTab = 'NAME'">
                NAME
            </button>
            <button 
                class="px-4 py-2 border rounded-full"
                :class="selectedTab === 'STICKER' ? 'bg-black text-white' : 'bg-white text-black'"
                @click="selectedTab = 'STICKER'">
                STICKER
            </button>
        </div>

        <!-- STICKER SELECTION -->
        <div class="mt-6 grid grid-cols-8 gap-4">
            <div class="border p-2 text-center cursor-pointer"
                :class="selectedSticker === 'none' ? 'border-black' : 'border-gray-300'"
                @click="selectedSticker = 'none'">
                    <img src="{{ asset('images/standard-sticker/グループ 57.png') }}" class="w-full">
            </div>

            <div class="border p-2 text-center cursor-pointer"
                :class="selectedSticker === 'all-star' ? 'border-black' : 'border-gray-300'"
                @click="selectedSticker = 'all-star'">
                    <img src="{{ asset('images/standard-sticker/画像 20.png') }}" class="w-full">
            </div>

            <div class="border p-2 text-center cursor-pointer"
                :class="selectedSticker === 'converse' ? 'border-black' : 'border-gray-300'"
                @click="selectedSticker = 'converse'">
                    <img src="{{ asset('images/standard-sticker/画像 26.png') }}" class="w-full">
            </div>

            <div class="border p-2 text-center cursor-pointer"
                :class="selectedSticker === 'red-stars' ? 'border-black' : 'border-gray-300'"
                @click="selectedSticker = 'red-stars'">
                    <img src="{{ asset('images/standard-sticker/画像 35.png') }}" class="w-full">
            </div>
        </div>

        <!-- PROGRESS SECTION -->
        <h3 class="mt-6 text-sm font-bold">PROGRESS</h3>
        <div class="grid grid-cols-4 gap-4 mt-2">
            <div class="border p-2 bg-[#FAFAFA] flex items-center justify-center" >
                <img src="{{ asset('images/progress/画像 61.png') }}" class="w-full">
            </div>
            <div class="border p-2 bg-[#FAFAFA] flex items-center justify-center">
                <img src="{{ asset('images/progress/画像 9.png') }}" src="" class="w-full">
            </div>
            <div class="border p-2 bg-[#FAFAFA] flex items-center justify-center">
                <img src="{{ asset('images/progress/画像 10.png') }}" src="" class="w-full">
            </div>
            <div class="border p-2 bg-[#FAFAFA] flex items-center justify-center">
                <img src="{{ asset('images/progress/画像 11.png') }}" src="" class="w-full">
            </div>
        </div>

        <!-- Next Button -->
        <div class="mt-6 flex justify-end">
            <a 
                :href="selectedShoe ? '{{ route('right-upper', '') }}/' : '#'"
                class="bg-black text-white px-6 py-2 text-sm rounded-full block text-center"
            >
                NEXT
            </a>
        </div>
    </div>
@endsection