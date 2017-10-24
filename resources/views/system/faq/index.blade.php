@extends('system.layouts.app')
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Вопросы и ответы</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="/system">Администрация</a></li>
                <li class="active">Вопросы и ответы</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Вопросы и ответы <a href="{{route('faq.create')}}" class="btn btn-inverse pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Добавить</a></div>
                <div class="panel-wrapper p-b-10 collapse in">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="white-box">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>N</th>
                                            <th>Email</th>
                                            <th>Пользователь</th>
                                            <th>Вопрос</th>
                                            <th>Ответ</th>
                                            <th>Статус</th>
                                            <th class="text-nowrap">Действие</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(count($rows['faqs']))
                                            @foreach($rows['faqs'] as $item)
                                                <tr id="item_{{$item->id}}">
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$item->email}}</td>
                                                    <td>{{$item->getUserName($item->user_id)}}</td>
                                                    <td>{{$item->query}}</td>
                                                    <td>{{mb_strimwidth($item->answer,0,50)}}</td>
                                                    <td>{!! $item->is_site == 1 ? '<span class="label label-info">Опубликован</span>' : '<span class="label label-danger">Архив</span>'!!}</td>
                                                    <td class="text-nowrap">
                                                        <a href="/system/faq/{{$item->id}}/edit" data-toggle="tooltip" data-original-title="Ответить"> <i class="mdi  mdi-apple-keyboard-caps text-primary m-r-10"></i> </a>
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
            $.post('/system/faq/'+$(this).attr('data-id')+'/delete',{_token : '{{csrf_token()}}'},function (data) {
                if (data.result == 1){
                    item.parent().parent().hide();
                }else{
                    alert('Ошибка при удалении');
                }
            });
        });
    </script>
@endpush