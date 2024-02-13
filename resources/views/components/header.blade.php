<header class="border-b border-white border-opacity-25">
    <div class="container py-5 flex flex-wrap items-center justify-between gap-7 ">
        <a class="text-2xl text-white">Logo</a>
        <ul class="flex items-center gap-14 text-base">
            <li><a href="{{ route('index.index') }}" class="h-5 hover:border-b border-white pb-2 transition ease-in-out delay-300">Главная</a></li>
            <li><a href="{{ route('index.catalog') }}" class="h-5 hover:border-b border-white pb-2 transition">Каталог</a></li>
            <li><a href="" class="h-5 hover:border-b border-white pb-2 transition">О нас</a></li>
        </ul>
        <div class="flex flex-wrap items-center gap-7">
            <a href="" class="button">Войти</a>
            <a href="" class="button-fill">Регистрация</a>
        </div>
    </div>
</header>