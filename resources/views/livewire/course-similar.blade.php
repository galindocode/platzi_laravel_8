<div>
    <h1 class="text-2xl text-gray-700 text-center my-4">Cursos similares</h1>
    <div class="grid grid-cols-2 gap-4 my-8">
        @foreach ($course->similar() as $course)
            <livewire:course-card :course="$course">
        @endforeach
    </div>
</div>