@extends('index.layouts.app')
@section('title')
    Невропотолог
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
                            <button onclick="callDoctor('{{$rows['carousel']->$title}}');" class="item_button">Вызвать невропатолога</button>
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
                    <h1 class="title_contact_lor">Когда обращаться к невропотологу</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="item_contact_lor">
                        <div class="contact_lor_img">
                            <img src="/assets/images/skull.png" alt="">
                        </div>
                        <h2 class="item_title_contact_lor">Частая головная боль</h2>
                        <p>(головокружения, мигрень, шум в ушах, боли в спине и шее)</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item_contact_lor">
                        <div class="contact_lor_img">
                            <img src="/assets/images/dream.png" alt="">
                        </div>
                        <h2 class="item_title_contact_lor">Усталость и слабость</h2>
                        <p>(нарушение сна, хроническое недосыпание, тревожность)</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item_contact_lor">
                        <div class="contact_lor_img">
                            <img src="/assets/images/thinking.png" alt="">
                        </div>
                        <h2 class="item_title_contact_lor">Проблемы с давлением</h2>
                        <p>(снижение концентрации внимания, неустойчивость
                            артериального давления, частые обмороки, нарушение речи)</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item_contact_lor">
                        <div class="contact_lor_img">
                            <img src="/assets/images/brain-3.png" alt="">
                        </div>
                        <h2 class="item_title_contact_lor">Последствия после операций</h2>
                        <p>(черепно-мозговые травмы, последствия инсульта, непереносимость нагрузок)</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="manipulation_ent">
        <div class="container">
            <div class="manipulation_content">
                <div class="manipulation_items_content">
                    <p>Нервы - это наша основная система, на чем держится весь организм и наша мозговая деятельность. Пренебрегать нервами - относиться безответственно к своему здоровью полноценно.</p>
                    <p>Выше приведены случаи, когда необходимо обратиться к врачу, и не следует пренебрегать явными признаками недомогания, иначе это может привести к обострению болезни и ухудшению здоровья в целом.</p>
                    <p>Если вас беспокоят частая головная боль, хроническая усталость, проблемы с давлением или какие-либо последствия после операции, к примеру, ушибы и травмы, то вам следует обратиться к врачу за помощью.</p>
                    <p>Как это сделать?</p>
                    <p>Скачайте приложение в Play Market или AppStore, пройдите быструю регистрацию. После вам предложат получить быстрый ответ на ваши вопросы либо вызвать врача на дом. Мы решили облегчить и ускорить процесс выздоровления для вас с помощью данного приложения.</p>
                    <p>Наш специалист осмотрит вас, назначит соответствующее лечение и проконсультирует вас по возникшим вопросам.</p>
                </div>
            </div>
        </div>
    </section>
    @include('index.layouts.faq')
@stop