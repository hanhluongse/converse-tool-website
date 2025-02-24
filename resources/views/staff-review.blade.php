@extends('layouts.app')

@section('content')
    @php
        $showSteps = true;
        $currentStep = 7; 
    @endphp

    <div class="container mx-auto px-4 py-8">
        <!-- Title -->
        <h2 class="text-lg font-bold">PHASE.7 スタッフ確認</h2>

         <!-- Customer Contact Information -->
        <h3 class="text-center font-semibold mt-6">お客様ご連絡先情報</h3>
        <div class="grid grid-cols-2 gap-6 mt-4">
            <div>
                <div>
                    <label class="block text-lg">ご氏名（必須）</label>
                    <input type="text" class="w-full text-lg border rounded p-2">
                </div>
                <div>
                    <label class="block" text-lg>お電話番号</label>
                    <input type="text" class="w-full text-lg border rounded p-2">
                </div>
                <div>
                    <label class="block text-lg">メールアドレス</label>
                    <input type="email" class="w-full text-lg border rounded p-2">
                </div>
            </div>
            <div>
                <label class="block">ご注文内容</label>
                <p class="text-lg">
                    注文ID：0001 <br>
                    スニーカー：ALL STAR ® HI <br>
                    Size：27.0 <br>
                    左アッパー：CVlogo <br>
                    右アッパー：Typography K <br>
                    左タン：Name Test <br>
                    右タン：None <br>
                    PRICE：¥10,250
                </p>
            </div>
            
        </div>

        <!-- Staff Memo Section -->
        <div class="bg-gray-100 p-6 mt-8 rounded-lg">
            <h3 class="text-center font-semibold">スタッフ記入欄</h3>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <div>
                        <label class="block">対応スタッフ</label>
                        <select class="w-full border rounded p-2">
                            <option>選択してください</option>
                            <option>スタッフ A</option>
                            <option>スタッフ B</option>
                        </select>
                    </div>
                    <div>
                        <label class="block">SIZE</label>
                        <select class="w-full border rounded p-2">
                            <option>S</option>
                            <option>M</option>
                            <option>L</option>
                        </select>
                    </div>
                </div>
                <div>
                    <label class="block">メモ</label>
                    <textarea class="w-full border rounded p-2 h-24"></textarea>
                </div>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="mt-6 flex justify-end">
            <a 
                :href="selectedShoe ? '{{ route('right-upper', '') }}/' : '#'"
                class="bg-black text-white px-6 py-2 text-sm rounded-full block text-center"
            >
            カスタマイズを保存
            </a>
        </div>
    </div>
@endsection