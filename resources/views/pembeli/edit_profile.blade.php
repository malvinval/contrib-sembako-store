<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> --}}

    {{-- boootsrap icon --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">  --}}
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    {{-- ikllna --}}

    <link rel="stylesheet" href="css/style.css">


    @vite('resources/css/app.css')

    <title>Sembako Store | {{ $title }}</title>
</head>

<body class="">

    <header>
        @include('navbar.navmenu')
    </header>

    <div class="drawer lg:drawer-open">
        <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content flex flex-col ">
            <form method="post" action="/pembeli/edit_profile/{{ $user->id }}">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input class="form-control" type="text" value="{{ old('name', $user->name) }}" name="name">
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input class="form-control" type="text" value="{{  old('username', $user->username) }}" name="username">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input class="form-control" type="text" value="{{ old('email', $user->email) }}" name="email">
                </div>
                <div class="mb-3">
                    <label for="no_telp" class="form-label">No Telepon</label>
                    <input class="form-control" type="text"   value="{{ old('no_telp', $user->no_telp) }}" name="no_telp">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input class="form-control" type="text"   value="{{ old('alamat', $user->alamat) }}" name="alamat">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>

        </div>
        <div class="drawer-side">
          <label for="my-drawer-2" class="drawer-overlay"></label>
          <ul class="menu p-4 w-80 min-h-full bg-base-200 text-base-content">
            <!-- Sidebar content here -->
            <li>

                <a class="/pembeli/order"><i class="fas fa-store"></i>Pesanan Saya</a>
            </li>

            <li>
                <form action="/logout" method="post">
                     @csrf
                    <button type="submit" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</button>
                </form>
            </li>
          </ul>

        </div>
      </div>



    <footer>
        @include('navbar.footer')
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>


</body>

</html>




