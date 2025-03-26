@extends('template')
@section('content')
    <div class="container my-5">
        <div class="p-5 mb-4 text-light col-sm-5 mx-auto" style="border-radius: 35px; background: #27292a;">
            <div class="">
                <h1 class="text-center">Регистрация</h1>
                <form action="/register" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="">Имя пользователя</label>
                        <input name="name" type="text" class="form-control" placeholder="Имя пользователя">
                    </div>
                    <div class="mb-3">
                        <label for="">Почта</label>
                        <input name="email" type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <label for="">Пароль</label>
                        <input name="password" type="password" class="form-control" placeholder="Пароль">
                    </div>
                    <div class="mb-3">
                        <label for="">Подтверждение пароля</label>
                        <input name="password_confirmation" type="password" class="form-control" placeholder="Подтверждение пароля">
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="form-control btn btn-primary" value="Зарегистрироваться">
                    </div>
                    <p class="text-center">
                        <a style="color: #f08d90; text-decoration: none;" href="/login" class="btn-login">Уже есть аккаунт? Войти</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
@endsection
