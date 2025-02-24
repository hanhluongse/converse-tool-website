@extends('layouts.app')

@section('content')
    @php
        $showSteps = true;
        $currentStep = 2; 

        $stickers = [
            'STANDARD' => [
                ['id' => 1, 'name' => 'none', 'image' => '/stickers/standard/グループ 57.png', 'selected' => true],
                ['id' => 2, 'name' => 'image-13', 'image' => '/stickers/standard/画像 13.png'],
                ['id' => 3, 'name' => 'image-14', 'image' => '/stickers/standard/画像 14.png'],
                ['id' => 4, 'name' => 'image-15', 'image' => '/stickers/standard/画像 15.png'],
                ['id' => 5, 'name' => 'image-16', 'image' => '/stickers/standard/画像 16.png'],
                ['id' => 6, 'name' => 'image-17', 'image' => '/stickers/standard/画像 17.png'],
                ['id' => 7, 'name' => 'image-18', 'image' => '/stickers/standard/画像 18.png'],
                ['id' => 8, 'name' => 'image-19', 'image' => '/stickers/standard/画像 19.png'],
                ['id' => 9, 'name' => 'image-20', 'image' => '/stickers/standard/画像 20.png'],
                ['id' => 10, 'name' => 'image-21', 'image' => '/stickers/standard/画像 21.png'],
                ['id' => 11, 'name' => 'image-22', 'image' => '/stickers/standard/画像 22.png'],
                ['id' => 12, 'name' => 'image-23', 'image' => '/stickers/standard/画像 23.png'],
                ['id' => 13, 'name' => 'image-24', 'image' => '/stickers/standard/画像 24.png'],
                ['id' => 14, 'name' => 'image-28', 'image' => '/stickers/standard/画像 28.png'],
                ['id' => 15, 'name' => 'image-25', 'image' => '/stickers/standard/画像 25.png'],
                ['id' => 16, 'name' => 'image-29', 'image' => '/stickers/standard/画像 29.png'],
                ['id' => 17, 'name' => 'image-26', 'image' => '/stickers/standard/画像 26.png'],
                ['id' => 18, 'name' => 'image-30', 'image' => '/stickers/standard/画像 30.png'],
                ['id' => 19, 'name' => 'image-31', 'image' => '/stickers/standard/画像 31.png'],
                ['id' => 20, 'name' => 'image-32', 'image' => '/stickers/standard/画像 32.png'],
                ['id' => 21, 'name' => 'image-33', 'image' => '/stickers/standard/画像 33.png'],
                ['id' => 22, 'name' => 'image-34', 'image' => '/stickers/standard/画像 34.png'],
                ['id' => 23, 'name' => 'image-35', 'image' => '/stickers/standard/画像 35.png'],
                ['id' => 24, 'name' => 'image-36', 'image' => '/stickers/standard/画像 36.png'] 
            ],
            'TYPOGRAPHY' => [
                ['id' => 1, 'name' => 'none', 'image' => '/stickers/typography/グループ 57.png', 'selected' => true],
                ['id' => 2, 'name' => 'image-65', 'image' => '/stickers/typography/画像 65.png'],
                ['id' => 3, 'name' => 'image-66', 'image' => '/stickers/typography/画像 66.png'],
                ['id' => 4, 'name' => 'image-67', 'image' => '/stickers/typography/画像 67.png'],
                ['id' => 5, 'name' => 'image-68', 'image' => '/stickers/typography/画像 68.png'],
                ['id' => 6, 'name' => 'image-69', 'image' => '/stickers/typography/画像 69.png']
            ]
        ];
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
            @foreach(["STANDARD", "TYPOGRAPHY", "NAME", "STICKER"] as $tab)
                <button class="px-4 py-2 border rounded-full tab-button" data-tab="{{$tab}}"
                    :class="selectedTab === '{{$tab}}' ? 'bg-black text-white' : 'bg-white text-black'"
                    @click="selectedTab = '{{$tab}}', selectedSticker = null"
                    onclick="changeTab('{{ $tab }}')">
                    {{ $tab }}
                </button>
            @endforeach
        </div>

        <!-- STICKER SELECTION -->
        <div class="mt-6 grid grid-cols-8 gap-4" x-show="selectedTab === 'STANDARD' || selectedTab === 'TYPOGRAPHY'" id="stickerContainer">
            @foreach ($stickers as $tab => $list)
                @foreach ($list as $sticker)
                    <div class="border p-2 text-center cursor-pointer sticker-item" data-tab="{{ $tab }}"
                        :class="{ 'border-black': selectedSticker === @json($sticker['id']), 'border-gray-300': selectedSticker !== @json($sticker['id']) }"
                        @click="selectedSticker = @json($sticker['id'])"
                        >
                            <img src="{{ asset('images' . $sticker['image']) }}" alt="{{ $sticker['name'] }}" class="w-full">
                    </div>
                @endforeach
            @endforeach
        </div>

         <!-- Input Field (Visible only for TYPOGRAPHY tab) -->
        <div class="w-1/4 mt-4" x-show="selectedTab === 'TYPOGRAPHY'">
            <label class="block text-gray-700 text-lg font-bold mb-2">テキストを入力(英数字1文字)</label>
            <input type="text" 
                class="border rounded w-full p-2 text-lg" 
                maxlength="1"
                x-model="textTypography"
                @input="$event.target.value = $event.target.value.replace(/[^a-zA-Z0-9]/g, '').slice(0,1)">
        </div>

        <!-- NAME SECTION -->
        <div x-show="selectedTab === 'NAME'">
            <!-- Font Selection -->
            <div class="mb-4" >
                <p class="font-bold mb-2 text-lg">フォントを選ぶ</p>
                <div class="flex space-x-2">
                    @foreach(['NONE', 'White Atelier', 'ホワイトアトリエ', 'Script Font'] as $font)
                        <div class="border p-2 cursor-pointer"
                            :class="selectedFont === '{{ $font }}' ? 'border-black' : 'border-gray-300'"
                            @click="selectedFont = '{{ $font }}'">
                            {{ $font }}
                        </div>
                    @endforeach
                </div>
            </div>

            <hr/>

            <!-- Font Color Selection -->
            <div class="mb-4">
                <p class="font-bold mb-2 text-lg">フォントカラーを選ぶ</p>
                <div class="flex space-x-2">
                    @foreach(['#000000', '#8A9B89', '#003366', '#B22222', '#FFC72C', '#004B2D', '#C71585'] as $color)
                        <div class="w-20 h-20 border cursor-pointer"
                            :style="'background-color: {{ $color }}'"
                            :class="selectedColor === '{{ $color }}' ? 'border-black' : 'border-gray-300'"
                            @click="selectedColor = '{{ $color }}'">
                        </div>
                    @endforeach
                </div>
            </div>

            <hr/>

            <div class="mt-6 grid grid-cols-3 gap-4">
                <!-- Font Size Selection -->
                <div class="mb-4">
                    <p class="font-bold mr-4 text-lg">文字サイズ</p>
                    <div class="flex space-x-2">
                        @foreach(['S', 'M', 'L'] as $size)
                            <div class="w-20 h-20 border p-2 cursor-pointer text-lg flex items-center text-center"
                                :class="selectedSize === '{{ $size }}' ? 'border-black' : 'border-gray-300'"
                                @click="selectedSize = '{{ $size }}'">
                                <span class='w-full'>{{ $size }}</span>
                                
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Text Input -->
                <div class="mb-4">
                    <label class="block font-bold mb-2 text-lg">テキストを入力(英数字6文字まで)</label>
                    <input type="text" 
                        class="border p-2 w-40 text-lg"
                        maxlength="6"
                        x-model="textInput"
                        @input="$event.target.value = $event.target.value.replace(/[^a-zA-Z0-9]/g, '').slice(0,6)">
                    <p class="mt-2 font-bold text-lg" x-text="textInput"></p>
                </div>
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

    <script>
        function changeTab(tab) {
            document.querySelectorAll(".sticker-item").forEach(item => {
                item.style.display = item.dataset.tab === tab ? "block" : "none";
            });
        }
    </script>
@endsection