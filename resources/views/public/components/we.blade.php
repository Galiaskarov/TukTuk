<section id="we" class="py-24 bg-gradient-to-br from-[#130724] via-[#1b0b34] to-[#2a0f47] text-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Заголовок секции -->
        <div class="text-center mb-16">
            <h2 class="text-4xl font-extrabold mb-4">О нашей компании</h2>
            <p class="text-lg text-gray-300 max-w-2xl mx-auto leading-relaxed">
                {!! $we->text_company !!}
            </p>
        </div>

        <!-- Контентная часть -->
        <div class="grid gap-14 md:grid-cols-2 items-center">

            <!-- Левая колонка — текст -->
            <div class="space-y-8">
                <div>
                    <h3 class="text-2xl font-semibold mb-2">Кто мы?</h3>
                    <p class="text-gray-300 leading-relaxed">
                        {!! $we->text_team !!}
                    </p>
                </div>

                <div>
                    <h3 class="text-2xl font-semibold mb-2">Контактные данные</h3>
                    <div class="text-gray-400 text-base space-y-1 leading-relaxed">
                        {!! $we->text_contact !!}
                    </div>
                </div>
            </div>

            <!-- Правая колонка — изображение -->
            <div class="flex justify-center">
                <div class="overflow-hidden rounded-2xl shadow-2xl border border-white/10 bg-white/5 backdrop-blur-sm p-2">
                    <img src="{{ asset('storage/' . $we->image) }}"
                         alt="About us illustration"
                         class="rounded-xl w-full max-w-sm object-cover" />
                </div>
            </div>

        </div>
    </div>
</section>




