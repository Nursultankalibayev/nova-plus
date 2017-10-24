@extends('index.layouts.app')
@section('title')
    Распространённые причины вызова
@stop
@section('content')
    <section class="contact_us_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="contact_us_section_title">Распространённые причины вызова</h1>
                </div>
            </div>
            <div class="row">
                @if(count($rows['reasons']))
                    @foreach($rows['reasons'] as $item)
                        <div class="col-md-6">
                    <div class="contact_us_item">
                        <div class="contact_us_item_img">
                            <img src="/uploads/reasons/{{$item['image']}}" alt="">
                        </div>
                        <div class="contact_us_item_content">
                            <h2>{{$item[$title]}}</h2>
                            <ul class="contact_us_item_list">
                                @php
                                    $data = explode(',',$item[$short_desc]);
                                @endphp
                                @foreach($data as $i)
                                    <li>{{$i}}</li>
                                @endforeach
                            </ul>
                            <div class="contact_us_item_description">
                                <h3>{{trans('app.call_doctor')}}:</h3>
                                <p>{{$item[$desc]}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    @include('index.layouts.faq')
@stop