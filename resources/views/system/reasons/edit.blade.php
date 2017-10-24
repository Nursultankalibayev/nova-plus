@extends('system.layouts.app')
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Распространённые причины вызова  | Изменение</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="/system">Администрация</a></li>
                <li class="active">Распространённые причины вызова </li>
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
                                @if(count($rows['reasons']))
                                    <form action="{{route('reasons.update',$rows['reasons']->id)}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        {{method_field('PUT')}}
                                        <div class="form-group">
                                            <label class="col-md-12">Заголовок RU *</label>
                                            <div class="col-md-12">
                                                <input type="text" name="title_ru" class="form-control" value="{{$rows['reasons']->title_ru}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Заголовок KK</label>
                                            <div class="col-md-12">
                                                <input type="text" name="title_kk" class="form-control" value="{{$rows['reasons']->title_kk}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Заголовок EN</label>
                                            <div class="col-md-12">
                                                <input type="text" name="title_en" class="form-control" value="{{$rows['reasons']->title_en}}">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-12">Причины RU (через запятую)*</label>
                                            <div class="col-md-12">
                                                <input type="text" name="short_desc_ru" class="form-control" value="{{$rows['reasons']->short_desc_ru}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Причины KK (через запятую) </label>
                                            <div class="col-md-12">
                                                <input type="text" name="short_desc_kk" class="form-control" value="{{$rows['reasons']->short_desc_kk}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Причины EN (через запятую) </label>
                                            <div class="col-md-12">
                                                <input type="text" name="short_desc_en" class="form-control" value="{{$rows['reasons']->short_desc_en}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Описание RU *</label>
                                            <div class="col-md-12">
                                                <textarea class="form-control" name="desc_ru" rows="5">{{$rows['reasons']->desc_ru}}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Описание KK</label>
                                            <div class="col-md-12">
                                                <textarea class="form-control" name="desc_kk" rows="5">{{$rows['reasons']->desc_kk}}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Описание EN</label>
                                            <div class="col-md-12">
                                                <textarea class="form-control" name="desc_en" rows="5">{{$rows['reasons']->desc_en}}</textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-12">Картинка *</label>
                                            <div class="col-sm-12">
                                                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                    <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                                            <input type="file" name="image"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <img style="height: 100px;" src="/uploads/reasons/{{$rows['reasons']->image}}" alt="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Сортировка</label>
                                            <div class="col-md-12">
                                                <input type="text" name="sorting" class="form-control" value="{{$rows['reasons']->sorting}}">
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