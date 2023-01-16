<x-guest-layout>
    <div class="bg-gray-100">
        <div class="container py-8">
            <div class="flex items-center justify-between">
                <h3 class="text-xl font-bold text-gray-900">All Courses</h3>
                <select class="font-medium text-gray-700 hover:text-gray-900 shadow cursor-pointer px-2 py-1">
                    <option value="">Sort</option>
                    <option value="">Recently Added</option>
                    <option value="">Most Popular</option>
                    <option value="">Best Rating</option>
                    <option value="">Recently Updated</option>
                </select>
            </div>

            <main class="mt-8 flex gap-x-8">
                <!-- SideBar -->
                <aside class="bg-white w-1/4 p-6">
                    <!-- Search box -->
                    <form method="GET" id="searchForm">
                        <div class="flex items-center justify-between">
                            <h4 class="text-gray-700 font-bold">Search</h4>
                            <span class="text-gray-400 cursor-pointer hover:text-gray-500">
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true" x-show="open">
                                    <path fill-rule="evenodd"
                                        d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z"
                                        clip-rule="evenodd"></path>
                                </svg></span>
                        </div>

                        <div class="py-6 relative shadow-sm">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input name="search" value="{{ array_key_exists('search', $_GET) ? $_GET['search'] : '' }}"
                                type="text" placeholder="Enter keywords"
                                class="border border-gray-400 w-full rounded-md py-2 pl-10 focus:border-indigo-500 focus:ring-indigo-500 focus:ring-1 focus:outline-none" />
                        </div>

                        <!-- Course by level -->
                        <div class="py-6 border-t">
                            <div class="flex items-center justify-between">
                                <h4 class="text-gray-700 font-bold">Level</h4>
                                <span class="text-gray-400 cursor-pointer hover:text-gray-500">
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true" x-show="open">
                                        <path fill-rule="evenodd"
                                            d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z"
                                            clip-rule="evenodd"></path>
                                    </svg></span>
                            </div>

                            <div class="mt-4">
                                <div class="flex items-center gap-x-2 mb-2">
                                    <input @if(array_key_exists('levels', $_GET) && in_array('0', $_GET['levels']))
                                        checked @endif name="levels[]" value="0"
                                        class="cursor-pointer rounded w-4 h-4 level" type="checkbox" id="beginner" />
                                    <label class="cursor-pointer text-gray-600 text-sm" for="beginner">Beginner</label>
                                </div>

                                <div class="flex items-center gap-x-2 mb-2">
                                    <input @if(array_key_exists('levels', $_GET) && in_array('1', $_GET['levels']))
                                        checked @endif name="levels[]" value="1"
                                        class="cursor-pointer rounded w-4 h-4 level" type="checkbox"
                                        id="intermediate" />
                                    <label class="cursor-pointer text-gray-600 text-sm"
                                        for="intermediate">Intermediate</label>
                                </div>

                                <div class="flex items-center gap-x-2">
                                    <input @if(array_key_exists('levels', $_GET) && in_array('2', $_GET['levels']))
                                        checked @endif name="levels[]" value="2"
                                        class="cursor-pointer rounded w-4 h-4 level" type="checkbox" id="advanced" />
                                    <label class="cursor-pointer text-gray-600 text-sm" for="advanced">Advanced</label>
                                </div>
                            </div>
                        </div>

                        <!-- Course by Price -->
                        <div class="py-6 border-t">
                            <div class="flex items-center justify-between">
                                <h4 class="text-gray-700 font-bold">Price</h4>
                                <span class="text-gray-400 cursor-pointer hover:text-gray-500">
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true" x-show="open">
                                        <path fill-rule="evenodd"
                                            d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z"
                                            clip-rule="evenodd"></path>
                                    </svg></span>
                            </div>

                            <div class="mt-4">
                                <div class="flex items-center gap-x-2 mb-2">
                                    <input @if(array_key_exists('types', $_GET) && in_array('0', $_GET['types']))
                                        checked @endif name="types[]" value="0"
                                        class="cursor-pointer rounded w-4 h-4 type" type="checkbox" id="free" />
                                    <label class="cursor-pointer text-gray-600 text-sm" for="free">Free</label>
                                </div>

                                <div class="flex items-center gap-x-2 mb-2">
                                    <input @if(array_key_exists('types', $_GET) && in_array('1', $_GET['types']))
                                        checked @endif name="types[]" value="1"
                                        class="cursor-pointer rounded w-4 h-4 type" type="checkbox" id="paid" />
                                    <label class="cursor-pointer text-gray-600 text-sm" for="paid">Paid</label>
                                </div>
                            </div>
                        </div>

                        <!-- Course by Platform -->
                        <div class="py-6 border-t">
                            <div class="flex items-center justify-between">
                                <h4 class="text-gray-700 font-bold">Platform</h4>
                                <span class="text-gray-400 cursor-pointer hover:text-gray-500">
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true" x-show="open">
                                        <path fill-rule="evenodd"
                                            d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z"
                                            clip-rule="evenodd"></path>
                                    </svg></span>
                            </div>

                            <div class="mt-4">
                                <div class="flex items-center gap-x-2 mb-2">
                                    <input @if(array_key_exists('platforms', $_GET) && in_array('4',
                                        $_GET['platforms'])) checked @endif name="platforms[]" value="4"
                                        class="cursor-pointer rounded w-4 h-4 platform" type="checkbox"
                                        id="laracasts" />
                                    <label class="cursor-pointer text-gray-600 text-sm"
                                        for="laracasts">Laracasts</label>
                                </div>

                                <div class="flex items-center gap-x-2 mb-2">
                                    <input @if(array_key_exists('platforms', $_GET) && in_array('3',
                                        $_GET['platforms'])) checked @endif name="platforms[]" value="3"
                                        class="cursor-pointer rounded w-4 h-4 platform" type="checkbox"
                                        id="laravel-daily" />
                                    <label class="cursor-pointer text-gray-600 text-sm" for="laravel-daily">Laravel
                                        Daily</label>
                                </div>

                                <div class="flex items-center gap-x-2 mb-2">
                                    <input @if(array_key_exists('platforms', $_GET) && in_array('1',
                                        $_GET['platforms'])) checked @endif name="platforms[]" value="1"
                                        class="cursor-pointer rounded w-4 h-4 platform" type="checkbox"
                                        id="codecourse" />
                                    <label class="cursor-pointer text-gray-600 text-sm"
                                        for="codecourse">Codecourse</label>
                                </div>

                                <div class="flex items-center gap-x-2">
                                    <input @if(array_key_exists('platforms', $_GET) && in_array('2',
                                        $_GET['platforms'])) checked @endif name="platforms[]" value="2"
                                        class="cursor-pointer rounded w-4 h-4 platform" type="checkbox" id="udemy" />
                                    <label class="cursor-pointer text-gray-600 text-sm" for="udemy">Udemy</label>
                                </div>
                            </div>
                        </div>
                    </form>

                    <script>
                        const levels = document.querySelectorAll('.level');
                        for (const level of levels) {
                            level.addEventListener('click', function () {
                                document.querySelector('#searchForm').submit();
                            });
                        }
                        const types = document.querySelectorAll('.type');
                        for (const type of types) {
                            type.addEventListener('click', function () {
                                document.querySelector('#searchForm').submit();
                            });
                        }
                        const platforms = document.querySelectorAll('.platform');
                        for (const platform of platforms) {
                            platform.addEventListener('click', function () {
                                document.querySelector('#searchForm').submit();
                            });
                        }
                    </script>

                </aside>

                <!-- Course List -->
                <section class="w-3/4">
                    <ul class="space-y-6">
                        <!-- Course Card -->
                        @foreach ($courses as $course)
                        <li class="bg-white shadow-sm py-6 px-4 flex">
                            <div class="w-1/12 flex justify-center items-start">
                                <img src="{{ $course->image }}" alt="{{ $course->name }}"
                                    class="w-8 h-8 rounded-full" />
                            </div>
                            <div class="w-10/12">
                                <h2 class="mb-1">
                                    <a href="{{ route('course-show', $course->slug) }}"
                                        class="text-blue-500 hover:underline font-bold text-xl">
                                        {{ $course->name }}
                                    </a>
                                </h2>

                                <div class="flex items-center gap-x-2">
                                    @php
                                    $ratings = $course->reviews->pluck('rating');
                                    $average_ratings = null;
                                    if(count($ratings) > 0) {
                                    $sum = collect($ratings)->sum();
                                    $average_ratings = $sum / count($ratings);
                                    }
                                    @endphp

                                    <div class="flex items-center">
                                        @for($i = 1; $i <= 5; $i++) <svg
                                            class="w-4 h-4 {{ $i <= $average_ratings ? 'text-yellow-400' : 'text-gray-300' }}"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                clip-rule="evenodd"></path>
                                            </svg>
                                            @endfor
                                    </div>

                                    <p class="text-gray-500">{{ count($course->reviews) }} Review{{
                                        count($course->reviews) > 1 ? 's' : '' }}</p>
                                </div>

                                <p class="text-gray-700 my-4">
                                    {{ Str::limit($course->content, 100, '...') }}
                                </p>

                                <div class="flex space-x-5 flex-wrap justify-items-start">
                                    <div class="inline-flex items-center gap-2 text-sm text-gray-500">
                                        <svg class="w-6 h-6 text-gray-400 shrink-0" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z">
                                            </path>
                                        </svg>
                                        <span>{{ $course->difficultyLevel($course->difficulty_level) }}</span>
                                    </div>

                                    <div class="inline-flex items-center gap-2 text-sm text-gray-500">
                                        <svg class="w-6 h-6 text-gray-400 shrink-0" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 01-1.125-1.125M3.375 19.5h1.5C5.496 19.5 6 18.996 6 18.375m-3.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-1.5A1.125 1.125 0 0118 18.375M20.625 4.5H3.375m17.25 0c.621 0 1.125.504 1.125 1.125M20.625 4.5h-1.5C18.504 4.5 18 5.004 18 5.625m3.75 0v1.5c0 .621-.504 1.125-1.125 1.125M3.375 4.5c-.621 0-1.125.504-1.125 1.125M3.375 4.5h1.5C5.496 4.5 6 5.004 6 5.625m-3.75 0v1.5c0 .621.504 1.125 1.125 1.125m0 0h1.5m-1.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m1.5-3.75C5.496 8.25 6 7.746 6 7.125v-1.5M4.875 8.25C5.496 8.25 6 8.754 6 9.375v1.5m0-5.25v5.25m0-5.25C6 5.004 6.504 4.5 7.125 4.5h9.75c.621 0 1.125.504 1.125 1.125m1.125 2.625h1.5m-1.5 0A1.125 1.125 0 0118 7.125v-1.5m1.125 2.625c-.621 0-1.125.504-1.125 1.125v1.5m2.625-2.625c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125M18 5.625v5.25M7.125 12h9.75m-9.75 0A1.125 1.125 0 016 10.875M7.125 12C6.504 12 6 12.504 6 13.125m0-2.25C6 11.496 5.496 12 4.875 12M18 10.875c0 .621-.504 1.125-1.125 1.125M18 10.875c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125m-12 5.25v-5.25m0 5.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125m-12 0v-1.5c0-.621-.504-1.125-1.125-1.125M18 18.375v-5.25m0 5.25v-1.5c0-.621.504-1.125 1.125-1.125M18 13.125v1.5c0 .621.504 1.125 1.125 1.125M18 13.125c0-.621.504-1.125 1.125-1.125M6 13.125v1.5c0 .621-.504 1.125-1.125 1.125M6 13.125C6 12.504 5.496 12 4.875 12m-1.5 0h1.5m-1.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125M19.125 12h1.5m0 0c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h1.5m14.25 0h1.5">
                                            </path>
                                        </svg>
                                        <span>10 videos</span>
                                    </div>

                                    <div class="inline-flex items-center gap-2 text-sm text-gray-500">
                                        <svg class="w-6 h-6 text-gray-400 shrink-0" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25">
                                            </path>
                                        </svg>
                                        <span>1 book</span>
                                    </div>

                                    <div class="inline-flex items-center gap-2 text-sm text-gray-500">
                                        <svg class="w-6 h-6 text-gray-400 shrink-0" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>{{ $course->duration }} hour{{ $course->duration > 1 ? 's' : '' }}</span>
                                    </div>

                                    <div class="inline-flex items-center gap-2 text-sm text-gray-500"
                                        title="Last Updated">
                                        <svg class="w-6 h-6 text-gray-400 shrink-0" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z">
                                            </path>
                                        </svg>
                                        <time>{{ $course->year }}</time>
                                    </div>

                                    <div class="inline-flex items-center gap-2 text-sm text-gray-500">
                                        <svg class="w-6 h-6 text-gray-400 shrink-0" xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                            </path>
                                        </svg>
                                        <span>${{ $course->price }}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="w-1/12 flex justify-end">
                                @foreach ($course->authors as $author)
                                <img class="w-8 h-8 rounded-full ring-2 ring-white" src="{{ $author->avatar }}"
                                    alt="{{ $author->name }}">
                                @endforeach
                            </div>
                        </li>
                        @endforeach
                    </ul>

                    <div class="mt-8">
                        {{ $courses->links() }}
                    </div>
                </section>
            </main>
        </div>
        <!-- Newsletter Section -->
        <section class="bg-[#fff7f6] h-96 flex items-center">
            <div class="container flex items-center justify-between">
                <div class="w-1/2">
                    <h2 class="text-4xl text-[#ff5f53] font-bold">
                        Don&#39;t miss any updates
                    </h2>
                    <p class="text-[#4c555a] font-medium mt-6">
                        We will be covering course reviews, comparison between
                        the best courses, and will be sharing exclusive
                        discounts with you on a monthly basis.
                    </p>
                    <form class="flex items-center mt-12 gap-x-4">
                        <input placeholder="Your Email Address" type="email" name="" id=""
                            class="bg-white flex-1 px-4 py-3 text-lg font-medium rounded-lg border border-[#ff5f53]" />
                        <input type="submit" value="Subscribe"
                            class="text-lg font-medium text-[#ff5f53] border border-[#ff5f53] px-6 py-3 rounded-lg cursor-pointer hover:bg-[#ff5f53] hover:text-white transition duration-300 ease-in-out" />
                    </form>
                </div>
                <img src="{{ asset('img/mail.png') }}" alt="Mail" />
            </div>
        </section>
    </div>
</x-guest-layout>