@extends('index.layouts.app')
@section('title')
    Лор
@stop
@section('content')
    @if(count($rows['carousel']))
    <section class="carousel">
        <div class="slid-main">
            <div class="item" style="background: url('/uploads/carousels/{{$rows['carousel']->image}}') no-repeat; background-position: top;     background-size:cover;">
                <div class="container">
                    <div class="item_content_online_lor">
                        <div class="item_title">{{$rows['carousel']->$title}}</div>
                        <p class="item_short_desc">{{$rows['carousel']->$short_desc}}</p>
                        <button onclick="callDoctor('{{$rows['carousel']->$title}}');" class="item_button">Вызвать ЛОРа</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    <section class="contact_lor">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="title_contact_lor">Когда обращаться к ЛОРу</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="item_contact_lor">
                        <div class="contact_lor_img">
                            <img src="/assets/images/ear.png" alt="">
                        </div>
                        <h2 class="item_title_contact_lor">Непорядок с органами слуха</h2>
                        <p>Различные боли в ушах, серные пробки, различные выделения из ушных проходов.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item_contact_lor">
                        <div class="contact_lor_img">
                            <img src="/assets/images/nose.png" alt="">
                        </div>
                        <h2 class="item_title_contact_lor">Непорядок с носом</h2>
                        <p>Различные боли в носу, а также в районе лба, тяжело дышать, низкое обоняния, носовые выделения и кровотечения, сухость в носу и храп.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item_contact_lor">
                        <div class="contact_lor_img">
                            <img src="/assets/images/thorat.png" alt="">
                        </div>
                        <h2 class="item_title_contact_lor">Непорядок с горлом</h2>
                        <p>При покраснении и боли в горле, пропадание и осиплость голоса, возникновение ангины, увеличение лимфоузлов под челюстью, белый налёт на миндалинах.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="manipulation_ent">
        <div class="container">
            <div class="manipulation_content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="manipulation_items">
                            <h1 class="manipulation_title">Манипуляция ЛОР-врача на выезд</h1>
                            <p>В случае необходимости врач сможет осуществить манипуляции и процедуры, которые оплачиваются дополнительно</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        @if(count($rows['lor_content']))
                            @foreach($rows['lor_content'] as $item)
                                <div class="manipulation_item">
                            <div class="row">
                                <div class="col-md-10">
                                    <h1>{{$item->$title}}</h1>
                                </div>
                                <div class="col-md-2">
                                    <p class="manipulation_price">{{$item->$price}} ₸</p>
                                </div>
                            </div>
                        </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="manipulation_items_button">
                        <button onclick="callDoctor('Манипуляция ЛОР-врача на выезд');" class="manipulation_button">Вызвать ЛОРа</button>
                    </div>
                </div>
                <div class="manipulation_items_content">
                    <p>Как часто нам приходится сталкиваться с проблемами «ухо-горло- нос»? Настолько часто, что даже не сосчитать.</p>
                    <p>С самого детства при малейшем намеке на ангину, родители нас водили к ЛОР-у, чтобы предотвратить хроническое заболевание.</p>
                    <p>С возрастом мы привыкаем к периодическим кашлям или насморкам, ссылаясь на простуду или небольшое недомогание, которое может с легкостью пройти. Зачастую и очень хорошо что это именно так. А что если появились странные выделения? Бывает, что болит нос и вместе с ним и лоб, а вы не понимаете почему. Бывает также, что становится тяжело дышать.</p>
                    <p>Многие жалуются на храп партнера по ночам, а у некоторых эта проблема с детства. Конечно, можно прочитать информацию в интернете, можно спросить у знакомых или у бабушки-целителя в деревни. Но самый проверенный и эффективный способ - посетить врача. Специалист в отличие от интернета даст достоверную информацию, а также подходящую именно вам.</p>
                    <p>Не следует ставить диагнозы самостоятельно. Это может привести к неправильному лечению и приему не тех веществ. И главное, не стоит с этим затягивать. Как только вы заметили недомогание, странные признаки, которых никогда не было, или даже при хронических заболеваниях обращайтесь к врачу.</p>
                    <p>Мы предлагаем решение проблемы. Вы не только можете не теряя время сразу на месте решить проблему с нашими врачами, но также сделать это не выходя из дома. Есть возможность провести онлайн - консультацию и узнать ответы на ваши вопросы.Но в случае, если этого мало, то наш врач приедет к вам, осмотрит и поставит диагноз. А на основании данного диагноза уже назначит лечение. И все это в течение двух часов.</p>
                </div>
            </div>
        </div>
    </section>
    @include('index.layouts.faq')
@stop