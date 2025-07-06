<section id="advantages" class="py-20 bg-gradient-to-br from-[#130724] via-[#1b0b34] to-[#2a0f47] text-white">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-extrabold mb-14">Наши преимущества</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($advantages as $item)
                <div class="bg-white/5 backdrop-blur-sm border border-white/10 p-6 rounded-2xl shadow-xl transition hover:shadow-2xl hover:scale-[1.02] duration-300">
                    <h3 class="text-lg font-semibold text-white mb-2">{{ $item->title }}</h3>
                    <p class="text-gray-300 leading-relaxed">{!! $item->text !!}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>


