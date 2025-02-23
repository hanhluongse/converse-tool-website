<div class="flex items-center w-full">
    @php
        $steps = [
            ['name' => 'スニーカーを選択', 'url' => route('sneaker-select')],
            ['name' => '左足アッパー', 'url' => route('left-upper')],
            ['name' => '右足アッパー', 'url' => route('right-upper')],
            ['name' => '左足タン', 'url' => route('left-tongue')],
            ['name' => '右足タン', 'url' => route('right-tongue')],
            ['name' => 'デザイン確認', 'url' => route('design-review')],
            ['name' => 'スタッフ確認', 'url' => route('staff-review')],
        ];
        $currentStep = $currentStep ?? 1;
    @endphp

    @foreach($steps as $index => $step)
        <div class="w-[14.4%] relative flex items-center bg-gray-300">
            <!-- Step Button with Link -->
            <a href="{{ $step['url'] }}" class="relative 
                    w-full
                    h-16 px-8 py-4 text-white text-lg z-10
                    {{ $index == $currentStep - 1 ? 'bg-black' : 'bg-gray-300 text-gray-500' }}">
                {{ $step['name'] }}
            </a>

            <!-- Chevron with Border Effect -->
            @if($index < count($steps) - 1)
                <div class="relative h-16 z-3">
                    <!-- Outer Chevron (Border) -->
                    <div class="w-5 h-16 absolute bg-white clip-path-chevron z-0"></div>
                    <!-- Inner Chevron (Fills the Step) -->
                    <div class="w-5 h-16 ml-[-1px] clip-path-chevron 
                        {{ $index == $currentStep - 1 ? 'bg-black' : 'bg-gray-300' }}">
                    </div>
                </div>
                <!-- Background Chevron-->
                <div class="w-6 h-16 z-2 absolute right-0 {{ $index == $currentStep - 2 ? 'bg-black' : 'bg-gray-300' }}"></div>
            @endif
        </div>
    @endforeach
</div>

<!-- Tailwind Custom Styles for Chevron Effect -->
<style>
    .clip-path-chevron {
        clip-path: polygon(0 0, 100% 50%, 0 100%);
    }
</style>