@extends('system.layouts.app')
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Вопросы и  ответы | Изменение</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="/system">Администрация</a></li>
                <li class="active">Вопросы и  ответы </li>
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
                                @if(count($rows['faq']))
                                    <form action="/system/faq/{{$rows['faq']->id}}/store" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <label class="col-md-12">Email *</label>
                                            <div class="col-md-12">
                                                <input type="text" name="email" class="form-control" value="{{$rows['faq']->email}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Вопрос *</label>
                                            <div class="col-md-12">
                                                <textarea name="query" id="" class="form-control" rows="5">{{$rows['faq']->query}}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Ответ </label>
                                            <div class="col-md-12">
                                                <textarea name="answer" id="" class="form-control" rows="5">{{$rows['faq']->answer}}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <input id="checkbox0" {{$rows['faq']->is_site == 1 ? 'checked' : ''}} name="is_site" type="checkbox">
                                                    <label for="checkbox0">Опубликовать </label>
                                                </div>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-primary waves-effect waves-light m-r-10">Ответить</button>
                                        <button type="button" onclick="window.location.href='{{URL::previous()}}';" class="btn btn-inverse waves-effect waves-light">Отмена</button>
                                    </form>
                                @endif
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