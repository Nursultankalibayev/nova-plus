@extends('system.layouts.app')
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Категория анализов | Изменение</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="/system">Администрация</a></li>
                <li class="active">Категория анализов</li>
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
                                @if(count($rows['test-category']))
                                    <form action="{{route('test-category.update',$rows['test-category']->id)}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        {{method_field('PUT')}}
                                        <div class="form-group">
                                            <label class="col-md-12">Заголовок RU *</label>
                                            <div class="col-md-12">
                                                <input type="text" name="title_ru" class="form-control" value="{{$rows['test-category']->title_ru}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Заголовок KK</label>
                                            <div class="col-md-12">
                                                <input type="text" name="title_kk" class="form-control" value="{{$rows['test-category']->title_kk}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Заголовок EN</label>
                                            <div class="col-md-12">
                                                <input type="text" name="title_en" class="form-control" value="{{$rows['test-category']->title_en}}">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary waves-effect waves-light m-r-10">Сохранить</button>
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