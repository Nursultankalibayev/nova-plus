@extends('system.layouts.app')
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Анализы</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="/system">Администрация</a></li>
                <li class="active">Анализы</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Список анализов <a href="{{route('test.create')}}" class="btn btn-inverse pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Добавить</a></div>
                <div class="panel-wrapper p-b-10 collapse in">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="white-box">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>N</th>
                                            <th>Заголовок</th>
                                            <th>Категория</th>
                                            <th>Цена</th>
                                            <th class="text-nowrap">Действие</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(count($rows['tests']))
                                            @foreach($rows['tests'] as $item)
                                                <tr id="item_{{$item->id}}">
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$item->title_ru}}</td>
                                                    <td>{{$item->category_id}}</td>
                                                    <td>{{$item->price}}</td>
                                                    <td class="text-nowrap">
                                                        <a href="{{route('test.edit',$item->id)}}" data-toggle="tooltip" data-original-title="Изменить"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                        <a href="javascript:void(0);" class="delete_form_element" data-id="{{$item->id}}" data-toggle="tooltip" data-original-title="Удалить"> <i class="fa fa-close text-danger"></i> </a>
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
            $.post('/system/test/'+$(this).attr('data-id'),{_token : '{{csrf_token()}}',_method :'DELETE'},function (data) {
                if (data.result == 1){
                    item.parent().parent().hide();
                }else{
                    alert('Ошибка при удалении');
                }
            });
        });
    </script>
@endpush