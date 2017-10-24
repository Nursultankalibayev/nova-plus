@extends('index.auth.auth')
@section('title')
    Авторизация
@stop
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <section class="login">
                    <a href="/" class="close">X</a>
                    <h1>
                        Авторизация
                    </h1>
                    <form action="{{route('authPostLogin')}}" method="POST">
                        {{csrf_field()}}
                        <ul>
                            <li>
                                <img src="/assets/images/phone.png" alt="">
                                <input name="phone"  data-mask="+7(999)9999999"  type="text" placeholder="Ваш номер телефона" value="{{Session::has('phone') ? Session::get('phone') : old('phone')}}">
                            </li>
                            <li>
                                <img src="/assets/images/profile.png" alt="">
                                <input name="password" type="text" placeholder="Код высланный на ваш номер" value="{{Session::has('password') ? Session::get('password') : old('password')}}">
                            </li>
                        </ul>
                        <div class="send_code">
                            <a href="#">Переслать код</a>
                        </div>
                        <div class="button">
                            <button type="submit">Войти</button>
                            <button type="button" onclick="window.location.href = '{{route('authGetRegister')}}';">Зарегистрироваться</button>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
@stop
@push('scripts')
    @if(Session::has('success'))
        <script>
            $.toast({
                heading: '{{trans('app.success')}}',
                text : '{{ Session::get('success')}}',
                position: 'bottom-right',
                loaderBg: '#ff6849',
                icon: 'success',
                hideAfter: 3500
            });
        </script>
    @endif
    @if(Session::has('error'))
        <script>
            $.toast({
                heading: '{{trans('app.error')}}',
                text : '{{ Session::get('error')}}',
                position: 'bottom-right',
                loaderBg: '#ff6849',
                icon: 'error',
                hideAfter: 3500
            });
        </script>
    @endif
    @if(count($errors))
        @foreach ($errors->all() as $error)
            <script>
                $.toast({
                    heading: '{{trans('app.error_when_filling')}}',
                    text : '{{$error}}',
                    position: 'bottom-right',
                    loaderBg: '#ff6849',
                    icon: 'error',
                    hideAfter: 3500
                });
            </script>
        @endforeach
    @endif
@endpush