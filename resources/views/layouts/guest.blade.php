<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header class="{{ Request::is('/') ? '' : 'shadow-md border-gray-100' }}">
        <div class="flex items-center justify-between container mx-auto">
            <div class="flex items-center gap-x-8">
                <a class="py-4" href="/">
                    <img class="w-56" src="{{ asset('img/logo.png') }}" alt="logo" />
                </a>
                <nav class="space-x-8 text-base font-medium text-gray-500">
                    <a class="border-b-2 py-[18px] border-transparent hover:text-gray-700 hover:border-gray-300 {{ Request::is('courses') ? 'text-gray-700 border-purple-400' : '' }}"
                        href="/courses">Courses
                    </a>
                    <a class="border-b-2 py-[18px] border-transparent hover:text-gray-700 hover:border-gray-300 focus:text-gray-700 focus:border-purple-400"
                        href="/courses">Books
                    </a>
                </nav>
            </div>

            <!-- Login Signup Area -->
            <div class="space-x-4">
                @auth
                <span class="text-base text-gray-500 font-medium">Welcome: {{ auth()->user()->name }}</span>
                @if (auth()->user()->is_admin)
                <a href="{{ route('dashboard') }}"
                    class="text-white bg-black py-2 px-4 rounded font-medium hover:bg-red-500">Dashboard</a>
                @endif
                <form class="inline-block" method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="font-medium text-[#ff5f53]" type="submit">Logout</button>
                </form>
                @else
                <a href="{{ route('login') }}" class="text-base text-gray-500 font-medium hover:text-gray-700">Sign
                    in</a>
                <a href="{{ route('register') }}"
                    class="text-white bg-black py-2 px-4 rounded font-medium hover:bg-red-500">
                    Sign up
                </a>
                @endauth
            </div>
        </div>
    </header>

    {{ $slot }}

    <footer class="bg-[#2c383f] pt-14 relative">
        <div class="container">
            <div class="grid grid-cols-5 font-medium pb-10">
                <!-- Course by series -->
                <div>
                    <h3 class="text-xl mb-4 text-white">Course by Series</h3>
                    <ul class="space-y-2">
                        <li>
                            <a class="footer-link" href="{{ route('archive', ['series', 'laravel']) }}">Laravel</a>
                        </li>
                        <li>
                            <a class="footer-link" href="{{ route('archive', ['series', 'php']) }}">PHP</a>
                        </li>
                        <li>
                            <a class="footer-link" href="{{ route('archive', ['series', 'livewire']) }}">Livewire</a>
                        </li>
                        <li>
                            <a class="footer-link" href="{{ route('archive', ['series', 'vuejs']) }}">Vue.js</a>
                        </li>
                    </ul>
                </div>

                <!-- Course by duration -->
                <div>
                    <h3 class="text-xl mb-4 text-white">Course by Duration</h3>
                    <ul class="space-y-2">
                        <li>
                            <a class="footer-link" href="{{ route('archive', ['duration', '1h-5h']) }}">1-5 hours</a>
                        </li>
                        <li>
                            <a class="footer-link" href="{{ route('archive', ['duration', '5h-10h']) }}">5-10 hours</a>
                        </li>
                        <li>
                            <a class="footer-link" href="{{ route('archive', ['duration', '10h+']) }}">10+ hours</a>
                        </li>
                    </ul>
                </div>

                <!-- Course by level -->
                <div>
                    <h3 class="text-xl mb-4 text-white">Course by Level</h3>
                    <ul class="space-y-2">
                        <li>
                            <a class="footer-link" href="{{ route('archive', ['level', 'beginner']) }}">Beginner</a>
                        </li>
                        <li>
                            <a class="footer-link"
                                href="{{ route('archive', ['level', 'intermediate']) }}">Intermediate</a>
                        </li>
                        <li>
                            <a class="footer-link" href="{{ route('archive', ['level', 'advanced']) }}">Advanced</a>
                        </li>
                    </ul>
                </div>

                <!-- Course by Platform -->
                <div>
                    <h3 class="text-xl mb-4 text-white">Course by Platform</h3>
                    <ul class="space-y-2">
                        <li>
                            <a class="footer-link"
                                href="{{ route('archive', ['platform', 'laracasts']) }}">Laracasts</a>
                        </li>
                        <li>
                            <a class="footer-link" href="{{ route('archive', ['platform', 'laravel-daily']) }}">Laravel
                                Daily</a>
                        </li>
                        <li>
                            <a class="footer-link"
                                href="{{ route('archive', ['platform', 'codecourse']) }}">Codecourse</a>
                        </li>
                        <li>
                            <a class="footer-link" href="{{ route('archive', ['platform', 'udemy']) }}">Udemy</a>
                        </li>
                    </ul>
                </div>

                <!-- Course by Topics -->
                <div>
                    <h3 class="text-xl mb-4 text-white">Course by Topics</h3>
                    <ul class="space-y-2">
                        <li>
                            <a class="footer-link" href="{{ route('archive', ['topic', 'eloquent']) }}">Eloquent</a>
                        </li>
                        <li>
                            <a class="footer-link" href="{{ route('archive', ['topic', 'validation']) }}">Validation</a>
                        </li>
                        <li>
                            <a class="footer-link"
                                href="{{ route('archive', ['topic', 'refactoring']) }}">Refactoring</a>
                        </li>
                        <li>
                            <a class="footer-link" href="{{ route('archive', ['topic', 'testing']) }}">Testing</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="pb-9 flex items-center justify-between">
                <ul>
                    <li>
                        <a href="https://twitter.com/dvlprJobayer" target="_blank">
                            <svg class="hover:filter hover:brightness-200" xmlns="http://www.w3.org/2000/svg" width="15"
                                height="12" fill="none">
                                <path fill="#898F92"
                                    d="M15 1.412a6.217 6.217 0 0 1-1.764.487 3.043 3.043 0 0 0 1.348-1.68c-.595.353-1.255.6-1.95.741C12.067.353 11.27 0 10.368 0 8.683 0 7.306 1.355 7.306 3.028c0 .24.03.473.08.692A8.79 8.79 0 0 1 1.045.558a2.96 2.96 0 0 0-.415 1.517c0 1.052.538 1.984 1.37 2.513a3.08 3.08 0 0 1-1.399-.353v.021c0 1.469 1.061 2.697 2.467 2.972a3.072 3.072 0 0 1-1.384.05 3.023 3.023 0 0 0 1.09 1.505 3.1 3.1 0 0 0 1.778.598A6.171 6.171 0 0 1 .731 10.68c-.243 0-.487-.014-.731-.042A8.808 8.808 0 0 0 4.718 12c5.65 0 8.755-4.616 8.755-8.619 0-.134 0-.261-.007-.395A6.094 6.094 0 0 0 15 1.412Z">
                                </path>
                            </svg>
                        </a>
                    </li>
                </ul>
                <p class="text-[#898F92] text-sm font-medium">
                    Developed by
                    <a class="font-bold hover:underline" href="https://github.com/dvlprJobayer" target="_blank">Jobayer
                        Ahammed Patwary ⚡️</a>
                </p>
                <span></span>
            </div>
        </div>
        <img class="absolute right-0 bottom-0" src="{{ asset('img/footer.png') }}" alt="Footer Image" />
    </footer>
</body>

</html>