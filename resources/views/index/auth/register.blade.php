@extends('index.auth.auth')
@section('title')
    Регистрация
@stop
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <section class="register">
                    <a href="/" class="close">X</a>
                    <h1>
                        У вас есть возможность
                        вызвать врача на сайте:
                    </h1>
                    <form action="{{route('authPostRegister')}}" method="POST">
                        {{csrf_field()}}
                        <ul>
                            <li>
                                <img src="/assets/images/profile.png" alt="">
                                <input type="text" name="name" placeholder="Ваше имя" value="{{old('name')}}">
                            </li>
                            <li>
                                <img src="/assets/images/phone.png" alt="">
                                <input type="text"  data-mask="+7(999)9999999"  name="phone" value="{{old('phone')}}" placeholder="Ваш номер телефона">
                            </li>
                        </ul>
                        <div class="button">
                            <button type="submit">Зарегистрироваться</button>
                            <button type="button" onclick="window.location.href = '{{route('authGetLogin')}}';">Уже авторизован</button>
                        </div>
                    </form>
                </section>
                <section class="mobile_app_download">
                    <h1>Или скачать приложение на свой смартфон:</h1>
                    <ul class="mobile_app_download_ul">
                        <li>
                            <img src="/assets/images/apple-store-dark.png" alt="">
                            <a href="#">Загрузка приложение <br> через Appstore</a>
                        </li>
                        <li>
                            <img src="/assets/images/google-play-dark.png" alt="">
                            <a href="#">Загрузка приложение <br> через Google Play</a>
                        </li>
                    </ul>
                </section>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
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