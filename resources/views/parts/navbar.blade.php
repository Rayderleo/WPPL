<nav id="navbar" class="navbar navbar-expand-sm py-0 text-dark" style="background-color: #d8dee9">
    @auth
    <button id="btnsidebar" class="btn btn-light" style="background-color: #d8dee9"></button>
    @endauth
    <a class="navbar-brand" href="#">
        <img id="navbar-logo" src="{{ asset('asets/images/logo.png') }}" width="75" class="d-inline-block align-top" alt="">
        <span id="text-title">
            {{ config('app.name', 'Pembukuan') }}
        </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-ellipsis-v"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        {{-- @auth @endauth untuk mengecek jika sudah login maka akan dijalankan element didalamnya
        @guest @endguest untuk mengecek jika belum login maka akan dijalankan didalamnya
        @auth @else @endauth gabungan dari auth dan guest. jika sudah login maka dijalankan element di dalam auth dan else jika belum maka dijalankan yang else dan endauth --}}
        @auth
            <div class="dropdown pr-5">
                <a class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Selamat datang {{ Auth::user()->username }}
                    {{-- Auth::user()->username. auth adalah nama classnya untuk yg sudah login. user adalah nama modelnya dan username adalah nama kolom di tabel --}}
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Pengaturan Profil</a>
                    <form action="/logout" method="POST">
                        @csrf
                        <button class="dropdown-item">Logout <i class='fas fa-sign-out-alt'></i></button>
                    </form>
                </div>
            </div>
        @else
            <a href="/login" class="btn btn-success">Login</a>
        @endauth

    </div>
</nav>
