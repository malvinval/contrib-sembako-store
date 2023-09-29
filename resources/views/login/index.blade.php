@extends('layout.main')

@section('container')

  @if(session()->has('success'))
  <div class="flex justify-center self-center  z-10">

      <div class="alert alert-danger alert-dismissible fade show w-400" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
  </div>
    @endif

  @if(session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ session('loginError') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
  @endif

  <!-- component -->
<!-- component -->
<div class="flex  items-center justify-center bg-white dark:bg-gray-950 px-5">
  <form action="">
    <div class="max-w-sm rounded-3xl bg-gradient-to-b from-sky-300 to-purple-500 p-px dark:from-gray-800 dark:to-transparent">
      <div class="rounded-[calc(1.5rem-1px)] bg-white px-10 p-12 dark:bg-gray-900">
        <div>
          <h1 class="text-xl font-semibold text-gray-800 dark:text-white">Masuk akun anda</h1>
          <p class="text-sm tracking-wide text-gray-600 dark:text-gray-300">Belum punya akun? <a href="register" class="text-blue-600 transition duration-200 underline dark:text-blue-400">Daftar</a> sekarang!</p>
        </div>

        <div class="mt-8 space-y-8">
          <div class="space-y-6">
            <form action="/login" method="post">
              @csrf
              <div class="space-y-5">
                  <div class="space-y-2">
                      <label class="text-sm font-medium text-gray-700 tracking-wide">Email</label>
                              @error('email')
                                  <div class="">
                                      {{ $message }}
                                  </div>
                              @enderror
                  <input type="email" class="w-full content-center text-base px-4 py-2 border  border-gray-300 rounded-lg focus:outline-none focus:border-green-400
                  @error('email') is-invalid
                  @enderror"  placeholder="name@example.com" name="email" id="email" autofocus required value="{{ old('email') }}">
              </div>
              <div class="space-y-2">
                  <label class="mb-5 text-sm font-medium text-gray-700 tracking-wide">
                      Password
                  </label>
                  <input class="w-full content-center text-base px-4 py-2 border  border-gray-300 rounded-lg focus:outline-none focus:border-green-400" type="password" placeholder="Enter your password" name="password" id="password">
              </div>
            </form>
          </div>

          <button type="submit" class="w-full flex justify-center bg-green-400  hover:bg-green-500 text-gray-100 p-3  rounded-full tracking-wide font-semibold  shadow-lg cursor-pointer transition ease-in duration-500">
            Sign in
          </button>
        </div>
      </div>
    </div>
  </form>
</div>

      




@endsection
