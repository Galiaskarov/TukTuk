<!-- Alpine.js -->
<script src="//unpkg.com/alpinejs" defer></script>

<nav x-data="{ open: false }"
     class="fixed top-0 left-0 w-full z-50 bg-gradient-to-r from-[#3C0B3F] via-[#1b0b34] to-[#521056] text-white">
    <div class="max-w-screen-xl mx-auto px-4 py-4 flex items-center justify-between">

        <!-- Логотип -->
        <a href="/" class="flex items-center gap-2">
            <img src="{{ asset('storage/' . $logo->logo_image) }}" alt="Logo" class="h-6">
            <span class="text-xl font-semibold">{{ $logo->logo_text }}</span>
        </a>

        <!-- Десктоп-меню -->
        <div class="hidden md:flex items-center space-x-8">
            @foreach ($menu as $item)
                @if (!empty($item->is_button) && $item->is_button === true)
                    <!-- Кнопка -->
                    <a href="{{ $item->url }}"
                       class="px-4 py-1 rounded-md font-medium text-white bg-gradient-to-r from-pink-500 to-purple-600 hover:from-pink-600 hover:to-purple-700 transition">
                        {{ $item->name }}
                    </a>
                @else
                    <a href="{{ $item->url }}"
                       class="text-white hover:text-pink-400 font-medium transition">
                        {{ $item->name }}
                    </a>
                @endif
            @endforeach
        </div>

        <!-- Мобильное меню: бургер -->
        <div class="md:hidden">
            <button @click="open = !open" class="focus:outline-none">
                <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                <svg x-show="open" x-cloak class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </div>

    <!-- Мобильное меню -->
    <div x-show="open" x-cloak x-transition
         class="md:hidden bg-[#1b0b34] px-4 pb-6">
        <ul class="space-y-4 mt-4">
            @foreach ($menu as $item)
                <li>
                    @if (!empty($item->is_button) && $item->is_button === true)
                        <a href="{{ $item->url }}"
                           class="block w-full text-center px-4 py-2 rounded-md text-white bg-gradient-to-r from-pink-500 to-purple-600 hover:from-pink-600 hover:to-purple-700 font-medium">
                            {{ $item->name }}
                        </a>
                    @else
                        <a href="{{ $item->url }}"
                           class="block text-white hover:text-pink-400 font-medium transition">
                            {{ $item->name }}
                        </a>
                    @endif
                </li>
            @endforeach
        </ul>
    </div>
</nav>




