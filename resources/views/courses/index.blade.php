{{-- code to show all courses goes here --}}

<x-layout>
    <div class="p-12">
        <h1 class="text-3xl mb-5">Courses</h1>
        <div class="grid grid-cols-4 gap-10">
            @foreach ($courses as $course)
                <x-course-card :course="$course" />
            @endforeach
        </div>
    </div>
</x-layout>