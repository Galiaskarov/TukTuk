<footer class="bg-gradient-to-br from-[#130724] via-[#1b0b34] to-[#2a0f47] text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">

            <!-- Логотип + описание -->
            <div>
                <a href="/" class="flex items-center gap-2 mb-4">
                    <img src="{{ asset('storage/' . $logo->logo_image) }}" class="h-8" alt="Logo">
                    <span class="text-xl font-bold text-white">{{ $logo->logo_text }}</span>
                </a>
                <p class="text-gray-400 text-sm leading-relaxed">
                    {!! $footer->description ?? 'Краткое описание вашей компании или проекта.' !!}
                </p>
            </div>

            <!-- Быстрые ссылки -->
            <div>
                <h4 class="text-lg font-semibold mb-4 text-white">Навигация</h4>
                <ul class="space-y-2 text-gray-400 text-sm">
                    @foreach($menu as $item)
                        <li>
                            <a href="{{ $item->url }}" class="hover:text-white transition">
                                {{ $item->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- Контакты -->
            <div>
                <h4 class="text-lg font-semibold mb-4 text-white">Контакты</h4>
                <div class="space-y-2 text-gray-400 text-sm leading-relaxed">
                    {!! $we->text_contact ?? 'Контактные данные здесь' !!}
                </div>
            </div>
        </div>

        <!-- Нижняя часть -->
        <div class="mt-12 border-t border-white/10 pt-6 text-sm text-gray-500 text-center">
            © {{ now()->year }} {{ $logo->logo_text }}. Все права защищены.
        </div>
    </div>
</footer>
