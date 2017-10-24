@extends('system.layouts.app')
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Заказы</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="/system">Администрация</a></li>
                <li class="active">Заказы</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading"><a href="/system/application?is_archive=0">Новые заказы </a> | <a href="/system/application?is_archive=1">Архив</a></div>
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
                                            <th>Тип заказа</th>
                                            <th>Адрес</th>
                                            <th>Время</th>
                                            <th>Комментарий</th>
                                            <th>Дата заказа</th>
                                            <th class="text-nowrap">Действие</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(count($rows['application']))
                                            @foreach($rows['application'] as $item)
                                                <tr id="item_{{$item->id}}">
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$item->name}}</td>
                                                    <td>{{$item->text_type}}</td>
                                                    <td>{{$item->address}}</td>
                                                    <td>{{$item->time}}</td>
                                                    <td>{{$item->comment}}</td>
                                                    <td>{{$item->created_at}}</td>
                                                    <td class="text-nowrap">
                                                        @if($item->is_archive != 1)
                                                            <a href="javascript:void(0);" class="update_form_element" data-id="{{$item->id}}" data-toggle="tooltip" data-original-title="Добавить в архив"> <i class="fa  fa-briefcase text-danger"></i> </a>
                                                        @endif
                                                        <a href="javascript:void(0);" class="delete_form_element" data-id="{{$item->id}}" data-toggle="tooltip" data-original-title="Удалить"> <i class="fa  fa-close text-danger"></i> </a>
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
        $('.update_form_element').on('click',function () {
            var item =$(this);
            $.post('/system/update-form-element/'+$(this).attr('data-id'),{_token : '{{csrf_token()}}'},function (data) {
                console.log(data);
                if (data.result == 1){
                    item.parent().parent().hide();
                }else{
                    alert('Ошибка при удалении');
                }
            });
        });
    </script>
    <script>
        $('.delete_form_element').on('click',function () {
            var item =$(this);
            $.post('/system/delete-form-element/'+$(this).attr('data-id'),{_token : '{{csrf_token()}}'},function (data) {
                if (data.result == 1){
                    item.parent().parent().hide();
                }else{
                    alert('Ошибка при удалении');
                }
            });
        });
    </script>
@endpush