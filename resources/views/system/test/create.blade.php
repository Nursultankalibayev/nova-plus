@extends('system.layouts.app')
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Анализы | Добавление</h4> </div>
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
                <div class="panel-wrapper p-b-10 collapse in">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="white-box">
                                <form action="{{route('test.store')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label class="col-md-12">Заголовок RU *</label>
                                        <div class="col-md-12">
                                            <input type="text" name="title_ru" class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Заголовок KK</label>
                                        <div class="col-md-12">
                                            <input type="text" name="title_kk" class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Заголовок EN</label>
                                        <div class="col-md-12">
                                            <input type="text" name="title_en" class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="category_id" class="col-md-12">Категория *</label>
                                        <div class="col-md-12">
                                            <select id="category_id" class="form-control" name="category_id">
                                                @if(count($rows['categories'] ))
                                                    @foreach($rows['categories'] as $item)
                                                        <option value="{{$item->id}}">{{$item->title_ru}}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Цена *</label>
                                        <div class="col-md-12">
                                            <input type="text" name="price" class="form-control" value="">
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