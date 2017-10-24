@extends('system.layouts.app')
@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Слайдер | Изменение</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="/system">Администрация</a></li>
                <li class="active">Слайдер</li>
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
                                @if(count($rows['carousel']))
                                    <form action="{{route('carousel.update',$rows['carousel']->id)}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        {{method_field('PUT')}}
                                        <div class="form-group">
                                            <label class="col-md-12">Заголовок RU *</label>
                                            <div class="col-md-12">
                                                <input type="text" name="title_ru" class="form-control" value="{{$rows['carousel']->title_ru}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Заголовок KK</label>
                                            <div class="col-md-12">
                                                <input type="text" name="title_kk" class="form-control" value="{{$rows['carousel']->title_kk}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Заголовок EN</label>
                                            <div class="col-md-12">
                                                <input type="text" name="title_kk" class="form-control" value="{{$rows['carousel']->title_kk}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Краткое описание RU *</label>
                                            <div class="col-md-12">
                                                <input type="text" name="short_desc_ru" class="form-control" value="{{$rows['carousel']->short_desc_ru}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Краткое описание KK</label>
                                            <div class="col-md-12">
                                                <input type="text" name="short_desc_kk" class="form-control" value="{{$rows['carousel']->short_desc_kk}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Краткое описание EN</label>
                                            <div class="col-md-12">
                                                <input type="text" name="short_desc_en" class="form-control" value="{{$rows['carousel']->short_desc_en}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Название кнопки RU *</label>
                                            <div class="col-md-12">
                                                <input type="text" name="title_button_ru" class="form-control" value="{{$rows['carousel']->title_button_ru}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Название кнопки KK</label>
                                            <div class="col-md-12">
                                                <input type="text" name="title_button_kk" class="form-control" value="{{$rows['carousel']->title_button_kk}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Название кнопки EN</label>
                                            <div class="col-md-12">
                                                <input type="text" name="title_button_en" class="form-control" value="{{$rows['carousel']->title_button_en}}">
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
                                                <img style="height: 100px;" src="/uploads/carousels/{{$rows['carousel']->image}}" alt="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Сортировка</label>
                                            <div class="col-md-12">
                                                <input type="text" name="sorting" class="form-control" value="{{$rows['carousel']->sorting}}">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="type" class="col-md-12">Тип *</label>
                                            <div class="col-md-12">
                                                <select id="type" class="form-control" name="type">
                                                    <option {{$rows['carousel']->type == 0 ? 'selected' : ''}} value="0">Вызов</option>
                                                    <option value="1" {{$rows['carousel']->type == 1 ? 'selected' : ''}}>Переход</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-12">Ссылка</label>
                                            <div class="col-md-12">
                                                <input type="text" name="link" class="form-control" value="{{$rows['carousel']->link}}">
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