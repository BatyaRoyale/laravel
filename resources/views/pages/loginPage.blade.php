@extends('layouts.app')

@section('content')
    <div>
        <div class="container py-24">
            <div class="flex flex-col gap-12 justify-center">
                <div class="flex flex-col gap-4 text-center items-center">
                    <h1 class="text-5xl ">Авторизация</h1>
                    <p>Нет аккаунта? <a href="{{route('auth.registerPage')}}" class="text-white font-bold">Зарегестрируйся!</a></p>
                </div>
                @error('invalid_credentials') <p class="text-red-500">{{ $message }}</p> @enderror
                <form action="{{route('auth.login')}}" method="post" class="flex flex-col justify-center gap-7 items-center">
                    @csrf
                    <input class="input" type="email" name="email" placeholder="Email">
                    @error('email') <p class="text-red-500">{{ $message }}</p> @enderror
                    <input class="input" type="password" name="password" placeholder="Пароль">
                    @error('password') <p class="text-red-500">{{ $message }}</p> @enderror
                    <button class="button-fill" type="submit">Авторизоваться</button>
                </form>
            </div>
        </div>
    </div>
@endsection