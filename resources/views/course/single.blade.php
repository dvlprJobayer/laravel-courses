<x-guest-layout>
    <main class="bg-gray-100">
        <div class="container">
            <nav>
                <ul class="flex items-center py-6">
                    <li class="flex items-center">
                        <a class="font-medium text-gray-400 hover:text-gray-700" href="{{ route('home') }}">Home</a>
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-300" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                            <path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z"></path>
                        </svg>
                    </li>
                    <li class="flex items-center">
                        <a class="font-medium text-gray-400 hover:text-gray-700"
                            href="{{ route('course-index') }}">Courses</a>
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-300" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                            <path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z"></path>
                        </svg>
                    </li>
                    <li>
                        <a class="font-medium text-gray-400 hover:text-gray-700"
                            href="{{ route('archive', ['series', $course->series[0]->slug]) }}">
                            {{ $course->series[0]->name }}
                        </a>
                    </li>
                </ul>
            </nav>

            <div class="flex gap-x-24">
                <section class="w-4/6">
                    <div class="bg-white">
                        <img src="{{ $course->image }}" alt="{{ $course->name }}" class="w-full" />
                        <div class="py-4 px-8">
                            <h2 class="text-3xl font-bold text-gray-900">
                                {{ $course->name }}
                            </h2>

                            <ul class="flex flex-wrap items-center gap-4 my-5 text-gray-700">
                                <li class="flex items-center gap-2">
                                    <svg class="w-6 h-6 text-gray-400 shrink-0" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 01-1.125-1.125M3.375 19.5h1.5C5.496 19.5 6 18.996 6 18.375m-3.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-1.5A1.125 1.125 0 0118 18.375M20.625 4.5H3.375m17.25 0c.621 0 1.125.504 1.125 1.125M20.625 4.5h-1.5C18.504 4.5 18 5.004 18 5.625m3.75 0v1.5c0 .621-.504 1.125-1.125 1.125M3.375 4.5c-.621 0-1.125.504-1.125 1.125M3.375 4.5h1.5C5.496 4.5 6 5.004 6 5.625m-3.75 0v1.5c0 .621.504 1.125 1.125 1.125m0 0h1.5m-1.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m1.5-3.75C5.496 8.25 6 7.746 6 7.125v-1.5M4.875 8.25C5.496 8.25 6 8.754 6 9.375v1.5m0-5.25v5.25m0-5.25C6 5.004 6.504 4.5 7.125 4.5h9.75c.621 0 1.125.504 1.125 1.125m1.125 2.625h1.5m-1.5 0A1.125 1.125 0 0118 7.125v-1.5m1.125 2.625c-.621 0-1.125.504-1.125 1.125v1.5m2.625-2.625c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125M18 5.625v5.25M7.125 12h9.75m-9.75 0A1.125 1.125 0 016 10.875M7.125 12C6.504 12 6 12.504 6 13.125m0-2.25C6 11.496 5.496 12 4.875 12M18 10.875c0 .621-.504 1.125-1.125 1.125M18 10.875c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125m-12 5.25v-5.25m0 5.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125m-12 0v-1.5c0-.621-.504-1.125-1.125-1.125M18 18.375v-5.25m0 5.25v-1.5c0-.621.504-1.125 1.125-1.125M18 13.125v1.5c0 .621.504 1.125 1.125 1.125M18 13.125c0-.621.504-1.125 1.125-1.125M6 13.125v1.5c0 .621-.504 1.125-1.125 1.125M6 13.125C6 12.504 5.496 12 4.875 12m-1.5 0h1.5m-1.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125M19.125 12h1.5m0 0c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h1.5m14.25 0h1.5">
                                        </path>
                                    </svg>
                                    <span>10 videos</span>
                                </li>

                                <li class="flex items-center gap-2">
                                    <svg class="w-6 h-6 text-gray-400 shrink-0" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25">
                                        </path>
                                    </svg>
                                    <span>1 book</span>
                                </li>

                                <li class="flex items-center gap-2">
                                    <svg class="w-6 h-6 text-gray-400 shrink-0" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span>
                                        {{ $course->duration }} hours
                                    </span>
                                </li>

                                <li class="flex items-center gap-2">
                                    <svg class="w-6 h-6 text-gray-400 shrink-0" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z">
                                        </path>
                                    </svg>
                                    <span>{{ $course->difficultyLevel($course->difficulty_level) }}</span>
                                </li>

                                <li class="flex items-center gap-2" title="Last Updated">
                                    <svg class="w-6 h-6 text-gray-400 shrink-0" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z">
                                        </path>
                                    </svg>
                                    <time>2022</time>
                                </li>

                                <li class="flex items-center gap-2">
                                    <svg class="w-6 h-6 text-gray-400 shrink-0" xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                        </path>
                                    </svg>
                                    <span>${{ $course->price }}</span>
                                </li>
                            </ul>

                            <div class="flex items-center gap-x-4">
                                <button type="button"
                                    class="inline-flex items-center px-3 py-1.5 text-sm font-medium text-center text-white rounded focus:outline-none focus:ring-blue-300 bg-slate-600 hover:bg-slate-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        class="w-5 h-5">
                                        <path
                                            d="M1 8.25a1.25 1.25 0 112.5 0v7.5a1.25 1.25 0 11-2.5 0v-7.5zM11 3V1.7c0-.268.14-.526.395-.607A2 2 0 0114 3c0 .995-.182 1.948-.514 2.826-.204.54.166 1.174.744 1.174h2.52c1.243 0 2.261 1.01 2.146 2.247a23.864 23.864 0 01-1.341 5.974C17.153 16.323 16.072 17 14.9 17h-3.192a3 3 0 01-1.341-.317l-2.734-1.366A3 3 0 006.292 15H5V8h.963c.685 0 1.258-.483 1.612-1.068a4.011 4.011 0 012.166-1.73c.432-.143.853-.386 1.011-.814.16-.432.248-.9.248-1.388z">
                                        </path>
                                    </svg>
                                    <span
                                        class="inline-flex justify-center items-center ml-2 w-4 h-4 text-xs font-semibold rounded-full text-gray-500 bg-gray-200 }}">0</span>
                                </button>

                                <div class="flex items-center space-x-px">
                                    @for($i = 1; $i <= 5; $i++) <svg
                                        class="w-4 h-4 {{ $i <= $average_ratings ? 'text-yellow-400' : 'text-gray-300' }}"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                            clip-rule="evenodd"></path>
                                        </svg>
                                        @endfor
                                </div>
                                <p class="text-sm text-gray-500">{{ count($course->reviews) }} Review{{
                                    count($course->reviews) > 1 ? 's' : '' }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white mt-6 p-6">
                        <h2 class="mb-4 text-xl font-bold text-gray-900">
                            Overview
                        </h2>
                        <div class="text-gray-700 text-base space-y-6 font-normal">
                            <p>
                                {{ $course->content }}
                            </p>
                        </div>
                    </div>

                    <div class="my-6">
                        <h4 class="text-xl font-bold text-gray-900">Reviews</h4>
                        @if (count($course->reviews) > 0)
                        @foreach ($course->reviews as $review)
                        <div class="bg-white p-6 mt-4">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-px">
                                    @for ($i = 1; $i <= 5; $i++) <svg
                                        class="w-4 h-4 {{ $i <= $review->rating ? 'text-yellow-400' : 'text-gray-300' }}"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                            clip-rule="evenodd"></path>
                                        </svg>
                                        @endfor
                                </div>

                                <p class="text-sm font-normal text-gray-400">
                                    Dec 22, 2022
                                </p>
                            </div>
                            <blockquote class="my-4">
                                <p class="text-base font-normal leading-7 text-gray-600">
                                    {{ $review->body }}
                                </p>
                            </blockquote>

                            <div class="flex items-center">
                                <img class="flex-shrink-0 w-6 h-6 bg-gray-300 rounded-full"
                                    src="{{ $review->user->avatar }}" alt="Alex Table Profile Photo" />
                                <span class="ml-2.5 text-sm font-medium text-gray-900">
                                    {{ $review->user->name }}
                                </span>
                            </div>
                        </div>
                        @endforeach
                        @else
                        <div class="bg-white p-6 mt-4">
                            <p class="text-base font-normal leading-7 text-gray-600">
                                No reviews yet.
                            </p>
                        </div>
                        @endif
                    </div>
                </section>
                <aside class="w-2/6">
                    <div class="mt-2 mb-4">
                        <a href="https://laravel-courses.com/links/430" target="_blank"
                            class="flex items-center justify-center w-full px-4 py-3 text-base font-bold text-center text-white transition-all duration-200 bg-red-500 border-2 border-transparent rounded focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900 hover:bg-white hover:text-black hover:border-b-2 hover:border-red-500">
                            Get the Course &nbsp;
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25">
                                </path>
                            </svg>
                        </a>
                    </div>
                    <div class="mt-2 mb-7">
                        <button
                            class="flex items-center justify-center w-full px-4 py-3 text-base font-bold text-center text-white transition-all duration-200 hover:bg-white hover:text-black hover:border-b-2 hover:border-black bg-gray-900 border-2 border-transparent rounded focus:outline-none">
                            Write a Review &nbsp;
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10">
                                </path>
                            </svg>
                        </button>
                    </div>

                    <div class="bg-white p-6 space-y-4">
                        <h3 class="text-sm font-bold tracking-widest text-gray-900 uppercase">
                            Authors
                        </h3>
                        <hr />

                        @foreach ($course->authors as $author)
                        <div class="space-y-4 pb-2">
                            <img class="object-cover w-48 m-auto shadow" src="{{ $author->avatar }}"
                                alt="{{ $author->name }}" />
                            <div class="text-lg font-medium leading-6 text-center">
                                <h4 class="font-semibold">{{ $author->name }}</h4>
                            </div>

                            <ul role="list" class="flex space-x-5 justify-center">
                                @if(!empty($author->twitter_link))
                                <li>
                                    <a href="{{ $author->twitter_link }}" class="text-gray-400 hover:text-gray-500"
                                        target="_blank">
                                        <span class="sr-only">Twitter</span>
                                        <svg class="h-6 w-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M19.633 7.997c.013.175.013.349.013.523 0 5.325-4.053 11.461-11.46 11.461-2.282 0-4.402-.661-6.186-1.809.324.037.636.05.973.05a8.07 8.07 0 0 0 5.001-1.721 4.036 4.036 0 0 1-3.767-2.793c.249.037.499.062.761.062.361 0 .724-.05 1.061-.137a4.027 4.027 0 0 1-3.23-3.953v-.05c.537.299 1.16.486 1.82.511a4.022 4.022 0 0 1-1.796-3.354c0-.748.199-1.434.548-2.032a11.457 11.457 0 0 0 8.306 4.215c-.062-.3-.1-.611-.1-.923a4.026 4.026 0 0 1 4.028-4.028c1.16 0 2.207.486 2.943 1.272a7.957 7.957 0 0 0 2.556-.973 4.02 4.02 0 0 1-1.771 2.22 8.073 8.073 0 0 0 2.319-.624 8.645 8.645 0 0 1-2.019 2.083z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                                @endif

                                @if(!empty($author->github_link))
                                <li>
                                    <a href="{{ $author->github_link }}" class="text-gray-400 hover:text-gray-500"
                                        target="_blank">
                                        <span class="sr-only">GitHub</span>
                                        <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M12.026 2c-5.509 0-9.974 4.465-9.974 9.974 0 4.406 2.857 8.145 6.821 9.465.499.09.679-.217.679-.481 0-.237-.008-.865-.011-1.696-2.775.602-3.361-1.338-3.361-1.338-.452-1.152-1.107-1.459-1.107-1.459-.905-.619.069-.605.069-.605 1.002.07 1.527 1.028 1.527 1.028.89 1.524 2.336 1.084 2.902.829.091-.645.351-1.085.635-1.334-2.214-.251-4.542-1.107-4.542-4.93 0-1.087.389-1.979 1.024-2.675-.101-.253-.446-1.268.099-2.64 0 0 .837-.269 2.742 1.021a9.582 9.582 0 0 1 2.496-.336 9.554 9.554 0 0 1 2.496.336c1.906-1.291 2.742-1.021 2.742-1.021.545 1.372.203 2.387.099 2.64.64.696 1.024 1.587 1.024 2.675 0 3.833-2.33 4.675-4.552 4.922.355.308.675.916.675 1.846 0 1.334-.012 2.41-.012 2.737 0 .267.178.577.687.479C19.146 20.115 22 16.379 22 11.974 22 6.465 17.535 2 12.026 2z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                                @endif

                                @if(!empty($author->web_link))
                                <li>
                                    <a href="{{ $author->web_link }}" class="text-gray-400 hover:text-gray-500"
                                        target="_blank">
                                        <span class="sr-only">Website</span>
                                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                            stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                                @endif
                            </ul>

                            <div class="text-sm px-7">
                                <p class="text-gray-500">
                                    {{ $author->description }}
                                </p>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div class="bg-white p-6 my-6">
                        <h3 class="text-sm font-bold tracking-widest text-gray-900 uppercase">
                            Topics
                        </h3>

                        <hr class="mt-5 border-gray-200" />
                        <div class="mt-8 flex flex-wrap gap-2.5">
                            @foreach ($course->topics as $topic)
                            <a href="{{ route('archive', ['topic', $topic->slug]) }}"
                                class="relative flex items-center justify-center rounded-full border border-gray-300 py-1.5 px-3 hover:bg-gray-100">
                                <div class="absolute top-[13px] left-3 h-1.5 w-1.5 rounded-full bg-rose-500"></div>
                                <div class="ml-4 text-sm font-medium text-gray-900">
                                    {{ $topic->name }}
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </main>
</x-guest-layout>