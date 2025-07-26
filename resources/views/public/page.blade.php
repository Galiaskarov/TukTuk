@extends('layouts.page')

@section('content')

    <div class="relative w-full max-w-6xl mx-auto bg-white/5 backdrop-blur-md rounded-2xl shadow-2xl px-20 pt-16 pb-12 text-white">

        <!-- Кнопка Назад -->
        <a href="#" class="absolute top-4 left-4 flex items-center text-sm text-purple-300 hover:text-white transition duration-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-5-5a1 1 0 010-1.414l5-5a1 1 0 111.414 1.414L4.414 9H17a1 1 0 110 2H4.414l3.293 3.293a1 1 0 010 1.414z" clip-rule="evenodd" />
            </svg>
            Назад
        </a>

        <!-- Заголовок -->
        <h2 class="text-3xl font-bold text-center mb-8">Регистрация</h2>

        <!-- Форма -->
        <form class="space-y-6">
            <div>
                <label class="block mb-1 text-sm">Логин</label>
                <input type="text" placeholder="Введите логин" class="w-full px-4 py-2 bg-white/10 text-white rounded-lg border border-purple-400 focus:outline-none focus:ring-2 focus:ring-purple-500" />
            </div>

            <div>
                <label class="block mb-1 text-sm">Почта</label>
                <input type="email" placeholder="Введите почту" class="w-full px-4 py-2 bg-white/10 text-white rounded-lg border border-purple-400 focus:outline-none focus:ring-2 focus:ring-purple-500" />
            </div>

            <div>
                <label class="block mb-1 text-sm">Пароль</label>
                <input type="password" placeholder="Введите пароль" class="w-full px-4 py-2 bg-white/10 text-white rounded-lg border border-purple-400 focus:outline-none focus:ring-2 focus:ring-purple-500" />
            </div>

            <div>
                <label class="block mb-1 text-sm">Подтвердите пароль</label>
                <input type="password" placeholder="Повторите пароль" class="w-full px-4 py-2 bg-white/10 text-white rounded-lg border border-purple-400 focus:outline-none focus:ring-2 focus:ring-purple-500" />
            </div>

            <button type="submit" class="w-full py-3 mt-4 bg-gradient-to-r from-pink-500 to-purple-600 hover:from-pink-600 hover:to-purple-700 text-white font-semibold rounded-xl shadow-md transition duration-300">
                Зарегистрироваться
            </button>
        </form>

        <p class="text-center text-sm text-gray-300 mt-6">
            Уже есть аккаунт?
            <a href="#" class="text-pink-400 hover:underline">Войти</a>
        </p>
    </div>

@endsection

