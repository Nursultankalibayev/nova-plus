@extends('auth.app')

@section('content')

    <div class="new-login-box">
        <div class="white-box">
            <h3 class="box-title m-b-0">Регистрация</h3> <small>Введите ваши данные ниже</small>
            <form class="form-horizontal new-lg-form" method="post" id="loginform" action="{{route('register')}}">
                {{csrf_field()}}
                <div class="form-group ">
                    <div class="col-xs-12 {{$errors->first('name') ? 'has-error' : '' }}">
                        <input class="form-control" type="text" name="name" required="" placeholder="Имя">
                        @if ($errors->first('name'))
                            <p style="color: red;">
                                {{$errors->first('name')}}
                            </p>
                        @endif
                    </div>
                </div>
                <div class="form-group ">
                    <div class="col-xs-12 {{$errors->first('phone') ? 'has-error' : '' }}">
                        <input class="form-control" type="text" required="" data-mask="+7(999)9999999" name="phone" placeholder="Номер телефона">
                        @if ($errors->first('phone'))
                            <p style="color: red;">
                                {{$errors->first('phone')}}
                            </p>
                        @endif
                    </div>
                </div>
                <div class="form-group ">
                    <div class="col-xs-12 {{$errors->first('password') ? 'has-error' : '' }}">
                        <input class="form-control" type="password" name="password" required="" placeholder="Пароль">
                        @if ($errors->first('password'))
                            <p style="color: red;">
                                {{$errors->first('password')}}
                            </p>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12  {{$errors->first('password_confirmation') ? 'has-error' : '' }}">
                        <input class="form-control" type="password" name="password_confirmation" required="" placeholder="Подтверждение пароля">
                        @if ($errors->first('password_confirmation'))
                            <p style="color: red;">
                                {{$errors->first('password_confirmation')}}
                            </p>
                        @endif
                    </div>
                </div>
                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Зарегистрироваться</button>
                    </div>
                </div>
                <div class="form-group m-b-0">
                    <div class="col-sm-12 text-center">
                        <p>Уже есть учетная запись?<a href="/login" class="text-danger m-l-5"><b>Войти</b></a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
