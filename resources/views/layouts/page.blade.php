<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#9333ea',
                        secondary: '#ec4899',
                    }
                }
            }
        }
    </script>
</head>
<body class="min-h-screen flex items-center justify-center bg-gradient-to-br from-[#3C0B3F] via-[#1b0b34] to-[#521056] text-white px-4">

<div class="relative w-full max-w-xl bg-white/5 border border-white/20 rounded-2xl shadow-2xl px-16 py-12 text-white">

    <!-- Назад -->
    <div class="mb-6">
        <a href="#" class="flex items-center text-gray-200 hover:text-white transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
            Назад
        </a>
    </div>

    <!-- Заголовок -->
    <h1 class="text-3xl font-bold mb-8 text-center">Регистрация</h1>

    <!-- Форма -->
    <form class="space-y-6 max-w-xl mx-auto">
        <div>
            <label class="block mb-1 font-medium">Логин</label>
            <input type="text" placeholder="Введите логин"
                   class="w-full rounded-md bg-transparent border border-purple-300 focus:border-white focus:outline-none px-4 py-3 placeholder-gray-400" />
        </div>

        <div>
            <label class="block mb-1 font-medium">Почта</label>
            <input type="email" placeholder="Введите почту"
                   class="w-full rounded-md bg-transparent border border-purple-300 focus:border-white focus:outline-none px-4 py-3 placeholder-gray-400" />
        </div>

        <div>
            <label class="block mb-1 font-medium">Пароль</label>
            <input type="password" placeholder="Введите пароль"
                   class="w-full rounded-md bg-transparent border border-purple-300 focus:border-white focus:outline-none px-4 py-3 placeholder-gray-400" />
        </div>

        <div>
            <label class="block mb-1 font-medium">Подтвердите пароль</label>
            <input type="password" placeholder="Повторите пароль"
                   class="w-full rounded-md bg-transparent border border-purple-300 focus:border-white focus:outline-none px-4 py-3 placeholder-gray-400" />
        </div>

        <div class="pt-4">
            <button type="submit"
                    class="w-full py-3 font-semibold rounded-md bg-gradient-to-r from-pink-500 to-purple-600 hover:opacity-90 transition">
                Зарегистрироваться
            </button>
        </div>

        <p class="text-center text-sm text-gray-300 pt-4">
            Уже есть аккаунт?
            <a href="#" class="text-pink-400 hover:underline">Войти</a>
        </p>
    </form>
</div>

</body>
</html>


