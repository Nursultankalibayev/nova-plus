@extends('index.layouts.app')
@section('title')
Услуги
@endsection
@section('content')
    <section class="services">
        <div class="container">
            <div class="row">
                @if(count($rows['services']))
                    @foreach($rows['services'] as $key=> $item)
                        <div class="col-md-6">
                                <div class="service_item">
                                    <div class="service_img">
                                        <img src="/uploads/services/{{$item['image']}}" alt="">
                                    </div>
                                    <div class="service_content">
                                        <a href="/{{$locale}}/{{$item['link']}}"> <h1>{{$item[$title]}}</h1></a>
                                        <p class="service_price">{{$item[$price]}}</p>
                                        <p class="service_text">{{$item[$desc]}}</p>
                                        <button onclick="callDoctor('{{$item[$title]}}');" type="button">Сделать вызов</button>
                                    </div>
                                </div>
                        </div>
                    @if(($key +1) % 2 ==0)
                        <div class="clearfix"></div>
                    @endif
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    @include('index.layouts.faq')
@stop