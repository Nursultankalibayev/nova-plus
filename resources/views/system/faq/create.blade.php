@extends('system.layouts.app')
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Вопросы и ответы | Добавление</h4> </div>
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
                <div class="panel-wrapper p-b-10 collapse in">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="white-box">
                                <form action="{{route('faq.save')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label class="col-md-12">Email *</label>
                                        <div class="col-md-12">
                                            <input type="text" name="email" class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="user_id" class="col-md-12">Пользователь *</label>
                                        <div class="col-md-12">
                                            <select id="user_id" class="form-control" name="user_id">
                                                @if(count($rows['users'] ))
                                                    @foreach($rows['users'] as $item)
                                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12" for="query">Вопрос *</label>
                                        <div class="col-md-12">
                                            <textarea id="query" class="form-control" name="query" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12" for="answer">Ответ</label>
                                        <div class="col-md-12">
                                            <textarea id="answer" class="form-control" name="answer" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <input id="checkbox0" name="is_site" checked type="checkbox">
                                                <label for="checkbox0">Опубликовать </label>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary waves-effect waves-light m-r-10">Сохранить</button>
                                    <button type="button" onclick="window.location.href='{{URL::previous()}}';" class="btn btn-inverse waves-effect waves-light">Отмена</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@push('scripts')
    <script src="/js/jasny-bootstrap.js"></script>

    @if(count($errors))
        @foreach ($errors->all() as $error)
            <script>
                $.toast({
                    heading: '{{trans('app.error_when_filling')}}',
                    text : '{{$error}}',
                    position: 'bottom-right',
                    loaderBg: '#ff6849',
                    icon: 'error',
                    hideAfter: 3500
                });
            </script>
        @endforeach
    @endif
@endpush