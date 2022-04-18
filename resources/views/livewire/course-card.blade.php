<div  class="bg-white rounded shadow-lg p-8 text-left">
        <a href="{{ route('course', $course->slug) }}">
            <img src="{{ $course->image }}" alt="" class="rounded-md mb-2" srcset="">
        </a>
        <h2 class="text-gray-800 text-xl text-center font-bold mb-4 truncate">{{ $course->name }}</h2>
        <h3 class="text-gray-700">{{ $course->excerpt  }}</h3>

        <div id="tacher-course" class="flex my-4">
            <img src="{{ $course->user->avatar }}" alt="" class="my-auto  mr-4 rounded-full h-12 w-12 ">
            <div>
                <span class="text-gray-500 font-semibold">{{ $course->user->name }}</span>
                <br>
                <small class="text-gray-300">{{ $course->created_at->diffForHumans() }}</small>
            </div>
        </div>
</div>
