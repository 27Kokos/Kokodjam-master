
@extends('template')
@section('content')
    <div class="container my-5">
        <div class="col-sm-5 p-5 mx-auto mb-4 text-light" style="border-radius: 35px; background: #27292a;">
            <div class=" ">
                <h1 class="text-center">Вход</h1>
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
                        <input type="submit" class="form-control btn btn-primary" value="Зарегистрироваться">
                    </div>
                    <p class="text-center">
                        <a style="color: #f08d90; text-decoration: none;" href="/register" class="btn-login">Вы ещё не зарегистрированы? Зарегистрироваться</a>
                    </p>
                </form>
            </div>
        </div>
        
    </div>
@endsection
