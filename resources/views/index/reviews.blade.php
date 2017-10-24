@extends('index.layouts.app')
@section('title')
    Отзывы
@endsection
@section('content')
    <section class="reviews_items">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="reviews_content">
                        <h1 class="review_title">Отзывы</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="reviews">
        <div class="container">
            @if(count($rows['reviews']))
                @foreach($rows['reviews'] as $item)
                    <div class="reviews_content_items">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <p class="person_name">{{$item->getUserName($item['user_id'])}}</p>
                            </div>
                            <div class="col-md-6 col-sm-6 cols-xs-6">
                                @php
                                $date = Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item->created_at)->format('Y-m-d');
                                $data = explode('-',$date);
                                @endphp
                                <p class="review_date">{{$data[2].' '.Helper::getMonthName($data[1]).' '.$data[0]}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="reviews_item">
                                    <p>{{$item['review']}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </section>
    @include('index.layouts.faq')
@stop