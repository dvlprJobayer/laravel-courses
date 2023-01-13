<div class="shadow-lg">
    <a href="{{ route('course-show', $course->slug) }}">
        <img src="{{ $course->image }}" alt="{{ $course->name }}" />
    </a>
    <div class="px-6 py-8">
        <a href="{{ route('course-show', $course->slug) }}"
            class="text-xl text-[#4c555a] font-semibold hover:text-gray-800 hover:underline">
            {{ $course->name }}
        </a>
        <div class="flex my-4 items-center gap-x-2">
            <img class="rounded-full flex-shrink-0 w-6 h-6 bg-gray-300"
                src="https://www.gravatar.com/avatar/f7bd4d2a91e6298ca47bff3a96121906.jpg?s=80&amp;d=blank&amp;r=g"
                alt="Avatar" />
            <p class="text-[#4c555a] font-medium">{{ $course->submittedBy->name }}</p>
        </div>
        <div class="flex items-center gap-x-3">
            <p class="flex items-center gap-x-2 text-[#4c555a] font-medium bg-[#ebfff3] px-2 py-1 rounded-[3px]">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" width="15" height="15">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>{{ $course->duration < 10 ? $course->duration . ' hours' : '10+ hours' }}</span>
            </p>
            <p class="flex items-center gap-x-2 text-[#4c555a] font-medium bg-[#ebf1ff] px-2 py-1 rounded-[3px]">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" width="15" height="15">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
                </svg>

                <span>{{ $course->difficultyLevel($course->difficulty_level) }}</span>
            </p>
        </div>
    </div>
</div>