<x-guest-layout>
    <div class="container">
        <h1 class="my-10 font-bold text-center text-4xl text-gray-700">Courses/{{ $series->name }}</h1>

        <div class="grid grid-cols-3 gap-12 mb-10">
            <!-- Single Course Card -->
            @foreach ($courses as $course)
            @include('components.course-box', ['course' => $course])
            @endforeach
        </div>

        <div class="mb-10">
            {{ $courses->links() }}
        </div>
    </div>
</x-guest-layout>