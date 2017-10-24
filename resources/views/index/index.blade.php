@extends('index.layouts.app')
@section('title')
    Nova Diagnostic
@stop
@section('content')
    <section class="carousel">
        <div class="slid-main carousel_on">
            @if(count($rows['carousel']))
                @foreach($rows['carousel'] as $carousel)
                <div class="item" style="background: url('/uploads/carousels/{{$carousel['image']}}') no-repeat; background-position: top;     background-size:cover;">
                    <div class="container">
                        <div class="item_content">
                            <div class="item_title">{{$carousel[$title]}}</div>
                            <p class="item_short_desc">{{$carousel[$short_desc]}}</p>
                            <button @if($carousel['type'] == 0) onclick="callDoctor('{{$carousel[$title]}}');"  @else onclick="window.location.href='/{{$locale}}/{{$carousel['link']}}';" @endif class="item_button">{{$carousel[$title_button]}}</button>
                        </div>
                    </div>
                </div>
                @endforeach
            @endif
        </div>
    </section>
    <section class="section_content" >
        <span  id="about" style="position:absolute; top: 570px;"></span>
        <div class="container">
            <div class="row">
                <div class="col-md-12" >
                    <h1 >{{trans('app.about_us')}}</h1>
                    <div class="centent_video">
                        <video  poster="/uploads/121212.jpg" preload="none" controls playsinline webkit-playsinline>
                            <source src="/uploads/Nova+SOUNDED.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
            <div class="row">
                <h1>{{trans('app.your_rights')}}</h1>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="item_content">
                        <img src="/assets/images/chat-icon.png" alt="">
                        <h2>Скорость реагирования</h2>
                        <p>Наши операторы в чате мгновенно ответят на Ваши вопросы абсолютно бесплатно. Врач-специалист прибудет к Вам домой уже в течение 1.30 – 2 часов.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6  col-xs-12">
                    <div class="item_content">
                        <img src="/assets/images/time-icon.png" alt="">
                        <h2>Оптимальные часы работы</h2>
                        <p>Мы работаем каждый день с 7.00 и до 22.00, консультанты принимают заявки на вызовыкруглосуточно.Среднее время вызова – 40 минут.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="item_content">
                        <img src="/assets/images/technology-icon.png" alt="">
                        <h2>Инновационные технологии</h2>
                        <p>Мы используем передовые технологии и оборудование для оказания необходимой помощи на высшем уровне.</p>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-4 col-sm-6  col-xs-12">
                    <div class="item_content">
                        <img src="/assets/images/team-icon.png" alt="">
                        <h2>Работают профессионалы</h2>
                        <p>
                            Все врачи, которые сотрудничают с нами, имеют обширный опыт в специализации, все
                            необходимые лицензии и квалификации. Также мы выработали специальную систему управления вызовами,
                            и проведение вызова так, чтобы Вы остались довольны.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="item_content">
                        <img src="/assets/images/license-icon.png" alt="">
                        <h2>Лицензии и документация</h2>
                        <p>Мы являемся легально зарегистрированной клиникой, с интерактивным веб-сайтом, а также удобным мобильным приложением, которыми Вы можете воспользоваться в любое время.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="item_content">
                        <img src="/assets/images/payment-icon.png" alt="">
                        <h2>Выгодные цены</h2>
                        <p>Цены начинаются от 7000 тенге, в сумму вызова входят: оплата услуг врача, стоимость выезда, а также препараты, которые используются при осмотре и необходимом лечении.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mobile_app">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h1>Вызов врача через  приложение</h1>
                </div>
                <div class="col-md-4 app_img">
                    <img class="img_phone" src="/assets/images/iphone.png" alt="">
                </div>
                <div class="col-md-4">
                    <ul class="apps">
                        <li>
                            <img src="/assets/images/apple-store-dark.png" alt="">
                            <a href="#">Загрузка приложение <br> через Appstore</a>
                        </li>
                        <li>
                            <img src="/assets/images/google-play-dark.png" alt="">
                            <a href="#">Загрузка приложение <br> через Google Play</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="section_call">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Распространённые причины вызова</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-sm-4 col-xs-12">
                    <div class="item_call">
                        <div class="item_img">
                            <img src="/assets/images/headache.png" alt="">
                        </div>
                        <p>Головные боли</p>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-12">
                    <div class="item_call">
                        <div class="item_img">
                            <img src="/assets/images/2.png" alt="">
                        </div>
                        <p>Дискомфорт в животе</p>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-12">
                    <div class="item_call">
                        <div class="item_img">
                            <img src="/assets/images/heart.png" alt="">
                        </div>
                        <p>Проблемы с сердцем и сосудами</p>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-12">
                    <div class="item_call">
                        <div class="item_img">
                            <img src="/assets/images/4.png" alt="">
                        </div>
                        <p>Аллергия</p>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-12">
                    <div class="item_call">
                        <div class="item_img">
                            <img src="/assets/images/5.png" alt="">
                        </div>
                        <p>Простуда</p>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-12">
                    <div class="item_call">
                        <div class="item_img">
                            <img src="/assets/images/6.png" alt="">
                        </div>
                        <p>Другие неприятности</p>
                    </div>
                </div>
            </div>
            <div class="row all_rows">
                <div class="col-md-12">
                    <a href="{{route('reasons')}}" class="all_information">Вся информация</a>
                </div>
            </div>
        </div>
    </section>
    <section class="section_responsibilities">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Обязанности врача при вызове на дом</h1>
                    <p class="title_text"> Наши врачи внимательно вас выслушивают, объясняют все свои действия и никогда <br>
                        не назначают лечение «на всякий случай».</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="item_call">
                        <div class="item_center">
                            <p>1</p>
                        </div>
                        <p>Первым делом проведём осмотр, зададим вам вопросы и поставим диагноз.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="item_call">
                        <div class="item_center">
                            <p>2</p>
                        </div>
                        <p>Затем займёмся облегчением состояния: например, снимем боль или снизим давление.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="item_call">
                        <div class="item_center">
                            <p>3</p>
                        </div>
                        <p>После этого расскажем, как лечиться  и нужно ли проходить обследования. При необходимости оформим больничный.</p>
                    </div>
                </div>
            </div>
            <div class="row submit_call">
                <div class="col-md-12">
                    <button type="submit" onclick="callDoctor('Вызов врача на дом для детей и взрослых');" class="all_information">Сделать вызов</button>
                </div>
            </div>
        </div>
    </section>
    <section class="section_information">
        <div class="container">
            <div class="row">
                <h1>Отзывы о нашей работе</h1>
                @if(count( $rows['reviews']))
                    @foreach( $rows['reviews'] as $item)
                    <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="item_content">
                        <div class="item_img_person">
                            <img src="/assets/images/avatar.svg" alt="">
                        </div>
                        <h2>{{$item->getUserName($item['user_id'])}}</h2>
                        <p>{{ mb_strimwidth($item['review'],0,167)}}</p>
                    </div>
                </div>
                    @endforeach
                @endif
            </div>
            <div class="row submit_order">
                <div class="col-md-12">
                    <button type="button" onclick="window.location.href='/{{$locale}}/reviews';" class="all_information">Читать отзывы</button>
                </div>
            </div>
        </div>
    </section>
    <section class="section_information">
        <div class="container">
            <div class="row">
                <h1>Часто задаваемые вопросы</h1>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="item_content">
                        <div class="item_img_mode">
                            <img src="/assets/images/location.png" alt="">
                        </div>
                        <h2>В каком районе вы работаете?</h2>
                        <p>Врач выезжает в любой район Москвы, а также в Сходню, Одинцово, Мытищи и другие города ближайшего Подмосковья
                            (до 30 км от МКАД).</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="item_content">
                        <div class="item_img_mode">
                            <img src="assets/images/time-icon.png" alt="">
                        </div>
                        <h2> Какой режим работы
                            у NovaMed+?</h2>
                        <p>Вызовы на дом врача оформляются 24/7.
                            Наши терапевты и педиатры работают ежедневно с 7:00 до 22:00.
                            ЛОР и невролог доступны с 9:00 - 21:00. Медсестра с 7:00 - 13:00.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="item_content">
                        <div class="item_img_mode">
                            <img src="/assets/images/doc.png" alt="">
                        </div>
                        <h2>Выдает ли врач больничный
                            лист/справки?</h2>
                        <p>Если во время осмотра врач решит, что вам не стоит ходить на работу, то откроет вам больничный (а точнее – лист нетрудоспособности).</p>
                    </div>
                </div>
            </div>
            <div class="row submit_order">
                <div class="col-md-12">
                    <button type="button" onclick="window.location.href='/{{$locale}}/faq';" class="all_information">Все вопросы и ответы</button>
                </div>
            </div>
        </div>
    </section>
@stop
@push('scripts')
    <script>
    @if(Session::has('result'))
        $.toast({
            heading: '{{trans('app.success')}}',
            text: "Спасибо, ваша заявка принята. Администратор свяжется с вами в ближайшее время. Будьте здоровы!",
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'success',
            hideAfter: 3500
        });
    @endif
    </script>
@endpush