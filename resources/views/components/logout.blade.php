<!-- <form id="logout-form" action="{{ route('logout') }}" method="POST">
@csrf
<button type="submit"><a href="{{ route('logout') }}"
   onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
</a>Log out <i class="fa-solid fa-arrow-right-from-bracket"></i></button>
</form>  -->

<form id="logout-form" action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit">
        Log out <i class="fa-solid fa-arrow-right-from-bracket"></i>
    </button>
</form>