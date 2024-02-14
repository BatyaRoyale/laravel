@extends('layouts.app')

@section('content')
    <div>
        <div class="container py-24">
            <div class="flex justify-center">
                <div class="flex flex-col gap-4 text-center items-center">
                    <h1 class="text-5xl ">Регистрация</h1>
                    <p>Есть аккаунт? <a href="{{route('auth.loginPage')}}" class="text-white font-bold">Авторизуйся!</a></p>
                </div>
            </div>
            
        </div>
    </div>
@endsection