@extends('index.layouts.app')
@section('title')
    Анализы
@endsection
@section('content')
    @if(count($rows['carousel']))
        <section class="carousel">
            <div class="slid-main">
                <div class="item" style="background: url('/uploads/carousels/{{$rows['carousel']->image}}') no-repeat; background-position: top;     background-size:cover;">
                    <div class="container">
                        <div class="item_content_online_lor">
                            <div class="item_title">{{$rows['carousel']->$title}}</div>
                            <p class="item_short_desc">{{$rows['carousel']->$short_desc}}</p>
                            <button onclick="callDoctor('{{$rows['carousel']->$title}}');" class="item_button">{{$rows['carousel']->$title_button}}</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <section class="we_offer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="title_we_offer">Мы предлагаем</h1>
                </div>
            </div>
            <div class="items_we_offer">
                <div class="item_we_offer">
                    <img src="/assets/images/placeholder.png" alt="">
                    <p>Прием в любой
                        точке города</p>
                </div>
                <div class="item_we_offer">
                    <img src="/assets/images/online_clock.png" alt="">
                    <p>Сдача анализов
                        с 7:00 до 13:00
                        без выходных</p>
                </div>
                <div class="item_we_offer">
                    <img src="/assets/images/medical-history.png" alt="">
                    <p>Бесплатная консультация
                        с врачом</p>
                </div>
                <div class="item_we_offer">
                    <img src="/assets/images/medical-history-2.png" alt="">
                    <p>Результаты будут
                        отправлены
                        на e-mail</p>
                </div>
                <div class="item_we_offer">
                    <img src="/assets/images/big_first-aid-kit.png" alt="">
                    <p>Точность результатов
                        и удобство</p>
                </div>
            </div>
        </div>
    </section>
    <section class="guide_to_testing">
        <div class="container">
            <h1 class="guide_to_testing_title">Памятка по сдаче анализов</h1>
            <p>Как правильно сдавать анализы</p>
            <a  class="guide_to_testing_download"  href="/assets/document/kak_sdavat_analizy.pdf" target="_blank">Скачать .pdf (1.2 мб)</a>
        </div>
    </section>
    <section class="search_by_tests">
        <div class="container">
            <h1 class="search_by_tests_title">Поиск по анализам</h1>
            <p>Выберите нужный вам анализ</p>
            <div class="row">
                <div class="col-md-9">
                    <input type="text" id="search_result">
                    <div class="search_result"></div>
                </div>
                <div class="col-md-3">
                    <button id="search_button">Поиск</button>
                </div>
            </div>
        </div>
    </section>
    <section class="tests_tabs">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <ul class="tests_tabs_title">
                        @if(count($rows['test_category']))
                            @foreach($rows['test_category'] as $k=>$item)
                                <li class="{{$k==0 ? 'active' : ''}}" ><a data-toggle="tab" href="#menu{{$item['id']}}">{{$item[$title]}}</a></li>
                            @endforeach
                        @endif
                    </ul>
                </div>
                <div class="col-md-8">
                    <div class="tab-content">
                        @if(count($rows['test_category']))
                            @foreach($rows['test_category'] as $k=>$item)
                                <div id="menu{{$item['id']}}" class="tab-pane fade in {{$k==0 ? 'active' : ''}}">
                                    @if(count(Helper::getTestTitle($item['id'])))
                                        @foreach(Helper::getTestTitle($item['id']) as $item)
                                            <div class="row tab_rows">
                                                <div class="col-md-10">
                                                    <h3>{{$item[$title]}}</h3>
                                                </div>
                                                <div class="col-md-2">
                                                    <p>{{$item['price']}} ₸</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('index.layouts.faq')
@stop
@push('scripts')
    <script>
        $('.search_by_tests').on('keyup','#search_result',function () {
            var value = $(this).val().replace(',','').replace('.','');
            $.get('/keyup-search?text='+value,function (response) {
                $('.search_result').css('display','block').html(response);
            });
        });
        $('.search_by_tests').on('click','.search_result .analysis-sch',function () {
            var id = $(this).attr('data-id');
            var text = $(this).text().trim();
            $('#search_result').val(text);
            $('.search_result').hide();
            $.get('/keyup-result?id='+id,function (response) {
                $('.tests_tabs .container .row').html(response);
            });
        });
        $('.search_by_tests').on('click','#search_button',function () {
            var query = $(this).parent().parent().find('#search_result').val();
            $.get('/search-button?text='+query,function (response) {
                $('.tests_tabs .container .row').html(response);
            })
        });

    </script>
@endpush