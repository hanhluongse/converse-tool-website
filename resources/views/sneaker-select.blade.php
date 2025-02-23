@extends('layouts.app')

@section('content')
    @php
        $showSteps = true;
        $currentStep = 1; 
    @endphp

    <div class="container mx-auto px-4 py-8">
        <!-- Title -->
        <h2 class="text-lg font-bold">PHASE.1 ご希望のスニーカーを選んでください。</h2>

        <!-- Shoe Selection Grid -->
        <div class="grid grid-cols-2 gap-6 mt-6">
            @php
                $shoes = [
                    ['id' => 1, 'name' => 'ALL STAR ⽞ HI', 'price' => '¥8,250〜', 'image' => '/shoes/画像 3.png', 'selected' => true],
                    ['id' => 2, 'name' => 'ALL STAR ⽞ OX', 'price' => '¥8,250〜', 'image' => '/shoes/画像 4.png'],
                    ['id' => 3, 'name' => 'CHILD ALL STAR N V-1 HI / WA', 'price' => '¥4,950〜', 'image' => '/shoes/グループ 5.png'],
                    ['id' => 4, 'name' => 'BABY ALL STAR N V-1 / WA', 'price' => '¥4,730〜', 'image' => '/shoes/グループ 3.png'],
                ];
            @endphp

            
            @foreach ($shoes as $shoe)
            <div class="flex flex-col items-center">
                <!-- Clickable Image to Select Sneaker -->
                <div 
                    class="border p-2 cursor-pointer w-80 transition-all duration-300" 
                    :class="{ 'border-black': selectedShoe === @json($shoe['id']), 'border-transparent': selectedShoe !== @json($shoe['id']) }"
                    @click="selectedShoe = @json($shoe['id'])"
                >
                    <img src="{{ asset('images' . $shoe['image']) }}" alt="{{ $shoe['name'] }}" class="w-80 h-auto">
                </div>
                
                <!-- Name & Price in one line, aligned with image -->
                <div class="flex justify-between w-80 mt-2 text-sm">
                    <p class="whitespace-normal break-words w-[70%]">{{ $shoe['name'] }}</p>
                    <p class="text-gray-500 w-[30%] text-right">{{ $shoe['price'] }}</p>
                </div>
            </div>
            @endforeach
            
        </div>

        <!-- Next Button -->
        <div class="mt-6 flex justify-end">
            <a 
                :href="selectedShoe ? '{{ route('left-upper', '') }}/' : '#'"
                class="bg-black text-white px-6 py-2 text-sm rounded-full block text-center"
            >
                NEXT
            </a>
        </div>
    </div>
@endsection