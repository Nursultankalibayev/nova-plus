<!doctype html>
<html lang="{{App::getLocale()}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/libs/slick/slick.css">
    <link rel="stylesheet" href="/assets/libs/slick/slick-theme.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/jquery-ui.min.css">
    <link href="/plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/main.css">
    @stack('styles')
    <title>@yield('title')</title>
</head>
<body>
<header>
    <div class="container desktop_header">
        <div class="row">
            <div class="col-md-12">
                <div class="header_page">
                    <a href="/{{App::getLocale()}}"><img src="/assets/images/logo.png" alt=""></a>
                    <ul class="header_menu_left">
                        <li ><a href="/{{$locale}}#about">{{trans('app.about_us')}}</a></li>
                        <li><a href="/{{$locale}}/services" class="{{isset($rows['active']) && $rows['active'] == 'services' ? 'active' : ''}}">{{trans('app.services')}}</a></li>
                        <li><a href="/{{$locale}}/tests" class="{{isset($rows['active']) && $rows['active'] == 'tests' ? 'active' : ''}}">{{trans('app.tests')}}</a></li>
                        <li><a href="/{{$locale}}/faq" class="{{isset($rows['active']) && $rows['active'] == 'faq' ? 'active' : ''}}">{{trans('app.questions_and_answers')}}</a></li>
                    </ul>
                    <ul class="header_menu_right">
                        <li><img src="/assets/images/phone-icon.png" alt=""><a href="tel:+77273493322">+7 727 349 33 22</a></li>
                        <li><a class="button_header" href="{{route('call')}}?text=Нужна помощь">{{trans('app.need_help')}}</a></li>
                        <li>
                            @if(Auth::check() && Auth::user()->role ==0)
                                <a href="{{route('profile')}}">{{mb_strimwidth(Auth::user()->name,0,8)}}</a>
                            @elseif(Auth::check() && Auth::user()->role ==1)
                                <a href="/system">Админка</a>
                            @else
                                <a href="{{route('authGetLogin')}}">{{trans('app.personal_account')}}</a>
                            @endif
                        </li>
                        <li class=" dropdown ">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">@if(App::getLocale() == 'ru')Рус @elseif(App::getLocale() == 'kk') Қаз @else Eng @endif<i class="icon_caret"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{Helper::setSessionLang('ru')}}" style="@if(App::getLocale() == 'ru') display: none; @endif">Рус</a></li>
                                <li><a href="{{Helper::setSessionLang('kk')}}" style="@if(App::getLocale() == 'kk') display: none; @endif">Қаз</a></li>
                                <li><a href="{{Helper::setSessionLang('en')}}" style="@if(App::getLocale() == 'en') display: none; @endif">Eng</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile_header">
        <div class="mobile_header_container">
            <div class="header_page">
                <a href="#"><img src="/assets/images/logo.png" alt=""></a>
                <ul class="mobile_header_menu_right">
                    <li><a href="tel:+77273493322">{{trans('app.call_the_doctor')}}</a></li>
                </ul>
                <div class="navbar-fostrap" data-toggle="0"> <span></span> <span></span> <span></span> </div>
            </div>
        </div>
        <ul class="mobile_header_menu">
            <li><a href="/{{$locale}}#about">{{trans('app.about_us')}}</a></li>
            <li><a href="/{{$locale}}/services">{{trans('app.services')}}</a></li>
            <li><a href="/{{$locale}}/tests">{{trans('app.tests')}}</a></li>
            <li><a href="/{{$locale}}/faq">{{trans('app.questions_and_answers')}}</a></li>
            <li><a class="button_header" href="{{route('call')}}">{{trans('app.need_help')}}</a></li>
            <li><a href="/{{$locale}}/profile">{{trans('app.personal_account')}}</a></li>
        </ul>
    </div>
</header>
@yield('content')
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="col-md-8">
                    <p class="footer_title">© 2017 Nova Diagnostic. Все права защищены.</p>
                </div>
                <div class="col-md-4">
                    <p><a  class="footer_payment" href="/{{$locale}}/payment">Оплата</a></p>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">
                <ul class="social">
                    <li><a target="_blank" href="#"><img src="/assets/images/facebook.png" alt=""></a></li>
                    <li><a target="_blank" href="#"><img src="/assets/images/twitter.png" alt=""></a></li>
                    <li><a target="_blank" href="#"><img src="/assets/images/instagram.png" alt=""></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<script src="/assets/js/jquery-3.2.1.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/libs/slick/slick.min.js"></script>
<script src="/plugins/bower_components/toast-master/js/jquery.toast.js"></script>
<script src="/js/mask.js"></script>
<script src="/assets/js/main.js"></script>
<script>
   function callDoctor (text) {
       window.location.href='/{{$locale}}/call?text='+text;
   }
</script>
@stack('scripts')
</body>
</html>