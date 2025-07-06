<section id="products" class="py-24 bg-gradient-to-br from-[#130724] via-[#1b0b34] to-[#2a0f47] text-white">
    <div class="max-w-7xl mx-auto px-4">
        <!-- Заголовок -->
        <h2 class="text-4xl font-extrabold text-center mb-16">Наши продукты</h2>

        <!-- Сетка карточек -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($products as $product)
                <div class="bg-white/5 border border-white/10 backdrop-blur-sm rounded-2xl p-6 shadow-xl transition hover:scale-[1.02] hover:shadow-2xl duration-300">
                    <h3 class="text-xl font-semibold text-white mb-2">{{ $product->name }}</h3>
                    <p class="text-gray-300 mb-4 leading-relaxed">{!! $product->description !!}</p>
                    <div class="text-2xl font-bold text-yellow-400 mb-6">{{ $product->price }}</div>

                    <a href="{{ $product->url }}"
                       class="block text-center bg-yellow-500 hover:bg-yellow-600 text-black font-semibold py-2 rounded-xl transition">
                        Выбрать
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>


