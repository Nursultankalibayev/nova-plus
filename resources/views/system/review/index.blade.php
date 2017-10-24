@extends('system.layouts.app')
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Отзывы</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="/system">Администрация</a></li>
                <li class="active">Отзывы</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Отзывы <a href="{{route('review.create')}}" class="btn btn-inverse pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Добавить</a></div>
                <div class="panel-wrapper p-b-10 collapse in">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="white-box">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>N</th>
                                            <th>Имя</th>
                                            <th>Email</th>
                                            <th>Отзыв</th>
                                            <th>Ответ</th>
                                            <th>Статус</th>
                                            <th class="text-nowrap">Действие</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(count($rows['reviews']))
                                            @foreach($rows['reviews'] as $item)
                                                <tr id="item_{{$item->id}}">
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$item->name}}</td>
                                                    <td>{{$item->email}}</td>
                                                    <td>{{mb_strimwidth($item->review,0,50)}}</td>
                                                    <td>{{mb_strimwidth($item->answer,0,50)}}</td>
                                                    <td>{!! $item->is_site == 1 ? '<span class="label label-info">Опубликован</span>' : '<span class="label label-danger">Архив</span>'!!}</td>
                                                    <td class="text-nowrap">
                                                        <a href="{{route('review.edit',$item->id)}}" data-toggle="tooltip" data-original-title="Изменить"> <i class="mdi  mdi-apple-keyboard-caps text-primary m-r-10"></i> </a>
                                                        <a href="javascript:void(0);" class="delete_form_element" data-id="{{$item->id}}" data-toggle="tooltip" data-original-title="Удалить"> <i class="mdi mdi-delete text-danger"></i> </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@push('scripts')
    <script>
        $('.delete_form_element').on('click',function () {
            var item =$(this);
            $.post('/system/review/'+$(this).attr('data-id'),{_token : '{{csrf_token()}}',_method :'DELETE'},function (data) {
                if (data.result == 1){
                    item.parent().parent().hide();
                }else{
                    alert('Ошибка при удалении');
                }
            });
        });
    </script>
@endpush