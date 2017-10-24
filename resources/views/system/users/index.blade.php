@extends('system.layouts.app')
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Пользователи</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="/system">Администрация</a></li>
                <li class="active">Пользователи</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Список пользователей</div>
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
                                            <th>Номер</th>
                                            <th>Адрес</th>
                                            <th>Дата рождения</th>
                                            <th>Дата регистрации</th>
                                            <th class="text-nowrap">Действие</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(count($rows['users']))
                                            @foreach($rows['users'] as $item)
                                                <tr id="item_{{$item->id}}">
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$item->name}}</td>
                                                    <td>{{$item->phone}}</td>
                                                    <td>{{$item->address}}</td>
                                                    <td>{{$item->birthday}}</td>
                                                    <td>{{$item->created_at}}</td>
                                                    <td class="text-nowrap">
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
        $('.delete_form_element').on('click',function () {
            var item =$(this);
            $.post('/system/delete-form-user/'+$(this).attr('data-id'),{_token : '{{csrf_token()}}'},function (data) {
                if (data.result == 1){
                    item.parent().parent().hide();
                }else{
                    alert('Ошибка при удалении');
                }
            });
        });
    </script>
@endpush