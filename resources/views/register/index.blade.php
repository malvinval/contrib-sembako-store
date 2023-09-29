@extends('layout.main')

@section('container')

  <div class="flex justify-center items-center px-5">
    <div class="lg:w-2/5 md:w-1/2 w-full">
      <form action="/register" method="post">
        @csrf
        <div class="space-y-5">
            <div class="space-y-2">
                <label class="text-sm font-medium text-gray-700 tracking-wide" for="name">Nama</label>
                          @error('name')
                            <div class="invalid-feedback">
                                {{-- invalid-feedback dari bootstrap --}}
                                {{ $message }}
                            </div>
                          @enderror
            <input type="text" class="w-full content-center text-base px-4 py-2 border  border-gray-300 rounded-lg focus:outline-none focus:border-green-400
            @error('name') is-invalid
            @enderror"  name="name" id="name" autofocus required value="{{ old('name') }}">
          </div>

          <div class="space-y-2">
                <label class="text-sm font-medium text-gray-700 tracking-wide" for="username">Username</label>
                          @error('username')
                            <div class="invalid-feedback">
                                {{-- invalid-feedback dari bootstrap --}}
                                {{ $message }}
                            </div>
                          @enderror
            <input type="text" class="w-full content-center text-base px-4 py-2 border  border-gray-300 rounded-lg focus:outline-none focus:border-green-400
            @error('username') is-invalid
            @enderror"  name="username" id="username" autofocus required value="{{ old('username') }}">
          </div>

          <div class="space-y-2">
                <label class="text-sm font-medium text-gray-700 tracking-wide" for="email">Email</label>
                          @error('email')
                            <div class="invalid-feedback">
                                {{-- invalid-feedback dari bootstrap --}}
                                {{ $message }}
                            </div>
                          @enderror
            <input type="email" class="w-full content-center text-base px-4 py-2 border  border-gray-300 rounded-lg focus:outline-none focus:border-green-400
            @error('email') is-invalid
            @enderror"  name="email" id="email" autofocus required value="{{ old('email') }}">
          </div>
          <input type="hidden" class="w-full content-center text-base px-4 py-2 border  border-gray-300 rounded-lg focus:outline-none focus:border-green-400
            @error('email') is-invalid
            @enderror"  name="is_pembeli" id="is_pembeli" autofocus required value="1">

          <div class="space-y-2">
          <label class="mb-5 text-sm font-medium text-gray-700 tracking-wide">
            Password
          </label>
          <input class="w-full content-center text-base px-4 py-2 border  border-gray-300 rounded-lg focus:outline-none focus:border-green-400" type="password" placeholder="Enter your password" name="password" id="password">
        </div>
          {{-- <div class="flex items-center justify-between">
          <div class="flex items-center">
            <input id="remember_me" name="remember_me" type="checkbox" class="h-4 w-4 bg-blue-500 focus:ring-blue-400 border-gray-300 rounded">
            <label for="remember_me" class="ml-2 block text-sm text-gray-800">
              Remember me
            </label>
          </div>
          <div class="text-sm">
            <a href="#" class="text-green-400 hover:text-green-500">
              Forgot your password?
            </a>
          </div>
        </div> --}}
        <div>
          <button type="submit" class="w-full flex justify-center bg-green-400  hover:bg-green-500 text-gray-100 p-3  rounded-full tracking-wide font-semibold  shadow-lg cursor-pointer transition ease-in duration-500">
            Daftar
          </button>
        </div>
        </div>
        {{-- <div class="pt-5 text-center text-gray-400 text-xs">
          <span>
            Copyright © 2021-2022
            <a href="https://codepen.io/uidesignhub" rel="" target="_blank" title="Ajimon" class="text-green hover:text-green-500 ">AJI</a></span>
        </div> --}}
    </form>
    </div>
  </div>  

@endsection
