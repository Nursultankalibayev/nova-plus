@extends('auth.app')

@section('content')
    <div class="new-login-box">
        <div class="white-box">
            <h3 class="box-title m-b-0">Авторизация</h3>
            <small>Введите ваши данные ниже</small>
            <form class="form-horizontal new-lg-form" method="post" id="loginform" action="{{route('login')}}">
                {{csrf_field()}}
                <div class="form-group  m-t-20 {{$errors->first('phone') ? 'has-error' : '' }}">
                    <div class="col-xs-12">
                        <label>Номер телефона</label>
                        <input class="form-control" name="phone" data-mask="+7(999)9999999" type="text" required="" placeholder="Номер телефона">
                        @if ($errors->first('phone'))
                            <p style="color: red;">
                                {{$errors->first('phone')}}
                            </p>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12 {{$errors->first('password') ? 'has-error' : '' }}">
                        <label>Пароль</label>
                        <input class="form-control" type="password" name="password" required="" placeholder="пароль">
                        @if ($errors->first('password'))
                            <p style="color: red;">
                                {{$errors->first('password')}}
                            </p>
                        @endif
                    </div>
                </div>
                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <button class="btn btn-info btn-lg btn-block btn-rounded text-uppercase waves-effect waves-light" type="submit">Войти</button>
                    </div>
                </div>
                <div class="form-group m-b-0">
                    <div class="col-sm-12 text-center">
                        <p>У вас нет аккаунд?<a href="/register" class="text-primary m-l-5"><b>Регистрация</b></a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
