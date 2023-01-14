<x-guest-layout>
    <!-- Hero Section -->
    <div class="flex hero-min-h items-center justify-center text-center">
        <div class="max-w-[850px] mx-auto relative">
            <h1 class="my-6 text-[52px] leading-none font-bold text-[#222]">
                The best Courses and Books on the
                <span class="text-[#ff5f53]">Laravel</span> ecosystem
            </h1>
            <p class="text-lg mt-4 mb-10 text-gray-600 font-medium">
                Find the right books and courses on the Laravel framework and related
                topics to suite your level of expertise. Know how good a course is
                through your peers review and share your own too.
            </p>
            <form action="" class="flex w-[700px] mx-auto gap-x-6">
                <input class="border font-medium border-[#ff5f53] py-3 px-4 rounded-lg flex-1" type="text"
                    placeholder="Enter keywords to search courses" />
                <button class="btn-primary">Search</button>
            </form>

            <!-- Icons -->
            <img src="https://laravel-courses.com/img/left-top-angle.png" alt="angle"
                class="absolute pointer-events-none top-[70px] -left-28" />
            <img src="https://laravel-courses.com/img/left-bottom-angle.png" alt="angle"
                class="absolute pointer-events-none top-[280px] -left-12" />
            <img src="https://laravel-courses.com/img/right-angle.png" alt="angle"
                class="absolute pointer-events-none top-0 -right-10" />
            <img src="https://laravel-courses.com/img/right-center-angle.png" alt="angle"
                class="absolute pointer-events-none top-[140px] -right-52" />
            <img src="https://laravel-courses.com/img/right-bottom-angle.png" alt="angle"
                class="absolute pointer-events-none top-[270px] -right-24" />
        </div>
    </div>

    <!-- Logo Section -->
    <ul class="container pb-28 flex gap-x-8 justify-center">
        @foreach ($series as $item)
        <li class="border border-[#ff5f53] h-16 w-full rounded-lg flex items-center justify-center shadow">
            <a href="{{ route('archive', ['series', $item->slug]) }}">
                <img src="{{ $item->image }}" alt="{{ $item->name }}" />
            </a>
        </li>
        @endforeach
    </ul>

    <!-- Featured Courses -->
    <section class="container">
        <h2 class="text-center text-[2.25rem] text-[#2c383f] font-bold mb-12">
            Featured Courses
        </h2>

        <!-- Feature Courses -->
        <div class="grid grid-cols-3 gap-12">
            <!-- Single Course Card -->
            @foreach ($courses as $course)
            @include('components.course-box', ['course' => $course])
            @endforeach
        </div>

        <!-- Featured Courses Button -->
        <div class="my-10 text-center">
            <button class="btn-primary">Browse All</button>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="bg-[#fff7f6] h-96 flex items-center">
        <div class="container flex items-center justify-between">
            <div class="w-1/2">
                <h2 class="text-4xl text-[#ff5f53] font-bold">
                    Don&#39;t miss any updates
                </h2>
                <p class="text-[#4c555a] font-medium mt-6">
                    We will be covering course reviews, comparison between the best
                    courses, and will be sharing exclusive discounts with you on a monthly
                    basis.
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
</x-guest-layout>