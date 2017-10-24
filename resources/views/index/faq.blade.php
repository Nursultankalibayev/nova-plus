@extends('index.layouts.app')
@section('title')
    Вопросы и ответы
@endsection
@section('content')
    <section class="faq_content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="faq_content_title">Вопросы, которые нам часто задают</h1>
                    <p class="faq_content_next">И ответы, которые помогут больше о нас узнать</p>
                </div>
            </div>
        </div>
    </section>
    <section class="accordion">
        <div class="container">
            <div class="accordion_content">
                <div id="accordion">
                   @if(count($rows['faq']))
                       @foreach($rows['faq'] as $item)
                            <h3>{{$item['query']}}</h3>
                            <div>
                                <p>
                                    {{$item['answer']}}
                                </p>
                            </div>
                        @endforeach
                   @endif
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script src="/assets/js/jquery-ui.min.js"></script>
    <script>
        $( function() {
            $( "#accordion" ).accordion();
        });
    </script>
@endpush