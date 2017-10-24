<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/libs/slick/slick.css">
    <link rel="stylesheet" href="/assets/libs/slick/slick-theme.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link href="/plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/main.css">
    <title>Оформить вызов</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <section class="login">
                <a href="/" class="close">X</a>
                <h1>
                    Оформить вызов
                </h1>
                <form action="/send-call-application" method="post">
                    {{csrf_field()}}
                    <ul>
                        <li>
                            <img src="/assets/images/profile.png" alt="">
                            <input type="text"  name="name" value="{{Auth::check() ? Auth::user()->name : old('name')}}" placeholder="Кому">

                        </li>
                        <li>
                            <img src="/assets/images/home.png" alt="">
                            <input type="text"  name="address" value="{{Auth::check() ? Auth::user()->address : old('address')}}"  placeholder="Куда">
                        </li>
                        <li>
                            <img src="/assets/images/clock.png" alt="">
                            <input type="datetime-local"  name="time" placeholder="Во сколько" value="{{old('time')}}">
                        </li>
                        <li>
                            <img src="/assets/images/comments.png" alt="">
                            <input type="text"  name="comment" placeholder="Комментарий" value="{{old('comment')}}">
                        </li>
                        <input type="hidden" name="text_type" value="{{\Request::all()['text']}}">
                    </ul>
                    <div class="button">
                        <button type="submit">Вызвать</button>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>
<script src="/assets/js/jquery-3.2.1.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/libs/slick/slick.min.js"></script>
<script src="/plugins/bower_components/toast-master/js/jquery.toast.js"></script>
<script src="/assets/js/main.js"></script>
@if(count($errors))
    @foreach ($errors->all() as $error)
        <script>
            $.toast({
                heading: '{{trans('app.error_when_filling')}}',
                text : '{{$error}}',
                position: 'top-right',
                loaderBg: '#ff6849',
                icon: 'error',
                hideAfter: 3500
            });
        </script>
    @endforeach
@endif
</body>
</html>