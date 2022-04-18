<header class="shadow-lg ">
    <div class="bg-white py-8 flex justify-between px-8">

        <a href="{{ route('home') }}">
            <img src="{{ asset('images/isotipo-platzi.png') }}" alt="" srcset="" class="h-8 mx-auto">
        </a>
        @auth
        <a href="{{ url('dashboard') }}" class="btn-primary-outline">Dashboard</a>
        @else
        <div id="login-btns">
            <a href="{{ url('login') }}" class="btn-primary-outline"
        >Login</a>
        <a href="{{ url('register') }}" class="btn-primary">Register</a>
        </div>
        
        @endif
    </div>
</header>