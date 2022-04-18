<div class="grid grid-cols-3 gap-4 mt-8">
    @foreach ($courses as $course)
        <livewire:course-card :course="$course" />
    @endforeach
</div>
