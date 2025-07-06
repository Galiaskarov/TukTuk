<section id="hero" class="pt-32 pb-24 bg-gradient-to-br from-[#130724] via-[#1b0b34] to-[#2a0f47] text-white">
    <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

        <!-- Текстовая часть -->
        <div>
            <h1 class="text-4xl md:text-5xl font-extrabold mb-3 leading-tight">
                {!! $hero->title !!}
            </h1>
            <p class="text-lg text-gray-300 mb-1 leading-relaxed">
                {!! $hero->text !!}
            </p>
            <a href="{{ $hero->button_url }}"
               class=" mt-4 inline-block bg-gradient-to-r from-pink-500 to-purple-600 hover:from-pink-600 hover:to-purple-700 text-white font-semibold px-6 py-1 rounded-md transition">
                {{ $hero->button_title }}
            </a>
        </div>

        <!-- Картинка -->
        <div class="relative">
            <img src="{{ asset('storage/' . $hero->image_url) }}" alt="О проекте"
                 class="w-full rounded-2xl shadow-2xl object-cover" />
        </div>
    </div>
</section>



