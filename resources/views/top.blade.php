<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    @vite(['resources/css/app.css']) <!-- Ensure Tailwind is included -->
</head>

<body class="flex items-center justify-center bg-white-100">
    <div class="flex flex-col items-center justify-left mt-10">
        <img src="{{asset('images/WhiteAtelier.png') }}" alt="white-atelier" class="w-1/3 max-w-md rounded-lg mt-10">

        <img src="./images/Shoes.png" alt="shoes" class="w-5/6 rounded-lg mt-16">

        <p class="text-gray-600 w-9/12 text-3xl mt-28">WHITE ATELIERでは、真っ白なオールスターをあなた好みにカスタマイズすることができます。左右で違うデザインにしたり、アッパーとタンの組み合わせを変えたり、デザインのバリエーションは無限大。このアトリエで、世界にひとつ、あなただけのコンバースをデザインしてください</p>

        <a href="{{ route('sneaker-select') }}" class="w-[29%] h-20 bg-black text-white text-md text-center rounded-full flex items-center justify-center mt-16 inline-block">STANDARD EDITION</a>
        
        <a href="{{ route('sneaker-select') }}" class="w-[29%] h-20 bg-pink-700 text-white text-md text-center rounded-full flex items-center justify-center mt-16 inline-block">LIMITED EDITION</a>
        
        <img src="./images/Converse.png" alt="converse" class="w-1/5 max-w-md rounded-lg mt-16 mb-32">
    </div>
</body>
</html>