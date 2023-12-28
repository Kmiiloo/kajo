@props(['course'])


<div class=" border rounded-lg">
    <div class="image h-40 bg-slate-300 rounded-t-lg"></div>
    <div class="course-info p-4">
        <h3 class="text-2xl bold"> {{$course['title']}} </h3>
        <p class="text-lg text-slate-800"> {{$course['description']}} </p>
        <p class="text-md"> {{$course['level']}} </p>
        <p class="text-sm text-slate-500"> {{$course['duration']}} hours </p>
    </div>
</div>